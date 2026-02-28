<?php

use PHPMailer\PHPMailer\PHPMailer;

class Mail {
    public function sendMail($destinatario, $nombreDestinatario, $mensaje) {
        require dirname(__DIR__) ."/vendor/autoload.php";
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Port = 465;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['sender'];
        $mail->Password = $_ENV['sender_password'];
        $mail->setFrom($_ENV['sender'], $_ENV['sender_name']);
        $mail->addAddress($destinatario, $nombreDestinatario);
        $mail->Subject = "Contacto";
        $mail->CharSet = PHPMailer::CHARSET_UTF8;
        $mail->msgHTML($mensaje);
        if ($mail->send()) {
            return true;
        } else {
            return false;
        }
    }
}