<?php

if (!empty($_POST)) {
	// get information from form
	$name = $_POST['name'];
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$msgcontent = $_POST['msgcontent'];

	// check if form was actually filled in
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

	// If there are no errors, compose the mail and send it
	if (empty($errors)) {
		$subject = "Bericht van contactformulier";

		$message = 'Van: ' . $name . "<br>" . "E-mail: " . $email . "<br>";
		$message .= 'Bericht: ' . "<br>" . $msgcontent;

		// load configuration
		$config = parse_ini_file('../secrets/config.ini');

		$mail = new \PHPMailer\PHPMailer\PHPMailer(true);
		try {
			// server settings
			$mail->isSMTP();
			$mail->Host = $config['host'];
			$mail->SMTPAuth = true;
			$mail->Username = $config['username'];
			$mail->Password = $config['password'];
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;

			// recipients
			$mail->setFrom($config['username'], $config['name']);
			$mail->addAddress($config['username'], $config['mail']);
			$mail->addReplyTo($email, $name);

			// content
			$mail->isHTML(true);
			$mail->Subject = $subject;
			$mail->Body = $message;

			$mail->send();
			echo '<div class="alert alert-success">Bedankt voor uw bericht, we nemen zo snel mogelijk contact met u op.</div>';
		} catch (Exception $e) {
			echo '<div class="alert alert-danger">Er ging iets mis met het versturen van uw bericht, gelieve opnieuw te proberen.</div>';
		}
	}
}

?>
