<?php
	session_start();
?>
<html>
<head>
        <meta charset="utf-8">
		<link href = "public/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="public/css/Style.css">
        <title>bwt_test</title>
</head>
    <body>
	<div class="main-page">
		<div class="main-form">	
		
		<nav class="navbar navbar-default" role="navigation">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
	
			<li><a href="main">Главная</a></li>
			<li><a href="registration">Регистрация</a></li>
			<li><a href="feedbacks">Отзывы</a></li>
			<li><a href="contact">Обратная связь</a></li>
			
			</ul>
			
			<form class="navbar-form navbar-right" method="post">
				<div class="form-group">
				<?php
					include "application/models/model_template.php";
					$userId;
					if (isset($_REQUEST['enter'])){
						$email = $_REQUEST["authEmail"];
						$pass = $_REQUEST["authPass"];
						$userId = Model_Template::signIn($email,$pass);
						$_SESSION['UserID']=$userId;
					}
					if (isset($_REQUEST['logOut']))
						$_SESSION['UserID']=-1;
					if($_SESSION['UserID']>-1){
						echo "Вы авторизированы как ";
						Model_Template::userName($_SESSION['UserID']);
				?>
					
					<button action="" class="btn btn-default" type= "submit" name="logOut" id="logOut">Выйти</button>
				</div>
			</form>
			</div>
				<?php
					if ($_SERVER['REQUEST_URI']=="/feedbacks")
						Model_Feedbacks::showFeedback($userId);
					if ($_SERVER['REQUEST_URI']=="/main")
						Model_Main::getWeather();
					}
					else{
				?>
						
						
						<label class="sr-only" for="Email">Email</label>
						<input type="email" class="form-control" id="Email" name="authEmail" placeholder="Enter email">
						<label class="sr-only" for="Pass">Пароль</label>
						<input type="password" class="form-control" id="Pass" name="authPass" placeholder="Password">
						<button action="" class="btn btn-default" type= "submit" name="enter" id="enter">Войти</button>
				</div>
				</form>
				</div>
				<?php
					if ($_SERVER['REQUEST_URI']=="/feedbacks")
						echo "Авторизируйтесь для просмотра отзывов";
					if ($_SERVER['REQUEST_URI']=="/main")
						echo "Авторизируйтесь для просмотра погоды";
					}
				?>
						
		</nav>