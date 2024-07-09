<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('phpmailer/src/PHPMailer.php');
require_once('phpmailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load composer's autoloader



    $mail = new PHPMailer(true);
   
        try{    
		
	$mail->setFrom('radiodent_javrc@hotmail.com', 'Cedident');
    $mail->addAddress('radiodent_javrc@hotmail.com', 'Cedident');                
	$mail->isHTML(true);                                  

	$mail->Subject = 'Cedident';

	$body= "Ha recibido un mensaje desde la página web con los siguientes datos:<br /><br />";
	$body.= "<strong>Nombres y Apellidos:</strong> ".$_REQUEST["name"].PHP_EOL . PHP_EOL ."<br />";
	$body.= "<strong>Email:</strong>".$_REQUEST["email"].PHP_EOL ."<br />";
	$body.= "<strong>Apellido:</strong>".$_REQUEST["surname"].PHP_EOL ."<br />";
	$body.= "<strong>Telefono:</strong>".$_REQUEST["phone"].PHP_EOL ."<br />";
	$body.= "<strong>Direccion:</strong>".$_REQUEST["address"].PHP_EOL ."<br />";
	$body.= "<strong>Nacimiento:</strong>".$_REQUEST["nacimiento"].PHP_EOL ."<br />";
	$body.= "<strong>Sede:</strong>".$_REQUEST["where"].PHP_EOL ."<br />";
	$body.= "<strong>Especialidad:</strong>".$_REQUEST["especialidad"].PHP_EOL ."<br />";
	$body.= "<strong>Dni:</strong>".$_REQUEST["dni"].PHP_EOL ."<br />";
	$body.= "<strong>COP:</strong>".$_REQUEST["cop"].PHP_EOL ."<br />";
	$mail->Body =$body;
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	 Header("Location: index");
	}

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 ?>

