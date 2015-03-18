<?php



class Sessions_CancelSessionRequest  {

	// property declaration
	public $username = '';
	public $password = '';
	public $SessionID=0;

	public function jsonSerialize() {
	       	return (get_object_vars($this));
	}
}


class Sessions_CheckSessionRequest  {

	// property declaration
	public $username = '';
	public $password = '';
	public $SessionID=0;
	public $Wait=0;
    public $WaitForCompleted='';
	public $MyCustomField='';

	public function jsonSerialize() {
	       	return (get_object_vars($this));
	}
}


class Sessions_CreateSessionRequest  {

	// property declaration
	public $username = '';
	public $password = '';
	public $siteID=0;
	public $ClientID=0;  
	public $PriceID=0;
	public $FormName='';
	public $TransType='';  
	public $Amount=0;
	public $MyCustomField='';

	public function jsonSerialize() {
	       	return (get_object_vars($this));
	}
}


class Sessions_DestroySessionsRequest  {

	// property declaration
	public $username = '';
	public $password = '';
	public $SessionID=0;

	public function jsonSerialize() {
	       	return (get_object_vars($this));
	}
}


class Sessions_GetSessionFieldsRequest  {

	// property declaration
	public $username = '';
	public $password = '';
	public $sessionid='';
	public $BatchNumber=0;

	public function jsonSerialize() {
	       	return (get_object_vars($this));
	}
}


class Sessions_MultiSessionRequest  {

	// property declaration
	public $username = '';
	public $password = '';
	public $SiteID=0;
	public $BatchNumber=0;

	public function jsonSerialize() {
	       	return (get_object_vars($this));
	}
}

class Sessions_SearchSessionsRequest {

	// property declaration
	public $username = '';
	public $password = '';
	public $SiteID=0;
	public $EndDate=0;  
	public $ClientID=0;  
	public $SessionID=0;  
	public $Amount=0;
	public $Approvedant='';  
	public $TransType='';  
	public $CardPart='';  
	public $Approved ='';
	public $GateID=0;
	public $Completed='';  
	public $Cancelled ='';
	public $ReverseOrder='';

	public function jsonSerialize() {
	       	return (get_object_vars($this));
	}
}

class Sessions_SendSessionRequest {

	// property declaration
	public $username = '';
	public $password = '';
	public $SiteID=0;
	public $BatchNumber=0;  
	public function jsonSerialize() {
	       	return (get_object_vars($this));
	}
}


class Sessions_ShowSessionRequest {

	// property declaration
	public $username = '';
	public $password = '';
	public $SiteID=0;
	public $BatchNumber=0;  
	public function jsonSerialize() {
	       	return (get_object_vars($this));
	}
}

class Sessions_SpawnSessionsRequest {

	// property declaration
	public $username = '';
	public $password = '';
	public $SiteID=0;
	public $BatchNumber=0;  
	public function jsonSerialize() {
	       	return (get_object_vars($this));
	}
}



class Reports_SearchTransactionsRequest 
{
	// property declaration
	public $username = '';
	public $password = '';
	public $RecordCountOnly ='';  
	public $MaxRecords  =0;
	public $StartDate  ="";
	public $EndDate  ="";
	public $ClientID  =0;
	public $FirstName =''; 
	public $LastName =''; 
	public $City =''; 
	public $State =''; 
	public $Zip =0; 
	public $EMail =''; 
	public $Amount =''; 
	public $ClientTransfer ='';  
	public $TransType =''; 
	public $CardNumber =0; 
	public $CardID =''; 
	public $CardPart =''; 
	public $ClerkName =''; 
	public $GateID =0; 
	public $ReverseOrder ='';
	
	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}
class Reports_GetDailySummaryRequest
{
	// property declaration
	public $username = '';
	public $password = '';
	public $metabankid=0;
	public $bankid=0;
	public $clientid=0;
	public $siteid=0;
	public $startdate="";
	public $enddate="";

	public function jsonSerialize() {

	       	return (get_object_vars($this));
	}
}
class Reports_GetBatchSummaryRequest 
{
	// property declaration
	public $username = '';
	public $password = '';
	public $siteid = 0;
	public $StartDate =''; 
	public $EndDate ='';
	
	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}
class Reports_GetClosedBatchTransactionsRequest 
{
	// property declaration
	public $username = '';
	public $password = '';
	public $siteid = 0;
	public $batchid = 0;
	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}
class Reports_GetOpenAuthsRequest 
{
	// property declaration
	public $username = '';
	public $password = '';
	public $siteid = 0;
	public $StartDate =''; 
	public $EndDate ='';
	
	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}
