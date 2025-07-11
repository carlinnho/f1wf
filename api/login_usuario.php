<?php
session_start();
include 'conexion.php';

$usuario = $_POST['username'];
$password = $_POST['password'];

// Agregamos el campo 'admin' al SELECT
$validar_login = mysqli_query($conexion, "SELECT ID, Username, Correo, admin FROM usuario WHERE Username='$usuario' AND password='$password'");

if (mysqli_num_rows($validar_login) > 0) {
    $usuario = mysqli_fetch_assoc($validar_login);
    $_SESSION['usuario'] = $usuario['Username'];
    $_SESSION['logeado'] = true;
    $_SESSION['idusuario'] = $usuario['ID'];
    $_SESSION['correo'] = $usuario['Correo'];  
    $_SESSION['admin'] = $usuario['admin']; // ← esta línea es clave
    header("location: ../public/index.php");
    exit;
} else {
    header("location: ../public/pagesIngresar.php?error=1");
    exit;
}
?>
