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
    <title>F1WF | Inicio</title>
    <link rel="stylesheet" href="estilosCSS/index.css">

</head>

<body>

    <div id="loader" class="loader">
        <svg viewBox="25 25 50 50">
            <circle r="20" cy="50" cx="50"></circle>
        </svg>
    </div>

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

    <section class="presentacion">
        <div class="contenido">
        <div class="titulo">FORMULA 1 WEB FANS</div>
            <div class="textoMenu">
                <label>Una pagina hecha por Fans para los Fans,</label> <br>
                <label>descubre más acerca de este apasionado deporte</label> <br>
                <label>y no te pierdas de las proximas carreras</label>
            </div>
            <a href="menuQuiz.php" class="botonPortada">PON A PRUEBA TUS CONOCIMIENTOS</a>
        </div>
    </section>

    <section class="información">
        <div class="cuadroBlanco">
            <div class="cuadroTitulo">¿Qué es la Formula 1?</div>
            <div class="cuadroTexto">La Fórmula 1 es la máxima categoría del automovilismo mundial, donde los mejores
                pilotos compiten en circuitos internacionales con autos de alta tecnología, velocidad y estrategia para
                ganar el campeonato mundial.</div>
            <a href="info.php" class="botonInformación">Conoce más aqui</a>

        </div>
    </section>

    <section class="MejoresCorredores">
    <div class="background"></div>
    <div class="tituloCorredores">CONOCE A NUESTROS MEJORES CORREDORES</div>
    <div class="corredoresContainer">
        <div class="corredor corredor1">
            <img src="imagenesMenu/MaxVertappen.avif" alt="Avatar" class="img">
            <div class="container">
                <h4><b>Max Vestappen</b></h4>
                <p>Red bull Racing</p>
            </div>
        </div>
        <div class="corredor corredor2">
            <img src="imagenesMenu/LewisHamilton.avif" alt="Avatar" class="img">
            <div class="container">
                <h4><b>Lewis Hamilton</b></h4>
                <p>Mercedes</p>
            </div>
        </div>
        <div class="corredor corredor3">
            <img src="imagenesMenu/CharlesLecrec.avif" alt="Avatar" class="img">
            <div class="container">
                <h4><b>Charles Lecrerc</b></h4>
                <p>Ferrari</p>
            </div>
        </div>
    </div>
    <a href="Corredores.php" class="botonCorredores">Conoce más aquí</a>
    </section>


    <section class="MomentosDestacados">
    <div class="fondito"></div>
    <div class="tituloMomentos">Momentos Destacados</div>
    <div class="videosContainer">
        <div class="video video1">
            <video src="Videos/PitsMásRapida.mp4" controls class="videoElement"></video>
        </div>
        <div class="video video2">
            <video src="Videos/AdelantamientoVerstappen.mp4" controls class="videoElement"></video>
        </div>
        <div class="video video3">
            <video src="Videos/VueltaMásRapida.mp4" controls class="videoElement"></video>
        </div>
    </div>
    <a href="equipos.php" class="botonMomentos">Descubre más aquí</a>
    </section>


    <footer class="footer">
  <div class="footer-container">
    <!-- Columna 1: Logo -->
    <div class="footer-col logo-col">
      <img src="awebo.png" alt="Logo F1" class="footer-logo">
    </div>

    <!-- Columna 2: Información -->
    <div class="footer-col info-col">
      <p>&copy; 2025 Formula 1 Fan Page. Todos los derechos reservados.</p>
      <p>Proyecto académico sin fines de lucro.</p>
    </div>
  </div>
</footer>

        
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var loader = document.getElementById('loader');
        loader.style.display = 'flex';

        setTimeout(function() {
            loader.style.display = 'none';
        }, 1000);
    });
</script>

</body>

</html>
