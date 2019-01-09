<?php
	if (isset($_POST["enterReg"])){
		echo "7777";
		$name = $_REQUEST["regName"];
		$surname = $_REQUEST["regSurname"];
		$email = $_REQUEST["regEmail"];
		$pass = $_REQUEST["regPass"];
		$date = $_REQUEST["regDate"];
		$sex = $_REQUEST["regSex"];
	}
	
	function signUp($name, $surname, $email, $pass, $sex, $date){
		header("Location: index.php");
		echo "1";
		$db = mysql_connect(HOST, USER, PASS, DB);
		mysql_select_db("bwt_test" ,$db);
		
		$err = array();
		
		if(!preg_match("/^[a-zA-Z0-9]+$/",$pass))
			$err[] = "Пароль может состоять только из букв английского алфавита и цифр";

		if(strlen($pass) < 3 or strlen($pass) > 30)
			$err[] = "Пароль должен быть не меньше 3-х символов и не больше 30";
		
		$query=mysql_query('SELECT Email, Password FROM users', $db);
        $userQuantity=count($query);
		
		for($i=0;$i<=$userQuantity;$i++){
			$data = mysql_fetch_assoc($query);
            if($data['Email'] == $email)
				$err[] = "Пользователь с таким email адресом уже существует в базе данных";
		
		if(count($err) == 0)
		{
			$sql = "INSERT INTO Users (Id, Имя, Фамилия, Email, Password, Пол, Дата рождения) VALUES ('$userQuantity', '$name', '$surname', '$email', '$pass', '$sex', '$data')";
			if (mysqli_query($db, $sql)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($db);
			  }
		}
		else echo $err;
		
		}
	}

?>