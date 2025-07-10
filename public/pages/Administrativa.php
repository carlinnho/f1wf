<?php
session_start();
if (!isset($_SESSION['logeado']))
    $_SESSION['logeado'] = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153556/awebo_leqzak.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1WF | Mi perfil</title>
    <link rel="stylesheet" href="../css/administrativa.css">
    <script>
        function showSection(id) {
            document.querySelectorAll('.content > div').forEach(div => {
                div.classList.add('hidden');
            });
            document.getElementById(id).classList.remove('hidden');
        }

        document.addEventListener('DOMContentLoaded', function() {
            showSection('modificarPerfil'); // Cambia según la sección que quieras mostrar por defecto
        });
    </script>
</head>

<body>
    <header class="header">
        <b>F1WF</b>
        <?php if ($_SESSION['logeado']) { ?>
            <div class="NuevoUsuario logueado">Bienvenido <?php echo htmlspecialchars($_SESSION['usuario']); ?> </div>
            <div class="Registrarse"><a href="../../api/cerrar.php">Cerrar</a></div>
        <?php } else { ?>
            <div class="NuevoUsuario"><a href="registro.php">Registro</a></div>
            <div class="Registrarse"><a href="Ingresar.php">Ingresar</a></div>
        <?php } ?>
    </header>

    <nav class="nav">
        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <ul class="barnav">
            <?php if ($_SESSION['logeado']) { ?>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="Corredores.php">CORREDORES</a></li>
                <li><a href="equipos.php">EQUIPOS</a></li>
                <li><a href="info.php">INFORMACIÓN</a></li>
                <li><a href="menuQuiz.php">HACER QUIZ</a></li>
                <li><a href="menuPredecir.php">PREDECIR</a></li>
                <li><a href="Administrativa.php">MI PERFIL</a></li>
            <?php } else { ?>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="Corredores.php">CORREDORES</a></li>
                <li><a href="equipos.php">EQUIPOS</a></li>
                <li><a href="info.php">INFORMACIÓN</a></li>
                <li><a href="menuQuiz.php">HACER QUIZ</a></li>
                <li><a href="menuPredecir.php">PREDECIR</a></li>
            <?php } ?>
        </ul>
    </nav>

    <div class="top-nav">
        <button onclick="showSection('modificarPerfil')">Modificar Perfil</button>
        <button onclick="showSection('predecirCampeon')">Predecir Campeón</button>
        <button onclick="showSection('quiz')">Quiz</button>
        <button onclick="showSection('clasificacion')">Clasificación</button>
    </div>

    <div class="main-content">

        <div class="content">
            <div id="modificarPerfil">
                <h2>Usuarios</h2>
                <?php include_once '../../api/mostrar_usuarios.php'; ?>
            </div>
            <div id="predecirCampeon" class="hidden">
                <h2>Predecir campeón</h2>
                <?php include '../../api/mostrar_predicciones.php'; ?>
            </div>
            <div id="quiz" class="hidden">
                <h2>Resultados de quiz</h2>
                <?php include '../../api/mostrar_quizzes.php'; ?>
            </div>
            <div id="clasificacion" class="hidden">
                <?php include '../../api/TablaMostrarClasificacion.php'; ?>
                <br>
                <?php include '../../api/TablaMostrarClasificacionEquipos.php'; ?>
            </div>

        </div>

    </div>




</body>

</html>