<?php
	require_once 'application/views/feedbacks_view.php';
	
	function showFeedbacks(){
		include 'application/models/model_feedbacks.php';
		showFeedback();
	}
?>