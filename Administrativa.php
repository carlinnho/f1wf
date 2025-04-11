<?php
session_start();
if (!isset($_SESSION['logeado']))
    $_SESSION['logeado']=false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<link rel="icon" type="image/png" href="awebo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1WF | Mi perfil</title>
    <link rel="stylesheet" href="estilosCSS/administrativa.css">

</head>

<body>
    <header class="header">
        <b>F1WF</b>
        <?php if ($_SESSION['logeado']) { ?>
            <div class="NuevoUsuario logueado">Bienvenido <?php echo htmlspecialchars($_SESSION['usuario']); ?> </div>
            <div class="Registrarse"><a href="F1apis/cerrar.php">Cerrar</a></div>
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
                <li><a href="index.php">HOME</a></li>
                <li><a href="Corredores.php">CORREDORES</a></li>
                <li><a href="equipos.php">EQUIPOS</a></li>
                <li><a href="info.php">INFORMACIÓN</a></li>
                <li><a href="menuQuiz.php">HACER QUIZ</a></li>
                <li><a href="menuPredecir.php">PREDECIR</a></li>
                <li><a href="Administrativa.php">MI PERFIL</a></li>
            <?php } else { ?>
                <li><a href="index.php">HOME</a></li>
                <li><a href="Corredores.php">CORREDORES</a></li>
                <li><a href="equipos.php">EQUIPOS</a></li>
                <li><a href="info.php">INFORMACIÓN</a></li>
                <li><a href="menuQuiz.php">HACER QUIZ</a></li>
                <li><a href="menuPredecir.php">PREDECIR</a></li>
            <?php } ?>
        </ul>
    </nav>

    <div class="main-content">
        <div class="sidebar">
            <div class="option" onclick="showSection('modificarPerfil')">Modificar Perfil</div>
            <div class="option" onclick="showSection('predecirCampeon')">Predecir Campeón</div>
            <div class="option" onclick="showSection('quiz')">Quiz</div>
            <div class="option" onclick="showSection('graficos')">Graficos</div>
        </div>
        <div class="content">
            <div id="modificarPerfil">
                <h2>Usuarios</h2>
                <?php include_once 'F1apis/mostrar_usuarios.php'; ?>
            </div>
            <div id="predecirCampeon">
                <h2>Predecir campeón</h2>
                <?php include 'F1apis/mostrar_predicciones.php'; ?>
            </div>
            <div id="quiz">
                <h2>Resultados de quiz</h2>
                <?php include 'F1apis/mostrar_quizzes.php'; ?>
            </div>
            <div id="graficos">
                <h2>Graficos</h2>
                <?php include 'F1apis/mostrar_graficos.php'; ?>
                <?php include 'F1apis/grafico1.php'; ?>
            </div>
        </div>
    </div>

    <script>
        function showSection(sectionId) {
            var sections = document.querySelectorAll('.content > div');
            sections.forEach(function(section) {
                section.classList.add('hidden');
            });
            document.getElementById(sectionId).classList.remove('hidden');
        }

        document.addEventListener('DOMContentLoaded', function() {
            showSection('modificarPerfil');
            drawCharts();
        });
    </script>
</body>
</html>
