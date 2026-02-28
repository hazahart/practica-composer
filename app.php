<?php
require_once __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once __DIR__ . "/mail/mail.php";

$datos = $_POST;

$mail = new Mail();
$res = $mail->sendMail($datos['correo'], $datos['nombre']);

if ($res) {
    $titulo = "Registro exitoso";
    $mensaje = "Te hemos enviado un correo de bienvenida a <strong>" . htmlspecialchars($datos['correo']) . "</strong>.";
    $icono = '<i class="fa-solid fa-circle-check text-success me-2"></i>';
    $claseBoton = "btn-success";
} else {
    $titulo = "Ocurrió un problema";
    $mensaje = "No pudimos procesar tu solicitud. Por favor, inténtalo de nuevo más tarde.";
    $icono = '<i class="fa-solid fa-circle-xmark text-danger me-2"></i>';
    $claseBoton = "btn-danger";
}

require_once __DIR__ ."/views/modal.php";