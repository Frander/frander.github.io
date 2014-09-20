<?php
require 'libs/class.phpmailer.php';

$mail = new PHPMailer();
 
$mail->IsSMTP();
$mail->Host     = "ssl://smtp.gmail.com";
$mail->Port     = 465;
$mail->SMTPAuth = true;
 
$mail->Username = "frander.mejia15@gmail.com";
$mail->Password = "Guaymitas12";

$email = $_POST['email'];
$nombre = $_POST['nombre'];
 
$mail->From     = $email
$mail->FromName = $nombre
 
$mail->Subject  = "Contacto";
$mail->WordWrap = 50;
 
$mail->AddAddress("frander.mejia15@gmail.com");           
$mail->IsHTML(TRUE);

$mensaje = $_POST['mensaje'];
 
$mail->Body = $mensaje;

$mail->Send();

 
/*if(!$mail->Send()) {
    echo "Error: " . $mail->ErrorInfo;
} else {
    echo "Mensaje enviado";
}*/
?>

<script languaje="javascript">
	alert("Mensaje enviado");
	location.href = "index.html";
</script>