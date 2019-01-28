<html>
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../public/css/Style.css">
        <title></title>
    </head>
	<body>
		<div class="login-page">
		<div class="form">
			<form id="loginform" action="" method="post"name="loginform">
				<input type="text" name="contactName" placeholder="Имя"/>
				<input type="email" name="contactEmail" placeholder="Email адресс"/>
				<textarea name="comment" placeholder="Ваш отзыв"></textarea>

				<?php
					include "application/inc/captcha.php";
					
					if (isset($_REQUEST['send'])){
						Model_Contact::captchaCheck();
						create_image();
						display();
					}
					else{
						create_image();
						display();
					}
				?>
				<button name="send" type="submit" >Отправить</button>
				<?php
					
				?>
			</form>
		</div>
		</div>
	</body>
</html>

