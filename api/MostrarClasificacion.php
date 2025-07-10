<?php
require 'conexion.php';

try {
    $db = new Conexion2();

    // Clasificación de corredores con sus equipos
    $queryDrivers = "
        SELECT cc.posicion, c.nombre AS corredor, e.nombre AS equipo, cc.puntuacion
        FROM clasificacion_corredores cc
        JOIN corredores c ON cc.ID_Corredores = c.ID
        JOIN equipos e ON c.ID_Equipo = e.ID
        ORDER BY cc.posicion ASC
    ";
    $stmtDrivers = $db->prepare($queryDrivers);
    $stmtDrivers->execute();
    $drivers = $stmtDrivers->fetchAll(PDO::FETCH_ASSOC);

    // Clasificación de equipos
    $queryTeams = "
        SELECT ce.posicion, e.nombre AS equipo, ce.puntuacion
        FROM clasificacion_equipo ce
        JOIN equipos e ON ce.ID_Equipo = e.ID
        ORDER BY ce.posicion ASC
    ";
    $stmtTeams = $db->prepare($queryTeams);
    $stmtTeams->execute();
    $teams = $stmtTeams->fetchAll(PDO::FETCH_ASSOC);

    // Retornar respuesta en JSON
    echo json_encode([
        "drivers" => $drivers,
        "teams" => $teams
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "error" => "Error en el servidor: " . $e->getMessage()
    ]);
}
