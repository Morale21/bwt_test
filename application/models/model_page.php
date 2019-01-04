<?php
		switch ($_GET['page']) {
			case 'registration':
				include "application/views/registration_view.php";
			break;
			case 'contact':
				include "application/views/contact_view.php";
			break;
		}
		if ($_GET['page'] == weather){
				include "application/models/model_weather.php";
				getWeather();
				echo "Погода в Запорожье на ";
				date_default_timezone_set('Ukraine/Kiev');
				$date = date('d.m.Y');
				echo $date;
			}
	//		else
				//echo "Для отображения погоды, авторизируйтесь на сайте<br><br>";
?>