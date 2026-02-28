<?php

use PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail {
    public function sendMail($destinatario, $nombreDestinatario, $mensaje) {
        print_r($destinatario."\n");
        print_r($nombreDestinatario."\n");
        print_r($mensaje);
    }
}