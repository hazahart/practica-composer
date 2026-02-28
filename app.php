<?php
require_once __DIR__ . "/mail/mail.php";

$datos = $_POST;

$mail = new Mail();
$mail->sendMail($datos['correo'], $datos['nombre'], $datos['mensaje']);