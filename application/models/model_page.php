<?php
		if ($_GET['page'] == weather){
				echo "Погода в Запорожье на ";
				date_default_timezone_set('Ukraine/Kiev');
				$date = date('d.m.Y');
				echo $date;
			}
	//		else
				//echo "Для отображения погоды, авторизируйтесь на сайте<br><br>";
?>