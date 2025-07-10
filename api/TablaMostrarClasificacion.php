<?php
require 'conexion.php';

$db = new Conexion2();

// Actualizar puntuación
if (isset($_POST['actualizar_puntaje'])) {
    $idCorredor = $_POST['id_corredor'];
    $nuevoPuntaje = $_POST['nuevo_puntaje'];

    $update = $db->prepare("UPDATE clasificacion_corredores SET puntuacion = ? WHERE ID_Corredores = ?");
    $update->execute([$nuevoPuntaje, $idCorredor]);

    // Reordenar posiciones
    $db->query("SET @pos := 0");
    $db->query("UPDATE clasificacion_corredores SET posicion = (@pos := @pos + 1) ORDER BY puntuacion DESC");
    
    echo "<script>window.location.href = 'Administrativa.php';</script>";
    exit();
}

// Obtener datos
$query = "
    SELECT cc.ID_Corredores, cc.puntuacion, cc.posicion, c.nombre AS corredor, e.nombre AS equipo
    FROM clasificacion_corredores cc
    JOIN corredores c ON cc.ID_Corredores = c.ID
    JOIN equipos e ON c.ID_Equipo = e.ID
    ORDER BY cc.posicion ASC
";
$stmt = $db->prepare($query);
$stmt->execute();
$clasificacion = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Mostrar tabla
echo "<h2>Clasificación de Corredores</h2>";
echo "<table class='styled-table'>";
echo "<thead>
        <tr>
            <th>Posición</th>
            <th>Corredor</th>
            <th>Equipo</th>
            <th>Puntaje</th>
            <th>Acción</th>
        </tr>
      </thead><tbody>";

foreach ($clasificacion as $fila) {
    echo "<tr>";
    echo "<td>{$fila['posicion']}</td>";
    echo "<td>{$fila['corredor']}</td>";
    echo "<td>{$fila['equipo']}</td>";
    echo "<td>
            <form method='POST' action=''>
                <input type='hidden' name='id_corredor' value='{$fila['ID_Corredores']}'>
                <input type='number' name='nuevo_puntaje' value='{$fila['puntuacion']}' min='0' style='width: 60px;'>
          </td>";
    echo "<td><button type='submit' name='actualizar_puntaje'>Guardar</button></form></td>";
    echo "</tr>";
}
echo "</tbody></table>";
?>
