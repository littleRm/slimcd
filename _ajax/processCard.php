<?php
	 session_start();
	 
	 include_once "../_inc/slimcd.php";
	 
	//process credit card transaction using slimCD API
	if(!empty($_SESSION['info']['gateID'])){
		$SlimCD = new SlimCD();
		
		// Create a ProcessTransaction Request class
		$request = new Transact_ProcessTransactionRequest();
		$request->username = 'R4Q4QPY4';
		$request->transtype = 'SALE';
		$request->clientid = '1032';
		$request->siteid = 228226448;
		$request->priceid = 74 ;
		$request->amount = 19.77;
		$request->gateid = $_SESSION['info']['gateID'];
		$request->temporary_token = $_SESSION['info']['cvvToken'];
		$request->product = 'MyPHP';
		$request->ver = '1.0';
		$reply = $SlimCD->Transact_ProcessTransaction($request);
		
		$_SESSION['slimCDresponse'] = $reply;
		
		if($reply->response != "Success"){
			$out['err'] = $reply->response . ':' . $reply->description;

		}else{
			unset($_SESSION['info']['cvvToken']);
			$_SESSION['info']['gateID'] = $reply->datablock->gateid;
			$_SESSION['info']['authcode'] = $reply->datablock->authcode;
			$_SESSION['info']['approved'] = $reply->datablock->approved;
			$_SESSION['info']['cvv2reply'] = $reply->datablock->cvv2reply;
			$_SESSION['info']['approvedAmt'] = $reply->datablock->approvedamt;
			
			$out['msg'] = "Your card has been charged $".number_format($reply->datablock->approvedamt,2).".";
			
		}
	}else{
		$out['err'] = "No gate id set";
	}
		
	if(!empty($out['err'])){
		$out['ok'] = 'no';	
	}else{
		$out['ok'] = 'yes';
		$out['response'] = $reply;
	}
		
?>
<?=json_encode($out);?>