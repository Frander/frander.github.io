<?php
require 'libs/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "frander.mejia15@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "Guaymitas12";

//Set who the message is to be sent from

$correo = $_POST['email'];
$nombre = $_POST['nombre'];

$mail->setFrom($correo, $nombre);

//Set who the message is to be sent to
$mail->addAddress('frander.mejia15@gmail.com', 'Frander Mejía');

//Set the subject line
$mail->Subject = 'Contacto via Portafolio';

$mensaje = "Mensaje: " . $_POST['mensaje'] . " Correo: " . $correo = $_POST['email'] . " Nombre: " . $nombre;

$mail->Body    = $mensaje;

//send the message, check for errors
if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    echo ":D";
} else {
    echo "Message sent!";
}
?>

<script languaje="javascript">
	alert("Mensaje enviado");
	location.href = "index.php";
</script>