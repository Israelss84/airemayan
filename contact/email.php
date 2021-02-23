<?php 

$nombre = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$email_to = "ventas@aireacondicionadomayan.com.mx";
$email_subject = "Mensaje enviado desde el sitio web";
$email_from = $email;

$email_message .= "Asunto: " . $asunto . "<br>";
$email_message . "Nombre: " . $nombre . "<br>";
$email_message .= "E-mail: " . $email . "<br>";
$email_message .= "Teléfono: " . $phone . "<br>";
$email_message .= "Mensaje: " . $message . "<br>";

// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'MIME-Version: 1.0' . "\r\n" .
'Content-type: text/html; charset=UTF-8' ."\r\n" .
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

if(mail($email_to, $email_subject, $email_message, $headers)){
	echo 'Su mensaje se envió correctamente';
}


?>