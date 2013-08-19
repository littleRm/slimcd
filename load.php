<?php
	
	if (!isset($_SESSION)){
		 session_start();
	}	
	if(!empty($_GET['logout'])){
		session_destroy();
		header("Location:".$_SERVER['PHP_SELF']."?".str_replace("logout=y","",$_SERVER['QUERY_STRING']));
		exit;
	}
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Billing Info</title>
<link rel="stylesheet" type="text/css" media="all" href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800">
<link rel="stylesheet" type="text/css" media="all" href="_css/styles.css" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="_scripts/jquery.creditCardValidator.js"></script>
<script type="text/javascript" src="//stats.slimcd.com/soft/json/slimcd.js"></script>
<script language="javascript">
	/*
	SLIMCD CREDIT CARD FORM DEMO USING ProcessTransaction 'LOAD' (NO CVV2 USED)
	*/
	var publicToken = "PVJK4T9P";

	$(document).ready(function() {
		
			//select all input elements that have a name attribute
		$("input[name],select[name]").each(function(){
				//save original input values into element data
			$(this).data('oldVal', $(this).val());
				//bind ajaxUpdate function to input fields on value change
			$(this).unbind('change').change(function(){
				ajaxUpdate($(this)); 
			});
		});
		
			//bind setBilling function to setBilling button
		$("#setBilling").click(function(){
			setBilling();			
		});
	
			//bind cardNumLoad function to cardNum input on value change
		$("input#cardNum").change(function(){
				//if cardNum has value, clear error class
			if($(this).val()!=""){ 
				$(this).removeClass('err');
				$("[for='"+$(this).attr('id')+"']").removeClass('err');
			}
				//call cardNumLoad and function
			cardNumLoad();
		});
	
			//set validateCreditCard plugin to cardNum input field
		$("input#cardNum").validateCreditCard(function(e){
					//if no card_type returned, remove classes and exit
				if (e.card_type == null) {
					$(".cards li").removeClass("off");
					$("input#cardNum").removeClass("valid");
					return
				}
					//otherwise set all card logos to class off except returned card_type
				$(".cards li").addClass("off");
				$(".cards ." + e.card_type.name).removeClass("off");
					//if card number valid, add valid class to cardNum input, otherwise remove
				return e.length_valid && e.luhn_valid ? $("input#cardNum").addClass("valid") : $("input#cardNum").removeClass("valid")
			}, {
				//set card_types allowed
            accept: ["visa", "amex", "mastercard", "discover"]
        });
	
			//bind processCard function to processCard button
		$("#processCard").click(function(){
			processCard($(this));
		});
		
			//load values from session into input fields
		loadValues();
		
	}); //end doc.ready
	
		//use ajax to call php script to process credit card using values from session
	function processCard(ref) {
			//check if we have a gateID and if processCard button already pressed
		if($('#gateID').val() != '' && $(ref).data('suspend') != 'yes'){
				//set data to suspend processCard button click and add greyout class
			$(ref).data('suspend','yes').addClass('greyout');
			
				//call processCard php script using ajax
			$.getJSON(  
				'_ajax/processCard.php',  
				function(res) {  
						//if response not ok, display error and unsuspend processCard button
					if(res.ok == "no"){
						$('#errorMsg').html(res.err);
						$(ref).data('suspend','no').removeClass('greyout');	
					}else{ //otherwise hide form fields and display success message
						$('.displayBilling, #finalizedBilling').hide();
						$('.success').show();
						$('#processMsg').html(res.msg+"<br>");
							//display datablock for debugging
						$.each(res.response.datablock, function(k, v) {
							$('#processMsg,#errorMsg').append('<br>'+k+': <b>'+v+'</b>');				
						});
					}
				}  
			); 
		}
	}
	
		//use ajax to call php script to check if all billing info is saved to session
	function setBilling(){
		$.getJSON(  
			'_ajax/setBilling.php',  
			function(res) { 
					//if response ok, hide form fields and show div with returned final billing info
				if(res.ok == "yes"){ 
					$("#displayBilling").hide();
					$("#finalizedBilling").show();
					$('<div/>',{'class':'finalBilling',html:res.out+'<div class="edit">edit</div>'}).prependTo('#finalizedBilling');
						//bind edit button on click re-display form fields and hide final billing info
					$(".edit").click(function(){
						$("#displayBilling").show();
						$(".finalBilling").remove();
						$("#errorMsg").html('');
						$("#finalizedBilling").hide();
					});
				}else{ //if response is not ok, add error class to fields returned
					$.each(res.bads, function(k, v) {
						$("label[for='"+v+"']").addClass("err");
						$("#"+v).addClass("err");
					});
				}
			}  
		); 	
	}

		//use ProcessTransaction to LOAD card info to SlimCD
	function cardNumLoad(){
			//check that all required fields have a value, that cardNum is valid and not already loaded
		if(checkSetter("#expirationMonth,#expirationYear,#firstName,#lastName") && $("#cardNum").hasClass('valid') && $('#cardNum').data('load') != 'yes'){
			SlimCD.Transact.ProcessTransaction({
					"username"    : publicToken
					,"transtype"  : "LOAD"
					,"cardnumber" : $('#cardNum').val()
					,"expmonth"   : $('#expirationMonth').val()
					,"expyear"    : $('#expirationYear').val()
					,"first_name" : $('#firstName').val()
					,"last_name"  : $('#lastName').val()
				},
				function(reply){
						//if response is success remove any error classes, mask cardNum value & send returned values to ajaxUpdate
					if (reply.response == 'Success') {
						$("#loadMsg").html('');
						$("#cardNum").removeClass('valid').removeClass('err');
						$('#cardNum').val('************'+reply.datablock.last4);
						$('#cardNum').data('load','yes');
						$('label[for=cardNum]').removeClass('err');
						ajaxUpdate($('<input/>',{'id':'cardType','value':reply.datablock.cardtype}));
						ajaxUpdate($('<input/>',{'id':'gateID','value':reply.datablock.gateid}));
						ajaxUpdate($('<input/>',{'id':'last4','value':reply.datablock.last4}));
					} else { //otherwise display error
						$("#loadMsg").html('There was a problem processing the payment:\r\n' + reply.description);
					}
			});
		}
	}
	
		//check input fields for a value
	function checkSetter(ref){
		var ret = true;
		$(ref).each(function(){
			if($(this).val()=="")
				ret = false;
		});	
		return ret;
	}
	
		//use ajax to send input value to php script to save to session
	function ajaxUpdate(ref){
		var key = $(ref).attr('id');
		var val = $(ref).val();
			//only update if new value differs from old value saved in data
		if(val != $(ref).data('oldVal')){
				//set old value to new value
			$(ref).data('oldVal', val);
				//call ajax sending field name and value
			$.getJSON(  
				'_ajax/update.php?key='+key+'&val='+val,  
				function(res) {  
						//if ok response is no add error class to input field
					if(res.ok=="no"){
						$(ref).addClass('err');
						$("label[for='"+$(ref).attr('id')+"']").addClass('err');
					}else{ //otherwise remove error classes
						$(ref).removeClass('err');
						$("label[for='"+$(ref).attr('id')+"']").removeClass('err');
							//attempt to load cardNum if this was last required field needed
						cardNumLoad();
					}
				}  
			); 
		}
	}
	
		//use ajax to get any values already set to session and set input field values
	function loadValues(){ 
		$.getJSON(  
			'_ajax/loadValues.php',  
			function(res) { 
					//check if value returned and is object
				if(typeof res.val != "undefined"){
					if(typeof res.val == "object"){
							//loop through each variable name and set input field value and oldVal data
						$.each(res.val, function(k, v) {
							$('input#'+k).val(v);
							$('select#'+k).val(v).attr('selected',true);
							$('input#'+k).data('oldVal', v);
						});
					}
				}
			}  
		);
	}
	
