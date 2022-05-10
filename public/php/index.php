<?php echo($pass);

exit;
// $name = $_POST["name"];
// $message = $_POST["message"];
// $tel = $_POST["tel"];
// $email = $_POST["email"];
// $address = $_POST["address"];

$name = 'jk';
$message = 'hi';
$tel = 27;
$email = 'jonkemm@gmail.com';
$address = 'my';

if ($email == "" && $name == "" && $tel == "" && $message == "")
{
	$message = "Email, Name, Tel & message are required";
}
else
{
	$email_subject = 'Contact from website';
	//$email_to = "Leigh Gallery <jonkemm@gmail.com>";
	$email_to = "Leigh Gallery <jonkemm@gmail.com>";
	$email_from = "Leigh Gallery <jonkemm@gmail.com>";
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= "From: " . $email_from . "\n";
	
	$textmessage="<html language='en-GB'>
	<head>
	<title>".$email_subject."</title>
	</head>
	<body>
	<div style='width:100%; text-align:center; font-size: large; font-style: Verdana; colour:#fff;'>Balls deep</div>
	";
	$textmessage = $textmessage."<p>Message: " . $message."</p>
	<p>Name: ". $name . "</p>
	<p>Email: ". $email . "
	<p>Tel: ". $tel . "</p>
	Address: ". $address . "</p>";
	
	ini_set("sendmail_from", $email_from);
	$sent = mail($email_to, $email_subject, $textmessage, $headers, "-f" .$email_from);
	if ($sent)
	{
		$message = "Message sent";
	} else {
		$message = "There has been an error sending your comments. Please try later.";
	}
}
echo("sent=".$textmessage);

?>