<?php 
session_start();
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

  if(isset($_POST['btn-send']))
    {
       
       $Email = $_POST['email'];

	
	       
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
	$mail->Username = "apaeat888@gmail.com";
//Set gmail password
	$mail->Password = "jnlsgmssagsdeaig";
//Email subject
	$mail->Subject = "Subscribe from Customer";
//Set sender email
	$mail->setFrom($Email);
//Enable HTML
	$mail->isHTML(true);
//Attachment
//	$mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body =  '   Email: ' . $Email;
//Add recipient
	$mail->addAddress('apaeat888@gmail.com');
//Finally send email
	if ( $mail->send() ) {
		  header("location:success.php");
                exit();
	}else{
	   header("location:contact.php");
	   exit();
	}
//Closing smtp connection
	$mail->smtpClose();
			}
	


   
?>