</script>
</head>
<body class="billing">
    <div id="holder">
      <div id="mainContent">
        <div class="checkout">
          <header class="displayBilling">
            <h2>Billing Info</h2>
            <div>Please enter your credit card info below.</div>
          </header>
          <div id="finalizedBilling">
            <div id="processCard">Charge it</div>
            <div id="errorMsg"></div>
          </div>
          <div id="displayBilling" class="displayBilling" style="padding-top:15px;">
            <div class="formField">
              <label for="firstName">First Name</label>
              <div>
                <input type="text" id="firstName" name="info[firstName]" class="text_med" />
              </div>
            </div>
            <div class="formField">
              <label for="lastName">Last Name</label>
              <div>
                <input type="text" id="lastName" name="info[lastName]" class="text_med" />
              </div>
            </div>
            <ul class="cards">
              <li class="visa">Visa</li>
              <li class="mastercard">MasterCard</li>
              <li class="amex">American Express</li>
              <li class="discover">Discover</li>
            </ul>
            <div class="formField">
              <label for="cardNum">Credit Card Number</label>
              <div>
                <input type="text" id="cardNum" class="text_med" />
              </div>
            </div>
            <div class="formField">
              <label for="expirationMonth">Expiration date</label>
              <div>
                <select id="expirationMonth" name="info[expirationMonth]">
                  <option value="">&nbsp;</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
                <select id="expirationYear" name="info[expirationYear]">
                  <option value="">&nbsp;</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                </select>
              </div>
            </div>
            <div id="setBilling">Next</div>
            <div id="loadMsg"></div>
          </div>
          <header class="success">
            <h2>Your Order is Complete</h2>
            <div id="processMsg"></div>
          </header>
        </div>
      </div>
    </div>
</body>
</html>