<?php
require_once 'conexion.php';

$db = new Conexion2();

// Actualizar puntuación
if (isset($_POST['actualizar_puntaje_equipo'])) {
    $idEquipo = $_POST['id_equipo'];
    $nuevoPuntaje = $_POST['nuevo_puntaje'];

    $update = $db->prepare("UPDATE clasificacion_equipo SET puntuacion = ? WHERE ID_Equipo = ?");
    $update->execute([$nuevoPuntaje, $idEquipo]);

    // Reordenar posiciones según nuevo puntaje
    $db->query("SET @pos := 0");
    $db->query("UPDATE clasificacion_equipo SET posicion = (@pos := @pos + 1) ORDER BY puntuacion DESC");

    echo "<script>window.location.href = 'Administrativa.php';</script>";
    exit();
}

// Obtener datos actuales
$query = "
    SELECT ce.ID_Equipo, ce.puntuacion, ce.posicion, e.nombre AS equipo
    FROM clasificacion_equipo ce
    JOIN equipos e ON ce.ID_Equipo = e.ID
    ORDER BY ce.posicion ASC
";

$stmt = $db->prepare($query);
$stmt->execute();
$clasificacion = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Mostrar tabla
echo "<h2>Clasificación de Equipos</h2>";
echo "<table class='styled-table'>";
echo "<thead>
        <tr>
            <th>Posición</th>
            <th>Equipo</th>
            <th>Puntaje</th>
            <th>Acción</th>
        </tr>
      </thead><tbody>";

foreach ($clasificacion as $fila) {
    echo "<tr>";
    echo "<td>{$fila['posicion']}</td>";
    echo "<td>{$fila['equipo']}</td>";
    echo "<td>
            <form method='POST' action=''>
                <input type='hidden' name='id_equipo' value='{$fila['ID_Equipo']}'>
                <input type='number' name='nuevo_puntaje' value='{$fila['puntuacion']}' min='0' style='width: 60px;'>
          </td>";
    echo "<td><button type='submit' name='actualizar_puntaje_equipo'>Guardar</button></form></td>";
    echo "</tr>";
}
echo "</tbody></table>";
?>
