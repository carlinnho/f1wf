<?php

include 'conexion.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/../../includes/libraries/PHPMailer/src/Exception.php';
require '/../../includes/libraries/PHPMailer/src/PHPMailer.php';
require '/../../includes/libraries/PHPMailer/src/SMTP.php';

$correo = $_POST['Correo'];
$username = $_POST['Username'];
$password = $_POST['password'];

$query = "INSERT INTO usuario(Correo, Username, password) VALUES ('$correo','$username','$password')";

// Verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE Correo='$correo'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya esta en uso, intente de nuevo");
            window.location ="../registro.php";
        </script>
    ';
    exit();
}

// Verificar que el usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE Username='$username'");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
            alert("Este usuario ya esta en uso, intente de nuevo");
            window.location ="../registro.php";
        </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    // Enviar correo de bienvenida
    $mail = new PHPMailer(true);
    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'soporte.f1wf@gmail.com';
        $mail->Password = 'waaa mlha lgzn mhun';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        // Destinatarios
        $mail->setFrom('soporte.f1wf@gmail.com', 'F1WF');
        $mail->addAddress($correo, $username);

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = '¡Te damos la Bienvenida a F1WF!';
        $mail->Body    = '
        <html>
            <head>
                <style>
                    .email-header, .email-footer {
                        background-color: #e10600;
                        color: white;
                        padding: 20px;
                        text-align: center;
                    }
                    .email-body {
                        padding: 20px;
                        text-align: left;
                        font-family: Arial, sans-serif;
                    }
                    .email-content {
                        max-width: 600px;
                        margin: auto;
                        border: 1px solid #dddddd;
                        border-radius: 10px;
                        overflow: hidden;
                    }
                    .email-logo {
                        max-width: 150px;
                        margin-bottom: 20px;
                    }
                </style>
            </head>
            <body>
                <div class="email-content">
                    <div class="email-header">
                        <h1>¡Te damos la Bienvenida a Formula 1 Web Fans!</h1>
                    </div>
                    <div class="email-body">
                        <p>Hola ' . $username . ',</p>
                        <p>Nos complace informarte que tu cuenta está totalmente activa y aprovechamos en desearte mucha diversión.</p>
                        <p>Estaremos encantados de estar a tu disposición ante cualquier información o aclaración adicional que requieras.</p>
                        <p>Saludos cordiales,</p>
                        <p>El equipo de F1WF</p>
                    </div>
                    <div class="email-footer">
                        <p>* Por razones de seguridad, tu contraseña nunca se enviará por correo electrónico. Si tienes más preguntas, por favor ponte en contacto con nosotros a través de <a href="mailto:soportequenoexiste@nuncaexistira.com" style="color: white;">soportequenoexiste@nuncaexistira.com</a>.</p>
                    </div>
                </div>
            </body>
            </html>
        ';

        $mail->send();
        echo '
            <script>
                alert("Usuario Creado Exitosamente");
                window.location ="../index.php";
            </script>
        ';
    } catch (Exception $e) {
        echo '
            <script>
                alert("Usuario almacenado exitosamente pero no se pudo enviar el correo de bienvenida. Error: ' . $mail->ErrorInfo . '");
                window.location ="../index.php";
            </script>
        ';
    }
} else {
    echo '
        <script>
            alert("Intentelo nuevamente");
            window.location ="../registro.php";
        </script>
    ';
}

mysqli_close($conexion);
?>
