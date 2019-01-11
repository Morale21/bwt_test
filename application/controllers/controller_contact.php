<?php
	require_once 'application/views/contact_view.php';
	if (isset($_REQUEST['send'])){
		require_once 'application/models/model_contact.php';
		$name = $_REQUEST['contactName'];
		$email = $_REQUEST['contactEmail'];
		$message = $_REQUEST['comment'];
		sendFeedback($name, $email, $message);
	}
	function captchaResult($result){
		if ($result)
			echo "Капча введена верно";
		else echo "Капча введена неверно";
	}
?>