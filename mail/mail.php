<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail
{
    public function sendMail($destinatario, $nombreDestinatario)
    {
        try {
            require dirname(__DIR__) ."/vendor/autoload.php";
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['SENDER'];
            $mail->Password = $_ENV['SENDER_PASSWORD'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->setFrom($_ENV['SENDER'], $_ENV['SENDER_NAME']);
            $mail->addAddress($destinatario, $nombreDestinatario);
            $mail->isHTML(true);
            $mail->Subject = "¡Bienvenido a nuestro Boletín!";
            $mail->CharSet = PHPMailer::CHARSET_UTF8;

            ob_start();
            require dirname(__DIR__) . '/views/message.php';
            $mail->Body = ob_get_clean();

            $mail->send();
            return true;

        } catch (Exception $e) {
            error_log("Error al enviar correo: {$mail->ErrorInfo}");
            return false;
        }
    }
}