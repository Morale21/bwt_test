<!DOCTYPE html>
<html>
<body>
  <div class="form">
    <form class="register-form" action="" id="loginform" method="post"name="loginform">
		<input type="email" name="regEmail" placeholder="*Email адресс"/>
		<input type="password" name="regPass" placeholder="*Пароль"/>
		<input type="text" name="regName" placeholder="*Имя"/>
		<input type="text" name="regSurname" placeholder="*Фамилия"/>
		<label for="regDate">Дата рождения:</label>
		<input name="regDate" type="date" class="form-control" id="date">
		<label for="regSex">Ваш пол:</label>
		<select name="regSex" class="form-control" id="sex">
			<option value="n"> не выбран </option>
			<option value="m"> мужской </option>
			<option value="f"> женский </option>
		</select>
		<button name="login"type= "submit"> Создать </button>
   </form>
   </div>
</body>
</html>