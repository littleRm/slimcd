<?php
	session_start();
	
	if(!empty($_GET['key']) && !empty($_GET['val'])){
		$_SESSION['info'][$_GET['key']] = $_GET['val'];	
		$out['ok'] = 'yes';
	}else{
		$out['ok'] = 'no';	
	}
		
		
?>
<?=json_encode($out);?>