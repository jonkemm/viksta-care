<?php
require_once ('./bobs-house-viksta/vendor/autoload.php');
require_once ('./php/deets.php');

// show errors
ini_set('display_errors', 1);

// vars
$missing='';
$attachment = '';

if($_POST["name"]<>''){$name = $_POST["name"];}else{$name='';};
if ( str_word_count( $name ) > 4 ) { $missing .= "Too many words in Name box<br>"; }
if(isset($_POST["message"])){$message1 = $_POST["message"];}else{$message1='';};
if(isset($_POST["email"])){$email = $_POST["email"];}else{$email='';};
if(isset($_POST["origin"])){$origin = $_POST["origin"];}else{$origin='';};
if(isset($_POST["purpose"])){$purpose = $_POST["purpose"];}else{$purpose='contact';};
if(isset($_POST["whom"])){$whom = $_POST["whom"];}else{$whom='';};
if(isset($_POST["postcode"])){$postcode = $_POST["postcode"];}else{$postcode='';};
if(isset($_POST["tel"])){$tel = $_POST["tel"];}else{$tel='';};



$subject = 'Contact form on Viksta Care Ltd website';
// Remove all illegal characters from email

// if ( isset( $_POST['g-recaptcha-response'] ) ) {
// 	$captcha = $_POST['g-recaptcha-response']; 
// }
// if ( $captcha == '' ) { 
// 	$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdzVAcTAAAAALUWnVa-CwkopuSRv1LKTJS3k53k&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
// 	if ( $response['success'] == '' ) {
// 		$missing .= 'You failed the spam test. ';
// 	}
// }
// if ( $captcha == '' ) { 
// 	$missing .= "Please check / tick the I'm not a robot box. "; 
// }

// check
if ( $missing != "") {
	$missing = "Please fix above errors. ";
}
else {
	$htmlMessage="
<HTML>
	<head>
		<title>".$subject."</title>
	</head>
	<body>
		<div style='width:100%; text-align:center;'><img src='img/viksta-logo-icon.svg' alt='Viksta Care Logo' /></div>
		<p>Message: " . $message1."</p>
		<p>Purpose: ". $purpose . "</p>
		<p>Name: ". $name . "</p>
		<p>Origin: ". $origin . "</p>
		<p>Whom is it for?: ". $whom . "</p>
		<p>Tel: ". $tel . "</p>
		<p>Postcode: ". $postcode . "</p>
		<p>Email: ". $email . "
	</body>
</html>";
	$emailFormat = '';
	$attachment = '';
	$emailFromInfo = 'yes';
	// -------------------------------------------------------------------------
require_once '../bobs-house-viksta/email-settings.php';
	// -------------------------------------------------------------------------
	if ($result) { 
		$missing = "Message sent&alert=success";
	} else {
		$missing = "There has been an error sending your comments. Please try later.";
	}
}
session_start();
$_SESSION['post']['check'] = 'yes';
// echo $_SESSION['post']['check'];
// exit;
header("Location: ".$purpose);
?>