class Reports_GetTransactionDetailsRequest 
{
	// property declaration
	public $username = '';
	public $password = '';
	public $siteid = 0;
	
	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}
class Reports_GetOpenBatchRequest 
{
	// property declaration
	public $username = '';
	public $password = '';
	public $siteid = 0;
	
	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}
class Reports_GetBatchHistoryRequest
{
	// property declaration
	public $username = '';
	public $password = '';
	public $siteid=0;
	public $startdate="";
	public $enddate="";

	public function jsonSerialize() {

	       	return (get_object_vars($this));
	}
}

class Login_GetUserSettingsRequest 
{
	// property declaration
	public $username = '';
	public $password = '';
	
	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}

class Transact_ProcessTransactionRequest
{
	public $username = '' ;
	public $password = '';
	public $metabankid = '';
	public $bankid = '';
	public $clientid = '';
	public $siteid = '';
	public $priceid = '';
	public $product = '';
	public $ver = '';
	public $key = '';
	public $kiosk = '';
	public $readerpresent = '';
	public $contactlessreader = '';
	public $encryption_device = '';
	public $encryption_type = '';
	public $encryption_key = '';
	public $firstname = '';
	public $lastname = '';
	public $address = '';
	public $city = '';
	public $state = '';
	public $zip = '';
	public $country = '';
	public $phone = '';
	public $email = '';
	public $birthdate = '';
	public $driverlic = '';
	public $ssn = '';
	public $gateid = '';
	public $use_pooled = '';
	public $processor_token = '';
	public $temporary_token = '';
	public $cardtype = '';
	public $corporatecard = '';
	public $trackdata = '';
	public $cardnumber = '';
	public $expmonth = '';
	public $expyear = '';
	public $cvv2 = '';
	public $seccode = '';
	public $pinblockdata = '';
	public $pinblock = '';
	public $ksn = '';
	public $Checks = '';
	public $micrreader = '';
	public $accttype = '';
	public $checktype = '';
	public $routeno = '';
	public $accountno = '';
	public $checkno = '';
	public $fullmicr = '';
	public $serialno = '';
	public $statecode = '';
	public $achcode = '';
	public $transtype = '';
	public $amount = '';
	public $clienttransref = '';
	public $po = '';
	public $salestaxtype = '';
	public $salestax = '';
	public $authcode = '';
	public $cashback = '';
	public $gratuity = '';
	public $Allow_Partial = '';
	public $allow_duplicates = '';
	public $blind_credit = '';
	public $extra_credit = '';
	public $recurring = '';
	public $installmentcount = '';
	public $installmentseqno = '';
	public $billpayment = '';
	public $debtindicator = '';
	public $clientip = '';
	public $clerkname = '';
	public $cardpresent = '';
	public $contactless = '';
	public $send_email = '';
	public $send_cc = '';
	public $send_sms = '';
	public $cc_email = '';

	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}

class Transact_CloseBatchRequest
{
	// property declaration
	public $username = '';
	public $password = '';
	public $siteid=0;
	public $batchnumber='';

	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}

class Login_GetUserClientSiteRequest  {

	// property declaration
	public $username = '';
	public $password = '';
	public $clientid=0;
	public $siteid=0;

	public function jsonSerialize() {
	       	return (get_object_vars($this));
	}
}

class Login_GetUserClientsRequest 
{
	// property declaration
	public $username = '';
	public $password = '';
	
	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}

class Images_DownloadSignatureRequest
{
	// property declaration
	public $username = '';
	public $password = '';
	public $gateid=0;

	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}

class Images_DownloadReceiptRequest
{
	// property declaration
	public $username = '';
	public $password = '';
	public $gateid=0;

	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}

class Images_DownloadCheckRequest
{
	// property declaration
	public $username = '';
	public $password = '';
	public $gateid=0;

	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}

class Images_UploadSignatureRequest
{
	// property declaration
	public $username = '';
	public $password = '';
	public $siteid=0;
	public $gateid=0;
	public $filetype='';
	public $imagedata='';

	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}


class Images_UploadReceiptRequest
{
	// property declaration
	public $username = '';
	public $password = '';
	public $siteid=0;
	public $gateid=0;
	public $filetype='';
	
	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}

class Images_UploadCheckRequest
{
	// property declaration
	public $username = '';
	public $password = '';
	public $siteid=0;
	public $gateid=0;
	public $filetype='';
	public $imagedata='';
	
	public function jsonSerialize() {

	       	return (get_object_vars($this));

	}
}


class Images_GetReceiptRequest
{
	// property declaration
	public $username = '';
	public $password = '';
	public $gateid=0;

