<?php
class Model_Feedbacks extends Model
{	
	function showFeedback($userId){
		if ($userId==-1){
			echo "Авторизируйтесь для отображения отзывов";
		}
		else{
?>
	<body>
		<div class="login-page">
		<div class="form">
<?php
			require_once 'application/models/model_main.php';
			require_once 'setting.php';
			$db = mysql_connect(HOST, USER, PASS, DB);
			mysql_select_db("bwt_test" ,$db);
		
			$query=mysql_query('SELECT Имя, Email, Сообщение FROM feedbacks', $db);
			$count = mysql_num_rows($query);
		
			for($i=0;$i<$count;$i++){
				$data = mysql_fetch_assoc($query);
				echo "Имя: ", $data['Имя'], "<br>", "Email: ", $data['Email'], "<br>", "Сообщение: ", $data['Сообщение'], "<br>";
				echo "<br><br>";
			}
		
			mysql_close($db);
		}
	}
}
?>