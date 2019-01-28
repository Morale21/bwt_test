<?php
class Controller_Contact extends Controller
{
		function __construct()
	{
		$this->model = new Model_Contact();
		$this->view = new View();
	}
	
	function action_index()
	{
		$this->view->generate('contact_view.php', 'template_view.php');
	}
	
}
?>