<?php
session_start();
if (!isset($_SESSION['logeado']))
    $_SESSION['logeado']=false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<link rel="icon" type="image/png" href="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153556/awebo_leqzak.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1WF | Log in</title>
    <link rel="stylesheet" href="../css/Ingresar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<?php
if(isset($_GET['error']) && $_GET['error']==1){
    echo'
    <script>
    alert("El nombre de usuario o contraseña son incorrectas");
    </script>
    ';
}


?>

<body>
<form id="loginForm" action="../../api/login_usuario.php" method="POST">
        <h1 class="title">LOGIN</h1>
        <label>
            <i class="fa-solid fa-user"></i>
            <input placeholder="Usuario" id="username" name="username">
        </label>
        <label>
            <i class="fa-solid fa-key"></i>
            <input placeholder="Contraseña" type="password" id="password" name="password">
        </label>
        <a href="#" class="link">Olvidaste tu contraseña?</a>
        <a href="registro.php" class="link">Crea tu cuenta</a>

        <button id="button" type="submit">Ingresar</button>
        <p id="mensaje" style="color: red;"></p>
    </form>

    </form>

    <script>
        const form = document.getElementById('loginForm');
        const username = document.getElementById('username');
        const password = document.getElementById('password');
        const mensaje = document.getElementById('mensaje');

        form.addEventListener('submit', (e) => {
            mensaje.textContent = '';

            if (username.value === '' || password.value === '') {
                e.preventDefault();
                mensaje.textContent = 'Por favor, ingrese todos los datos.';
            }
        });
    </script>

</body>

</html>