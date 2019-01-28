<?php
	class Controller_Registration extends Controller
	{
		function __construct()
	{
		$this->model = new Model_Registration();
		$this->view = new View();
	}
	
	function action_index()
	{
		$this->view->generate('registration_view.php', 'template_view.php');
	}
	
	function check_in()
	{
		if (isset($_REQUEST['login'])){
			$name = $_REQUEST["regName"];
			$surname = $_REQUEST["regSurname"];
			$email = $_REQUEST["regEmail"];
			$pass = $_REQUEST["regPass"];
			$date = $_REQUEST["regDate"];
			$sex = $_REQUEST["regSex"];
			Model_Registration::signUp($name, $surname, $email, $pass, $sex, $date);
		}
	}
}
?>