<?php
require 'libs/PHPMailerAutoload.php';
/*
$mail = new PHPMailer();
$mail->isSendmail();

$email = $_POST['email'];
$nombre = $_POST['nombre'];

$mail->setFrom($email, $nombre);

$mail->addAddress('frander.mejia15@gmail.com', 'Frander Mejía');

$mail->Subject = 'Contacto Portafolio';

$mensaje = $_POST['mensaje'];

$mail->AltBody = $mensaje;

$mail->send()*/
$mail = new PHPMailer();
 
$mail->IsSMTP();

$mail->SMTPDebug = 2;

$mail->Host     = "ssl://smtp.gmail.com";

/*$mail->Port     = 465;*/

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;
 
$mail->Username = "frander.mejia15@gmail.com";

$mail->Password = "Guaymitas12";

$email = $_POST['email'];
$nombre = $_POST['nombre'];

$mail->setFrom($email, $nombre);

$mail->AddAddress("frander.mejia15@gmail.com"); 
 
/*$mail->From     = $email;
$mail->FromName = $nombre;*/
 
$mail->Subject  = "Contacto";

/*$mail->WordWrap = 50;
   
$mail->IsHTML(TRUE);*/

$mensaje = $_POST['mensaje'];

/*$mail->AltBody = $mensaje;;*/
 
$mail->Body = $mensaje;


 
if(!$mail->Send()) {
    echo "Error: " . $mail->ErrorInfo;
} else {
    echo "Mensaje enviado";
}
?>

<script languaje="javascript">
	alert("Mensaje enviado");
	location.href = "index.php";
</script>