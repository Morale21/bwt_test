<?php
	require_once "application/views/registration_view.php";

	if (isset($_REQUEST['login'])){
		$name = $_REQUEST["regName"];
		$surname = $_REQUEST["regSurname"];
		$email = $_REQUEST["regEmail"];
		$pass = $_REQUEST["regPass"];
		$date = $_REQUEST["regDate"];
		$sex = $_REQUEST["regSex"];
		require_once 'application/models/model_auth.php';
		signUp($name, $surname, $email, $pass, $sex, $date);
	}
?>