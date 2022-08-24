<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';

$mail = new PHPMailer(true);

try{
     //ver los mensajes del servidor
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	//utilizar la tecnologia--utilizando el objeto mail
	$mail->isSMTP();
	//indicar el host
	$mail->host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username ='lumamar2022@gmail.com';
	$mail->Password = '28540464';
	//tecnologia de seguridad
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Port = 587;

	//direccion de donde se van a enviar los correos
	$mail->setFrom('lumamar2022@gmail.com');
    $mail->addAddress('ljcm2021@gmail.com');
    $mail->addCC('cifuents0903@gmail.com');

	//tipo de correo html o texto simple

	$mail->isHTML(true);
	$mail->Subject = 'Esto es una prueba';
    $mail->Body    = 'Hola,ofrecemos servicios';
    $mail->send();

    echo 'Mensaje enviado';

}catch(Exception $e){
    echo 'Mensaje' .$mail->ErrorInfo;
}