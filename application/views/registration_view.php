<html>
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../public/css/Style.css">
        <title></title>
    </head>
	<body>
		<div class="login-page">
			<div class="form">
			<form class="register-form">
				<input type="text" placeholder="*Имя"/>
				<input type="text" placeholder="*Фамилия"/>
				<input type="email" placeholder="*Email адресс"/>
				<input type="password" placeholder="*Пароль"/>
				<label for="date">Дата рождения:</label>
				<input name="date" type="date" class="form-control" id="date">
				<label for="sex">Ваш пол:</label>
				<select name="sex" class="form-control" id="sex">
					<option value="n"> не выбран </option>
					<option value="m"> мужской </option>
					<option value="f"> женский </option>
				</select>
				<button>Создать</button>
			</form>
			</div>
		</div>
	</body>
</html>