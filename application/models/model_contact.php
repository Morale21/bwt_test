<?php
	include 'setting.php';
	
	function sendFeedback($name, $email, $message){

		$db = mysql_connect(HOST, USER, PASS, DB);
		mysql_select_db("bwt_test" ,$db);
		
		$query=mysql_query('SELECT Имя, Email FROM feedbacks', $db);
		$count = mysql_num_rows($query);
		
		$err = array();
		if (empty($name)) 
			$err[] = "Не введено имя";
		if (empty($email)) 
			$err[] = "Не введена фамилия";
		if (empty($message)) 
			$err[] = "Не введено сообщение";
		
		if(count($err) == 0)
		{
			$sql = "INSERT INTO feedbacks (Id, Имя, Email, Сообщение) VALUES ('$count', '$name', '$email', '$message')";
			if (mysql_query($sql))
				echo "<script>alert(\"Отзыв оставлен\");</script>";
			else{
				$errorBD .= "Error: " . $sql . "<br>" . mysql_error($db);
				echo "<script>alert(\"$errorBD\");</script>";
			}
		}
		else {
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