<?php
class Controller_Feedbacks extends Controller
{
	function __construct()
	{
		$this->model = new Model_Feedbacks();
		$this->view = new View();
	}
	
	function action_index()
	{
		$this->view->generate('feedbacks_view.php', 'template_view.php');
	}
}
?>