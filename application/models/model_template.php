<?php
class Model_Template extends Model
{
	function signIn($email, $pass){
		include 'setting.php';
		$db = mysql_connect(HOST, USER, PASS, DB);
		mysql_select_db("bwt_test" ,$db);
		
		$query=mysql_query('SELECT Email, Password FROM users', $db);
		$count = mysql_num_rows($query);
		
		$flag=false;
		$userId;
		for($i=0;$i<$count;$i++){
			$data = mysql_fetch_assoc($query);
            if($data['Email'] == $email)
				if($data['Password'] == $pass){
					$flag=true;
					$userID=$i;
				}
		}
		mysql_close($db);
		if ($flag){
			echo "<script>alert(\"Вы вошли как $email\")</script>"; 
			return $userID;
		}
		else
		{
			echo "<script>alert(\"Неправильное имя или пароль\");</script>";
			return -1;
		}	
	}
	
	function userName($id){
		include 'setting.php';
		$db = mysql_connect(HOST, USER, PASS, DB);
		mysql_select_db("bwt_test" ,$db);
		
		$query=mysql_query('SELECT Имя FROM users WHERE Id='.$id, $db);
		$name = mysql_fetch_assoc($query);
		echo $name['Имя'];
		mysql_close($db);
	}
}
?>