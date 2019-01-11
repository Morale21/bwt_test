<?php
	
	switch ($_GET['page']) {
		case 'index':{
			include "application/models/model_weather.php";
			getWeather();
			echo "Погода в Запорожье на ";
			date_default_timezone_set('Ukraine/Kiev');
			$date = date('d.m.Y');
			echo $date;
		}
		break;
		case 'registration':
			include "application/controllers/controller_registration.php";
		break;
		case 'contact':
			include "application/controllers/controller_contact.php";
		break;
		case 'feedbacks':{
			include "application/controllers/controller_feedbacks.php";
		}
		break;
	}
?>