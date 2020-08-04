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

	if (mail($to, $subject, $body))
	{
	    echo "Message accepted";
	}
	else
	{
	    echo "Error: Message not accepted";
	}

	header("Location: index.html");
?>