<?php
$transport = (new Swift_SmtpTransport('smtp.titan.email', 465, 'ssl'))
	->setUsername($user)
	->setPassword($pass)
;
$mailer = new Swift_Mailer($transport);

$message = new Swift_Message($subject);
$message
	->setFrom(array('contact@injection-tracker.com' => 'Viksta care Ltd Website'))
	->setTo( 'jonkemm@gmail.com' )
	->setBody($htmlMessage, 'text/html' )
;
$result = $mailer->send($message);

?>