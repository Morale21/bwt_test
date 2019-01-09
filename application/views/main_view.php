<!DOCTYPE html>
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
			
			<li><a href="index.php?page=index">Главная</a></li>
			<li><a href="index.php?page=registration">Регистрация</a></li>
			<li><a href="index.php?page=weather">Погода</a></li>
			<li><a href="index.php?page=contact">Обратная связь</a></li>
			
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<label class="sr-only" for="Email">Email</label>
					<input type="email" class="form-control" id="Email" name="authEmail" placeholder="Enter email">
					<label class="sr-only" for="Pass">Пароль</label>
					<input type="password" class="form-control" id="Pass" name="authPass" placeholder="Password">
					<button class="btn btn-default" name="enter">Войти</button>
				</div>
			</form>
			</ul>
			</div>
		</nav>
		<div class="brd">
		<?php
			printWeather();
		?>
		</div>
	</div>
	</div>
    </body>
</html>