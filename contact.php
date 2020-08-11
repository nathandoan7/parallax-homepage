<?php
	
	$userName 		= $_POST['name'];
	$userEmail	 	= $_POST['email'];
	$userMessage 		= $_POST['message'];
	$userSubject = $_POST['subject'];

	$to 			= "nathandoan7@gmail.com";
	$subject 		= "Email from my website";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Subject: " . $userSubject;
	$body .= "\r\n Message: " . $userMessage;

	mail($to,$subject,$body);

	

	header("Location: https://divinehtml.com/#about-anchor");
?>