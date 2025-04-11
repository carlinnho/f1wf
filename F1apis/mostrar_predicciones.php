<?php


$query = "SELECT * FROM predecir";
$result = mysqli_query($conexion, $query);

if (!$result) {
    echo "No se ha podido realizar la consulta: " . mysqli_error($conexion);
} else {
    echo "<table border='1' class='styled-table'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>ID_Usuario</th>";
    echo "<th>Jornada</th>";
    echo "<th>Primer lugar</th>";
    echo "<th>Segundo lugar</th>";
    echo "<th>Tercer lugar</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['ID']) . "</td>";
        echo "<td>" . htmlspecialchars($row['ID_Usuario']) . "</td>";
        echo "<td>" . htmlspecialchars($row['jornada']) . "</td>";
        echo "<td>" . htmlspecialchars($row['primer']) . "</td>";
        echo "<td>" . htmlspecialchars($row['segundo']) . "</td>";
        echo "<td>" . htmlspecialchars($row['tercero']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