	public function jsonSerialize() {

	       	return (get_object_vars($this));
	}
}


class Images_SendReceiptRequest
{
	// property declaration
	public $username = '';
	public $password = '';
	public $gateid=0;
	public $send_sms='no';
	public $phone='';
	public $send_email='no';
	public $email='';
	public $send_cc='no';
	public $ccemail='';

	public function jsonSerialize() {

         return array(

             	'username' => $this->username,
             	'password' => $this->password,
		'gateid' => $this->gateid,
		'send_sms' => (($this->send_sms === true || $this->send_sms == 'yes' || $this->send_sms == '1') ? 1 : 0),
		'phone' => $this->phone,
		'send_email' => (($this->send_email === true || $this->send_email == 'yes' || $this->send_email == '1') ? 1 : 0),
		'email' => $this->email,
		'send_email' => (($this->send_cc === true || $this->send_cc == 'yes' || $this->send_cc == '1') ? 1 : 0) ,
		'ccemail' => $this->ccemail
		) ;
	}
}


class Images_GetSignatureImageRequest
{
	// property declaration
	public $username = '';
	public $password = '';
	public $gateid=0;
	public $imgflag='PNG';
	public $height=null ;
	public $width=null ;
	public $transparent='yes';
	public $edge = null ;
	public $penwidth = null ;
	public $border = 'no';
	public $testmode='no';


	public function jsonSerialize() {

	  $array = array(
	             	'username' => $this->username,
        	     	'password' => $this->password,
			'gateid' => $this->gateid) ;

		if($this->imgflag !== null && $this->imgflag !== '')
			$array['imgflag'] = $this->imgflag ;

		if($this->height !== null && intval($this->height) !== 0)
			$array['height'] = $this->height ;

		if($this->width !== null && intval($this->width) !== 0)
			$array['width'] = $this->width ;

		if($this->transparent === true || $this->transparent == 'yes' || $this->transparent == '1')
			$array['transparent'] = "1" ;
		else
			$array['transparent'] = "0" ;

		if($this->edge !== null && intval($this->edge) !== 0)
			$array['edge'] = $this->edge ;

		if($this->penwidth !== null && intval($this->penwidth) !== 0)
			$array['penwidth'] = $this->penwidth ;

		if($this->border === true || $this->border == 'yes' || $this->border == '1')
			$array['border'] = "1" ;
		else
			$array['border'] = "0" ;

		if($this->testmode === true || $this->testmode == 'yes' || $this->testmode == '1')
			$array['testmode'] = "1" ;
		else
			$array['testmode'] = "0" ;

	}
}






class SlimCD
{


	public $transURL = "https://trans.slimcd.com" ;
	public $statsURL = "https://csstats.slimcd.com" ;
	public $debug = false;
	private $senddata ;
	private $recvdata ;

	function StandardErrorBlock($url,$errortext)
	{
		//$description = str_replace(array("\"","\'","\n","\r","\t"), " ",trim($errortext)) ;
		//return (json_decode(' { "reply":{ "response":"Error", "responsecode":"2", "description":"' . $description . '", "responseurl":"' . $url . '", "datablock": null}}')) ;

		$reply = (object) array('response'=>'Error', 'responsecode'=>'2', 'description' => $errortext , 'responseurl' => $url ,'datablock' => '');
		$result = (object) array('reply' => $reply) ;

		return ($result ) ;
	}

