<?php

$query = "SELECT * FROM respuesta_usuario";
$result = mysqli_query($conexion, $query);

if (!$result) {
    echo "No se ha podido realizar la consulta: " . mysqli_error($conexion);
} else {
    echo "<table border='1' class='styled-table'>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>idusuario</th>";
    echo "<th>puntaje</th>";
    echo "<th>puntajeMaximo</th>";
    echo "<th>fecha</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['idusuario']) . "</td>";
        echo "<td>" . htmlspecialchars($row['puntaje']) . "</td>";
        echo "<td>" . htmlspecialchars($row['puntajeMaximo']) . "</td>";
        echo "<td>" . htmlspecialchars($row['fecha']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
