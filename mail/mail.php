<?php

use PHPMailer\PHPMailer\PHPMailer;

class Mail {
    public function sendMail($destinatario, $nombreDestinatario) {
        require dirname(__DIR__) ."/vendor/autoload.php";
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SENDER'];
        $mail->Password = $_ENV['SENDER_PASSWORD'];
        $mail->setFrom($_ENV['SENDER'], $_ENV['SENDER_NAME']);
        $mail->addAddress($destinatario, $nombreDestinatario);
        $mail->Subject = "Contacto";
        $mail->CharSet = PHPMailer::CHARSET_UTF8;
        $mail->isHTML(true);
        ob_start();
        require dirname(__DIR__) . '/views/message.php';
        $mail->Body = ob_get_clean();
        if ($mail->send()) {
            return true;
        } else {
            return false;
        }
    }
}