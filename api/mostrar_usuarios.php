<?php
include 'conexion.php';

if (isset($_GET['eliminar'])) {
    $idEliminar = $_GET['eliminar'];
    $queryDelete = "DELETE FROM usuario WHERE ID = $idEliminar";
    $resultDelete = mysqli_query($conexion, $queryDelete);

    if ($resultDelete) {
        echo '<script>alert("Usuario eliminado correctamente");</script>';
    } else {
        echo "Error al eliminar usuario: " . mysqli_error($conexion);
    }
}

if (isset($_POST['actualizar'])) {
    $idActualizar = $_POST['id'];
    $nuevoUsername = $_POST['nuevoUsername'];
    $queryUpdate = "UPDATE usuario SET Username = '$nuevoUsername' WHERE ID = $idActualizar";
    $resultUpdate = mysqli_query($conexion, $queryUpdate);

    if ($resultUpdate) {
        echo '<script>alert("Usuario actualizado correctamente");</script>';
        echo '<script>window.location.href = "Administrativa.php";</script>';
        exit();
    } else {
        echo "Error al actualizar usuario: " . mysqli_error($conexion);
    }
}

$query = "SELECT * FROM usuario";
$result = mysqli_query($conexion, $query);

if (!$result) {
    echo "No se ha podido realizar la consulta: " . mysqli_error($conexion);
} else {
    echo "<table class='styled-table'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Correo</th>";
    echo "<th>Username</th>";
    echo "<th>Password</th>";
    echo "<th>Acciones</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['ID']) . "</td>";  
        echo "<td>" . htmlspecialchars($row['Correo']) . "</td>";

        if (isset($_GET['editar']) && $_GET['editar'] == $row['ID']) {
            echo "<td>
                    <form method='POST' action=''>
                        <input type='hidden' name='id' value='" . htmlspecialchars($row['ID']) . "'>
                        <input type='text' name='nuevoUsername' value='" . htmlspecialchars($row['Username']) . "'>
                        <button type='submit' name='actualizar' style='color: blue;'>GUARDAR</button>
                    </form>
                  </td>";
        } else {
            echo "<td>" . htmlspecialchars($row['Username']) . "</td>";
        }
        
        echo "<td>" . htmlspecialchars($row['password']) . "</td>";
        echo "<td>";
        echo "<a href='?editar=" . $row['ID'] . "'><button style='color: green;'>EDITAR</button></a> ";
        echo "<a href='?eliminar=" . $row['ID'] . "' onclick='return confirm(\"¿Estás seguro de eliminar este usuario?\")'><button style='color: red;'>BORRAR</button></a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>







