<?php
$auth = false;
	
	require_once 'application/views/main_view.php';
	function printWeather()
	{	
		require_once 'application/models/model_page.php';
	}
	if (isset($_REQUEST['enter'])){
		require_once 'application/models/model_auth.php';
		$email = $_REQUEST["authEmail"];
		$pass = $_REQUEST["authPass"];
		signIn($email,$pass);
	}
			
	function authorization(){
		$auth = true;
		include "index.php";
				//include "application/models/model_weather.php";
				//getWeather();
				//echo "Погода в Запорожье на ";
				//date_default_timezone_set('Ukraine/Kiev');
				//$date = date('d.m.Y');
				//echo $date;
	}
	
	switch ($auth) {
			case true:{
				include "application/models/model_weather.php";
				getWeather();
				echo "Погода в Запорожье на ";
				date_default_timezone_set('Ukraine/Kiev');
				$date = date('d.m.Y');
				echo $date;
			}
			case false:
				echo "Для отображения погоды, авторизируйтесь на сайте";
			break;
	}
?>