<?php
	include_once "application/views/registration_view.php";
	
	if (isset($_REQUEST['login'])){
		$name = $_REQUEST["regName"];
		$surname = $_REQUEST["regSurname"];
		$email = $_REQUEST["regEmail"];
		$pass = $_REQUEST["regPass"];
		$date = $_REQUEST["regDate"];
		$d = date('Y-m-d');
		$sex = $_REQUEST["regSex"];
		$flag=1;
		require_once 'application/models/model_auth.php';
		//signUp($name, $surname, $email, $pass, $sex, $date);
		authorization();
		$Session['userName']=$name;
		session_start();
		session_destroy();
		header_remove();
	}

?>