<?php
	session_start();
	 
	$requiredFields = array('firstName',
							'lastName',
							'cardCVV'=>'cvvToken',
							'expirationMonth',
							'expirationYear',
							'cardNum'=>'gateID');
							
	function getFinalBilling(){
		//return formated billing info
		$add = $_SESSION['info'];
		$out = "$add[firstName] $add[lastName]<br />
			   ".(!empty($add['cardType'])?"$add[cardType]<br />":"")."
			   ".(!empty($add['last4'])?"************$add[last4] ":"")."
			   $add[expirationMonth]/$add[expirationYear]
			   ";
		return $out;
	}

	$bads = array();
	$ok = true;
	if(is_array($_SESSION['info'])){
		foreach($requiredFields as $id => $key){
			if(empty($_SESSION['info'][$key])){
				$ok = false;
				$bads[] = (is_numeric($id)?$key:$id);	
			}					
		}
			
	}else{
		foreach($requiredFields as $id => $key){
			$bads[] = (is_numeric($id)?$key:$id);	
		}
		$ok = false;
	}
	if($ok){
		$out = array('ok'=>'yes','out'=>getFinalBilling());
	}else{
		$out = array('ok'=>'no','err'=>"Please correct highlighted errors",'bads'=>$bads);
	}
		
		
?>
<?=json_encode($out);?>