	function HttpPost($urlString,$timeout,$namevalueArray)
	{

		$ch = curl_init($urlString);

		curl_setopt($ch,CURLOPT_TIMEOUT,$timeout) ;
		curl_setopt($ch, CURLOPT_POST, 1);

		$this->senddata = http_build_query($namevalueArray) ;

		curl_setopt($ch, CURLOPT_POSTFIELDS, $this->senddata);

		// SLIMCD.COM uses a GODADDY SSL certificate.  Once you install the CA for GoDaddy SSL, please remove the line below.
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		// receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

		// POST the data
		$this->recvdata = curl_exec($ch);

	    if(curl_errno($ch))
			$result =  $this->StandardErrorBlock(curl_getinfo($ch,CURLINFO_EFFECTIVE_URL),curl_error($ch)) ;
		else {

			$httpstatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

			if (intval($httpstatus) !== 200 || ($contentType !== 'application/json' && $contentType !== 'text/javascript')) {

				$result =  $this->StandardErrorBlock(curl_getinfo($ch,CURLINFO_EFFECTIVE_URL),$this->recvdata) ;
			}
			else {

				$result = json_decode($this->recvdata);
		 	}

			// Make sure we can decode the results...
			if($result === null) {

				switch (json_last_error()) {

					case JSON_ERROR_NONE:
	    	        		$errortext= ' - No errors';
					        break;

					case JSON_ERROR_DEPTH:
		        	    		$errortext = ' - Maximum stack depth exceeded';
					        break;

					case JSON_ERROR_STATE_MISMATCH:
				      	    	$errortext = ' - Underflow or the modes mismatch';
			        		break;

					case JSON_ERROR_CTRL_CHAR:
        		    		$errortext = ' - Unexpected control character found';
				        break;

					case JSON_ERROR_SYNTAX:
		        	   		$errortext= ' - Syntax error, malformed JSON';
					        break;

					case JSON_ERROR_UTF8:
				           		$errortext = ' - Malformed UTF-8 characters, possibly incorrectly encoded';
	    		    			break;

				        default:
	    		        		$errortext = ' - Unknown JSON error';
		    	    		break;
				    }

				$result = $this->StandardErrorBlock($urlString,$errortext) ;
			}
		}

		curl_close ($ch);


		// flatten out the "reply" so we don't have that extra (unneeded) level
		$myarray = get_object_vars($result->reply) ;
		if($this->debug) {
			$myarray = array_merge(  $myarray, array( "senddata" => $this->senddata , "recvdata" => $this->recvdata) ) ;
		}
		$result = (object) $myarray;

		$this->senddata='' ;
		$this->recvdata ='';

		return $result ;

	}

   	function Transact_ProcessTransaction(Transact_ProcessTransactionRequest $request,$timeout=false)
	{
			$default_timeout = 90 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonpayment.asp",$timeout,$request->jsonSerialize()) );
	}


   	function Transact_CloseBatch(Transact_CloseBatchRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=CloseBatch",$timeout,$request->jsonSerialize()) );
	}

function Login_GetUserClients(Login_GetUserClientsRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetUserClients",$timeout,$request->jsonSerialize()) );
	}


function Images_DownloadSignature(Images_DownloadSignatureRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=DownloadSignature",$timeout,$request->jsonSerialize()) );
	}
	
	
function Images_DownloadReceipt(Images_DownloadReceiptRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=DownloadReceipt",$timeout,$request->jsonSerialize()) );
	}	
	
	function Images_DownloadCheck(Images_DownloadCheckRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=DownloadCheck",$timeout,$request->jsonSerialize()) );
	}	
	
	function Images_UploadSignature(Images_UploadSignatureRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=UploadSignature",$timeout,$request->jsonSerialize()) );
	}	
	
	function Images_UploadReceipt(Images_UploadReceiptRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=UploadReceipt",$timeout,$request->jsonSerialize()) );
	}	
	
	function Images_UploadCheck(Images_UploadCheckRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=UploadCheck",$timeout,$request->jsonSerialize()) );
	}	
	
function Login_GetUserSettings(Login_GetUserSettingsRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetUserSettings",$timeout,$request->jsonSerialize()) );
	}
   	function Images_GetReceipt(Images_GetReceiptRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;

			}


			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetReceipt",$timeout,$request->jsonSerialize()) );
	}


   	function Images_SendReceipt(Images_SendReceiptRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=SendReceipt",$timeout,$request->jsonSerialize()) );
	}

   	function Images_GetSignatureImage(Images_GetSignatureImageRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetSignatureImage",$timeout,$request->jsonSerialize()) );
	}


   	function Reports_GetOpenBatch(Reports_GetOpenBatchRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetOpenBatch2",$timeout,$request->jsonSerialize() ) );

	}



   /*	function Reports_GetDailySummary(Reports_GetDailySummaryRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetDailySummary",$timeout,$request->jsonSerialize() ) );

	}*/

   	function Login_GetUserClientSite(Login_GetUserClientSiteRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetUserClientSite",$timeout,$request->jsonSerialize()) );
	}



function Reports_SearchTransactions(Reports_SearchTransactionsRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=SearchTransactions2",$timeout,$request->jsonSerialize()) );
	}
	
