<?php
$to      = 'otakarandrysek@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: kms@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
