<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$message = $_POST['message'];

	$email_from = 'bonesawgroup@gmail.com';
	$email_subject = "Heads Up form submission";
	$email_body = "You have received a new message via the Heads Up contact form. \n
	Name: $name \n
	E-Mail: $email \n
	Company: $company \n
	\n $message".

	$to = "bonesawgroup@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $email \r\n";
	mail($to,$email_subject,$email_body,$headers);
?>