<?php
session_start();
if (!isset($_SESSION['logeado']))
    $_SESSION['logeado']=false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<link rel="icon" type="image/png" href="https://drive.google.com/uc?export=view&id=1duv5P3V4NFqqMnfiMjl3RoF9-DN_0_4j">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1WF | Registrate</title>
    <link rel="stylesheet" href="estilosCSS/registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form action="F1apis/registro_usuario.php" method="POST">
        <h1 class="title">REGISTRATE</h1>
        <label>
            <i class="fa-solid fa-envelope"></i>
            <input placeholder="Correo" id="correo" name="Correo">
        </label>
        <label>
            <i class="fa-solid fa-user"></i>
            <input placeholder="Usuario" id="username" name="Username">
        </label>
        <label>
            <i class="fa-solid fa-key"></i>
            <input placeholder="Contraseña" type="password" id="password" name="password">
        </label>

        <a href="Ingresar.php" class="link">Iniciar Sesion</a>

        <button type="submit" id="button">Registrate</button>
        <p id="mensaje" style="color: red;"></p>

    </form>

    <script>
        const correo = document.getElementById('correo');
        const username = document.getElementById('username');
        const contraseña = document.getElementById('contrasena');
        const button = document.getElementById('button');
        const mensaje = document.getElementById('mensaje');

        button.addEventListener('click', (e) => {
            mensaje.textContent = '';

            if (correo.value === '' || username.value === '' || contraseña.value === '') {
                e.preventDefault();
                mensaje.textContent = 'Por favor, ingrese todos los datos.';
                return;
            }

            const datos = {
                correo: correo.value,
                username: username.value,
                contraseña: contraseña.value,
            }

            console.log(datos);
        });
    </script>

</body>

</html>
