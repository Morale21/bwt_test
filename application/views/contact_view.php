<html>
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../public/css/Style.css">
        <title></title>
    </head>
	<body>
		<div class="login-page">
		<div class="form">
			<form action="" id="loginform" method="post"name="loginform">
				<input type="text" name="contactName" placeholder="Имя"/>
				<input type="email" name="contactEmail" placeholder="Email адресс"/>
				<textarea name="comment" placeholder="Ваш отзыв"></textarea>
				<button name="send" type="submit">Отправить</button>
			</form>
			<form action="" id="loginform" method="post"name="loginform">
			<?php
					include "application/inc/captcha.php";
			?>
			</form>
		</div>
		</div>
	</body>
</html>

