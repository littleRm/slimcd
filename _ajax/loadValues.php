<?php
	session_start();
	
	if(is_array($_SESSION['info'])){
		$out['val'] = $_SESSION['info'];
		$out['ok'] = 'yes';
	}else{
		$out['ok'] = 'no';	
	}
		
		
?>
<?=json_encode($out);?>