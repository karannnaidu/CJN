<?php


require 'PHPMailer/src/PHPMailer.php';

require 'PHPMailer/src/SMTP.php';

require 'PHPMailer/src/Exception.php';


	

//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "justguystuff80085@gmail.com";
//Set gmail password
	$mail->Password = "karannaidu123";
//Email subject
	$mail->Subject = "Test email using PHPMailer";
//Set sender email
	$mail->setFrom('justguystuff80085@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment

//Email body
	$mail->Body = "<h1>This is HTML h1 Heading</h1></br><p>This is html paragraph</p>";
//Add recipient
	$mail->addAddress('naiduc332@gmail.com');
//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};	
	}
//Closing smtp connection
	$mail->smtpClose();


?>