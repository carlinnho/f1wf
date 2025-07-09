<?php
session_start();
include 'conexion.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../includes/libraries/PHPMailer/src/Exception.php';
require '../includes/libraries/PHPMailer/src/PHPMailer.php';
require '../includes/libraries/PHPMailer/src/SMTP.php';

if (!isset($_SESSION['logeado']) || !$_SESSION['logeado']) {
    header('Location: ingresar.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ID_Usuario = $_SESSION['idusuario'];
    $jornada_id = $_POST['Jornada'];
    $primer_id = $_POST['CorredorOro'];
    $segundo_id = $_POST['CorredorPlata'];
    $tercero_id = $_POST['CorredorBronce'];

    $stmt_corredor_primer = $conexion->prepare("SELECT nombre FROM corredores WHERE ID = ?");
    $stmt_corredor_primer->bind_param("i", $primer_id);
    $stmt_corredor_primer->execute();
    $stmt_corredor_primer->bind_result($primer_nombre);
    $stmt_corredor_primer->fetch();
    $stmt_corredor_primer->close();

    $stmt_corredor_segundo = $conexion->prepare("SELECT nombre FROM corredores WHERE ID = ?");
    $stmt_corredor_segundo->bind_param("i", $segundo_id);
    $stmt_corredor_segundo->execute();
    $stmt_corredor_segundo->bind_result($segundo_nombre);
    $stmt_corredor_segundo->fetch();
    $stmt_corredor_segundo->close();

    $stmt_corredor_tercero = $conexion->prepare("SELECT nombre FROM corredores WHERE ID = ?");
    $stmt_corredor_tercero->bind_param("i", $tercero_id);
    $stmt_corredor_tercero->execute();
    $stmt_corredor_tercero->bind_result($tercero_nombre);
    $stmt_corredor_tercero->fetch();
    $stmt_corredor_tercero->close();

    $stmt_jornada = $conexion->prepare("SELECT jornadas FROM jornada WHERE ID = ?");
    $stmt_jornada->bind_param("i", $jornada_id);
    $stmt_jornada->execute();
    $stmt_jornada->bind_result($jornada_nombre);
    $stmt_jornada->fetch();
    $stmt_jornada->close();

    $stmt = $conexion->prepare("INSERT INTO predecir (ID_Usuario, jornada, primer, segundo, tercero) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $ID_Usuario, $jornada_nombre, $primer_nombre, $segundo_nombre, $tercero_nombre);

    if ($stmt->execute()) {
        $alerta = "Predicción guardada exitosamente.";

        $correo = $_SESSION['correo'];
        $mail = new PHPMailer(true);
        try {
            
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'soporte.f1wf@gmail.com';
            $mail->Password = 'waaa mlha lgzn mhun';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('soporte.f1wf@gmail.com', 'F1WF');
            $mail->addAddress($correo);

            $mensaje_html = file_get_contents('../mensaje.html');
            $mail->isHTML(true);
            $mail->Subject = 'Prediccion registrada';
            $mail->Body =  '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            height: 100vh;
            background: linear-gradient(to bottom, red 50%, black 50%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            max-width: 800px;
        }
        .competitor {
            display: inline-block;
            width: 30%;
            margin: 10px;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
        }
        .competitor-oro {
            background-color: #FFD700; /* Color dorado */
        }
        .competitor-plata {
            background-color: #C0C0C0; /* Color plateado */
        }
        .competitor-bronce {
            background-color: #8B4513; /* Color marrón */
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            color: #15151e;
        }
        .subtitle {
            font-size: 18px;
            margin: 10px 0;
            color: #15151e;
        }
        .center-text {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            color: #15151e;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            GRACIAS POR PREDECIR TUS CAMPEONES DE LA JORNADA
        </div>
        <div class="subtitle">
            Estas fueron tus elecciones para la jornada
        </div>
        <div class="competitor competitor-oro">
            <p>Competidor de Oro</p>
            <p>' . $primer_nombre . '</p>
        </div>
        <div class="competitor competitor-plata">
            <p>Competidor de Plata</p>
            <p>' . $segundo_nombre . '</p>
        </div>
        <div class="competitor competitor-bronce">
            <p>Competidor de Bronce</p>
            <p>' . $tercero_nombre . '</p>
        </div>
        <div class="center-text">
            Jornada: ' . $jornada_nombre . '
        </div>
    </div>
</body>
</html>
 
            ';

            $mail->send();
            echo "<script>alert('{$alerta}'); window.location.href='../public/pages/PredecirJuego.php';</script>";
        } catch (Exception $e) {
            echo "Error al enviar el correo: {$mail->ErrorInfo}";
        }
        exit;
    } else {
        echo "Error al guardar la predicción: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
} else {
    echo "Método de solicitud no válido.";
}
?>




