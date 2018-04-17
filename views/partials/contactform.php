<?php

if (!empty($_POST)) {
	$name = $_POST['name'];
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$msgcontent = $_POST['msgcontent'];

	$to = 'opschepper@kristofbuts.be';
	$from = 'opschepper@kristofbuts.be';
	$subject = 'Bericht van contactformulier';

	$message = 'Van: ' . $name . "\r\n" . "E-mail: " . $email . "\r\n";
	$message .= 'Bericht: ' . "\r\n" . $msgcontent;

	$headers = "From: $from\r\nReply-to: $email";

	$errors = []; // initialise empty array for error messages

	// Check if name has been entered
	if (!$_POST['name']) {
		$errors[] = 'Geef uw naam in.';
	}

	// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$error[] = 'Geef een geldig mailadres op.';
	}

	//Check if message has been entered
	if (!$_POST['msgcontent']) {
		$errors[] = 'Geef uw bericht in.';
	}

	// If there are no errors, send the email
	if (empty($errors)) {
		if (mail ($to, $subject, $message, $headers)) {
			echo '<div class="alert alert-success">Bedankt voor uw bericht, we nemen zo snel mogelijk contact met u op.</div>';
		} else {
			echo '<div class="alert alert-danger">Er ging iets mis met het versturen van uw bericht, gelieve opnieuw te proberen.</div>';
		}
	}
}

?>