function Reports_GetDailySummary(Reports_GetDailySummaryRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=Reports_GetDailySummary",$timeout,$request->jsonSerialize()) );
	}
	
	
	function Reports_GetBatchSummary(Reports_GetBatchSummaryRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetBatchSummary2",$timeout,$request->jsonSerialize()) );
	}
	
	
	function Reports_GetClosedBatchTransactions(Reports_GetClosedBatchTransactionsRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetClosedBatchTransactions2",$timeout,$request->jsonSerialize()) );
	}
	
	
	function Reports_GetOpenAuths(Reports_GetOpenAuthsRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetOpenAuths2",$timeout,$request->jsonSerialize()) );
	}
	
	
	function Reports_GetTransactionDetails(Reports_GetTransactionDetailsRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetTransactionDetails2",$timeout,$request->jsonSerialize()) );
	}
	
	/*
	function Reports_GetOpenBatch(Reports_GetOpenBatchRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetOpenBatch2",$timeout,$request->jsonSerialize()) );
	}*/
	
	
	function Reports_GetBatchHistory(Reports_GetBatchHistoryRequest $request,$timeout=false)
	{
			$default_timeout = 600 ;

			if(!$timeout)
				$timeout = $default_timeout;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $default_timeout;
			}

			return( $this->HttpPost($this->transURL . "/soft/json/jsonscript.asp?service=GetBatchHistory2",$timeout,$request->jsonSerialize()) );
	}	
	
	function Sessions_CancelSession(Sessions_CancelSessionRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CancelSession",$timeout,$request->jsonSerialize() ) );

	}




	function Sessions_CheckSession(Sessions_CheckSessionRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CheckSession",$timeout,$request->jsonSerialize() ) );

	}




	function Sessions_CreateSession(Sessions_CreateSessionRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=CreateSession",$timeout,$request->jsonSerialize() ) );

	}




function Sessions_DestroySessions (Sessions_DestroySessionsRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=DestroySessions",$timeout,$request->jsonSerialize() ) );

	}


function Sessions_GetSessionFields (Sessions_GetSessionFieldsRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=GetSessionFields",$timeout,$request->jsonSerialize() ) );

	}

function Sessions_MultiSession (Sessions_MultiSessionRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=MultiSession",$timeout,$request->jsonSerialize() ) );

	}


function Sessions_SearchSessions(Sessions_SearchSessionsRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SearchSessions",$timeout,$request->jsonSerialize() ) );

	}


function Sessions_SendSession(Sessions_SendSessionRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SendSession",$timeout,$request->jsonSerialize() ) );

	}


function Sessions_ShowSession(Sessions_ShowSessionRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=ShowSession",$timeout,$request->jsonSerialize() ) );

	}



function Sessions_SpawnSessions(Sessions_SpawnSessionsRequest $request,$timeout=false)
	{

			if(!$timeout)
				$timeout = 60;
			else
			{
				$timeout=intval($timeout);
				if($timeout === 0)
					$timeout = $this->default_timeout;

			}

			return( $this->HttpPost($this->statsURL . "/soft/json/jsonscript.asp?service=SpawnSessions",$timeout,$request->jsonSerialize() ) );

	}
}


// Create the class with all the functions in it.
//$SlimCD =new SlimCD() ;

// Set this on if you want the REQUEST and REPLY data returned for debugging purposes
//$SlimCD->debug=true;



// Create a CloseBatch Request class
//$cbr = new Transact_CloseBatchRequest() ;
//$cbr->username = '1032';
//$cbr->password = '289075';
//$cbr->siteid = 228226448 ;
//$result = $SlimCD->Transact_CloseBatch($cbr);
//echo 'RESULT2=' . $result->reply->response . ':' . $result->reply->description ;


// Create a GetReceipt Request class
//$gr = new Images_GetReceiptRequest() ;
//$gr->username = '1032';
//$gr->password = '289075';
//$gr->gateid = 78022528 ;
//$reply = $SlimCD->Images_GetReceipt($gr);
//echo 'RESULT2=' . $result->reply->response . ':' . $result->reply->description ;



// Create a GetBatchHistory Request class
//$gbh = new Reports_GetBatchHistoryRequest() ;
//$gbh->username = 'R6UT8C6M';
//$gbh->password = '';
//$gbh->siteid = 0 ;
//$gbh->startdate = "7/16/2013" ;
//$gbh->enddate = "7/16/2013" ;

//$reply = $SlimCD->Reports_GetBatchHistory($gbh);
//echo 'RESULT2=' . $result->reply->response . ':' . $result->reply->description ;

//echo var_dump($reply) ;


// Create a GetDailySummary Request class
//$gds = new Reports_DailySummaryRequest() ;
//$gds->username = 'R6UT8C6M';
//$gds->password = '';
//$gds->siteid = 0 ;
//$gds->startdate = "7/16/2013" ;
//$gds->enddate = "7/16/2013" ;

//$reply = $SlimCD->Reports_DailySummary($gds);
//echo 'RESULT2=' . $result->reply->response . ':' . $result->reply->description ;

//echo var_dump($reply) ;


?>
