<?php
session_start();
include 'conexion.php';

$usuario = $_POST['username'];
$password = $_POST['password'];

$validar_login = mysqli_query($conexion, "SELECT ID, Username, Correo FROM usuario WHERE Username='$usuario' AND password='$password'");

if (mysqli_num_rows($validar_login) > 0) {
    $usuario = mysqli_fetch_assoc($validar_login);
    $_SESSION['usuario'] = $usuario['Username'];
    $_SESSION['logeado'] = true;
    $_SESSION['idusuario'] = $usuario['ID'];
    $_SESSION['correo'] = $usuario['Correo'];  
    header("location: ../index.php");
    exit;
} else {
    header("location: ../Ingresar.php?error=1");
    exit;
}
?>
