<?php

namespace classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    protected $nombre;
    protected $email;
    protected $token;

    public function __construct($nombre, $email, $token)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {
        //Crear objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port =  $_ENV['EMAIL_PORT'];;
        $mail->Username =  $_ENV['EMAIL_USER'];
        $mail->Password =  $_ENV['EMAIL_PASS'];

        $mail->setFrom('cuentas@uptask.com');
        $mail->addAddress('cuentas@uptask.com', 'uptask.com');
        $mail->Subject = 'Confirma tu cuenta';

        // Mensaje
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola, " . $this->nombre . "</strong> Has creado tu cuenta en UpTask,
        solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aqui: <a href=' " . $_ENV['APP_URL'] . "/confirmar?token=" .
            $this->token . "'>Confirmar cuentas</a></p>";
        $contenido .= "<p>Si tu no creaste esta cuenta puedes ignorar este mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        //Enviar el email
        $mail->send();
    }

    public function enviarInstrucciones()
    {
        //Crear objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port =  $_ENV['EMAIL_PORT'];;
        $mail->Username =  $_ENV['EMAIL_USER'];
        $mail->Password =  $_ENV['EMAIL_PASS'];

        $mail->setFrom('cuentas@uptask.com');
        $mail->addAddress('cuentas@uptask.com', 'uptask.com');
        $mail->Subject = 'Cambia tu password';

        // Mensaje
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola, " . $this->nombre . "</strong> Has solicitado un cambio de password.</p>";
        $contenido .= "<p>Presiona aqui: <a href=" . $_ENV['APP_URL'] . " '/restore?token=" .
            $this->token . "'>Restablece tu password</a></p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

        //Enviar el email
        $mail->send();
    }
}
