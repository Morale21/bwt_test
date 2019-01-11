<?php	
	require_once 'application/views/main_view.php';
	
	function router(){	
		require_once 'application/models/model_page.php';
	}
	
	if (isset($_REQUEST['enter'])){
		require_once 'application/models/model_auth.php';
		$email = $_REQUEST["authEmail"];
		$pass = $_REQUEST["authPass"];
		signIn($email,$pass);
	}
?>