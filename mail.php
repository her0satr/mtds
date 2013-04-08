<?php
$to      = 'her0satr@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
	'To: Herry Gmail <her0satr@gmail.com>, Herry Yahoo <her0satr@yahoo.com>' . "\r\n";
	'Reply-To: webmaster@example.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>