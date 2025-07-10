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
    <title>F1WF | Menu Quiz</title>
    <link rel="stylesheet" href="../css/menuQuis.css">
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

    <section class="presentacion">
        <div class="contenido">
        <div class="titulo">CONOCES DE LA FORMULA 1?</div>
            <div class="textoMenu">
                <label>¡Desafía tu conocimiento de la Fórmula 1!</label> <br>
                <label>Pon a prueba tu pasión por la velocidad con nuestro quiz</label> <br>
                <label>Demuestra que eres el mejor. ¡Comienza ahora!</label>
            </div>
        </div>
    </section>


    <section class="Seccion">
    <div class="fondito"></div>
    <div class="tituloSeccion">LISTO PARA INICIAR EL QUIZ?</div>
    <a href="QuizJuego.php" class="botonMomentos">INICIAR QUIZ</a>
    </section>



    <footer class="footer">
  <div class="footer-container">
    <!-- Columna 1: Logo -->
    <div class="footer-col logo-col">
      <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153556/awebo_leqzak.png" alt="Logo F1" class="footer-logo">
    </div>

    <!-- Columna 2: Información -->
    <div class="footer-col info-col">
      <p>&copy; 2025 Formula 1 Fan Page. Todos los derechos reservados.</p>
      <p>Proyecto académico sin fines de lucro.</p>
    </div>
  </div>
</footer>

</body>
</html>