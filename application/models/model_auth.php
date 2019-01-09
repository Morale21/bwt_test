<?php
	
	include 'setting.php';
	
	function signIn($email, $pass){
		
		$db = mysql_connect(HOST, USER, PASS, DB);
		mysql_select_db("bwt_test" ,$db);
		
		$query=mysql_query('SELECT Email, Password FROM users', $db);
		$count = mysql_num_rows($query);
		
		for($i=0;$i<=$count;$i++){
			$data = mysql_fetch_assoc($query);
            if($data['Email'] == $email)
				if($data['Password'] == $pass){
					echo $data['Email'], $data['Password'];
					$auth = true;
				}
		}
		mysql_close($db);
	}
	
	function signUp($name, $surname, $email, $pass, $sex, $date){
		
		$db = mysql_connect(HOST, USER, PASS, DB);
		mysql_select_db("bwt_test" ,$db);
		
		$query=mysql_query('SELECT Email, Password FROM users', $db);
        $count = mysql_num_rows($query);
		
		$err = array();
		if (empty($name)) 
			$err[] = "Не введено имя";
		if (empty($surname)) 
			$err[] = "Не введена фамилия";
		if (empty($email)) 
			$err[] = "Не введен e-mail";
		if (empty($pass)) 
			$err[] = "Не введен пароль";
		
		for($i=0;$i<=$count;$i++){
			$data = mysql_fetch_assoc($query);
            if($data['Email'] == $email)
				$err[] = "Пользователь с таким email адресом уже существует в базе данных";
		}
		
		if(count($err) == 0)
		{
			$count = mysql_num_rows($query);
			$sql = "INSERT INTO Users (Id, Имя, Фамилия, Email, Password, Пол, Дата) VALUES ('$count', '$name', '$surname', '$email', '$pass', '$sex', '$date')";
			if (mysql_query($sql, $db))
				echo "<script>alert(\"Новый аккаунт успешно создан\");</script>";
			else{
				$errorBD .= "Error: " . $sql . "<br>" . mysql_error($db);
				echo "<script>alert(\"$errorBD\");</script>";
			}
		}
		else
		{
			$error;
			for ($i=0;$i<count($err);$i++){
				$error .= '\n';
				$error .= $err[$i];
			}
			echo "<script>alert(\"$error\");</script>";
		}

		mysql_close($db);
	}
?>