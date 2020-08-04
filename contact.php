<?php
	
	$userName 		= $_POST['name'];
	$userEmail	 	= $_POST['email'];
	$userMessage 		= $_POST['message'];

	$to 			= "nathandoan7@gmail.com";
	$subject 		= "Email from my website";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;


	header("Location: https://doanprojects.com/#about-anchor");
?>