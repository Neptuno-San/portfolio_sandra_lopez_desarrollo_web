<?php
$nombre = $_POST['nombre'];
$email = $_POST['email']; 
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email .  " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() .  " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su email es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'sandra.lopez.game@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");

?>