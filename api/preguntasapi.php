<?php

include 'conexion.php';

$pdo = new Conexion2();

// Sabemos que por URL es GET
if ($_SERVER['REQUEST_METHOD'] == "GET") {
        $sql = $pdo->prepare("select p.id,p.pregunta,a.descripcion,a.escorrecto from alternativa a inner join quiz p on a.idpregunta = p.id;");
        $sql->execute();
        $productos = $sql->fetchAll(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 OK");
        echo json_encode($productos);
        exit;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
        $respuesta = json_decode(file_get_contents("php://input"), true);
        // Iniciar transacción
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insertar factura
        $idusuario = isset($respuesta['idusuario']) ? $respuesta['idusuario'] : 0;
        $puntaje = isset($respuesta['puntaje']) ? $respuesta['puntaje'] : 0;
        $puntajemaximo = isset($respuesta['puntajemaximo']) ? $respuesta['puntajemaximo'] : 0;

        $sql = $pdo->prepare("INSERT INTO respuesta_usuario (idusuario,puntaje,puntajemaximo,fecha) VALUES (:valor1,:valor2,:valor3,now())");

        // Bind parameters
        $sql->bindParam(':valor1', $idusuario);
        $sql->bindParam(':valor2', $puntaje);
        $sql->bindParam(':valor3', $puntajemaximo);
        
        $sql->execute();
        echo 1;
        exit;
        } catch (PDOException $e) {
           echo 0;
        }
}

header("HTTP/1.1 405 Method Not Allowed");
echo json_encode(['status' => 'error', 'error' => 'Método no permitido']);
exit;

?>
