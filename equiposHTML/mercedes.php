<?php
session_start();
if (!isset($_SESSION['logeado']))
    $_SESSION['logeado']=false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link rel="icon" type="image/png" href="../awebo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1WF | Equipos | Mercedes</title>
    <link rel="stylesheet" href="../EquiposCSS/mercedes.css">
</head>
<body>
    <header class="header">
                <b>F1WF</b>
        <?php if ($_SESSION['logeado']) { ?>
            <div class="NuevoUsuario logueado">Bienvenido <?php echo htmlspecialchars($_SESSION['usuario']); ?> </div>
            <div class="Registrarse"><a href="../F1apis/cerrar.php">Cerrar</a></div>
        <?php } else { ?>
            <div class="NuevoUsuario"><a href="../registro.php">Registro</a></div>
            <div class="Registrarse"><a href="../Ingresar.php">Ingresar</a></div>
        <?php } ?>
    </header>

    <nav class="nav">
    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <label for="menu-toggle" class="menu-icon">&#9776;</label>
    <ul class="barnav">
    <?php if ($_SESSION['logeado']) { ?>
        <li><a href="../index.php">HOME</a></li>
        <li><a href="../Corredores.php">CORREDORES</a></li>
        <li><a href="../equipos.php">EQUIPOS</a></li>
        <li><a href="../info.php">INFORMACIÓN</a></li>
        <li><a href="../menuQuiz.php">HACER QUIZ</a></li>
        <li><a href="../menuPredecir.php">PREDECIR</a></li>
        <li><a href="../Administrativa.php">MI PERFIL</a></li>
    <?php } else { ?>
        <li><a href="../index.php">HOME</a></li>
        <li><a href="../Corredores.php">CORREDORES</a></li>
        <li><a href="../equipos.php">EQUIPOS</a></li>
        <li><a href="../info.php">INFORMACIÓN</a></li>
        <li><a href="../menuQuiz.php">HACER QUIZ</a></li>
        <li><a href="../menuPredecir.php">PREDECIR</a></li>
    <?php } ?>
    </ul>
    </nav>


    <section class="portada">
    <div class="logo">
        <img src="../imagenesEquipos/Mercedes.png" alt="Kick Sauber Logo" class="logo-img">
    </div>
    <div class="titulo">
        <label class="titulo-linea">MERCEDES AMG</label>
        <label class="titulo-linea">F1 TEAM</label>
    </div>
    </section>

    <section class="informacion">
    <div class="tituloInfo">HISTORIA</div>
    <div class="texto">
        <label>Mercedes-Benz regresó a la Fórmula 1 en 2010. Dominaron con su equipo propio desde 2014, ganando</label>
        <label>múltiples campeonatos con Lewis Hamilton y Nico Rosberg. Establecieron un nuevo estándar de</label>
        <label>excelencia en la era híbrida, continuando su legado de éxito desde los años 50.</label>
    </div>
    <iframe class="video1" src="https://www.youtube.com/embed/a7EO6L2iRp8?si=3kYVwoYTGvRC6xw9"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </section>

    <section class="imagenes">
        <h1>GALERIA DE IMAGENES</h1>
        <div class="contenedor1">
            <div class="slider">
                <ul>
                    <li>
                        <img src="../imagenesferrari/mercedes1.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/mercedes2.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/mercedes3.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/mercedes4.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/mercedes5.avifs" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="informacionEquipos">
        <div class="contenedorTabla">
            <table>
                <tr>
                    <td>Full Team Name</td>
                    <td>Mercedes-AMG PETRONAS F1 Team</td>
                </tr>
                <tr>
                    <td>Base</td>
                    <td>Brackley, United Kingdom</td>
                </tr>
                <tr>
                    <td>Team Chief</td>
                    <td>Toto Wolff</td>
                </tr>
                <tr>
                    <td>Technical Chief</td>
                    <td>James Allison</td>
                </tr>
                <tr>
                    <td>Chassis</td>
                    <td>W16</td>
                </tr>
                <tr>
                    <td>Power Unit</td>
                    <td>Mercedes</td>
                </tr>
                <tr>
                    <td>First Team Entry</td>
                    <td>1970</td>
                </tr>
                <tr>
                    <td>World Championships</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>Highest Race Finish</td>
                    <td>1 (x121)</td>
                </tr>
                <tr>
                    <td>Pole Positions</td>
                    <td>134</td>
                </tr>
                <tr>
                    <td>Fastest Laps</td>
                    <td>97</td>
                </tr>
                <tr>
                    <td>Podiums</td>
                    <td>134</td>
                </tr>
            </table>
        </div>
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

</body>
</html>