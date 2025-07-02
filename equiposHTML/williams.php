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
    <title>F1WF | Equipos | Williams</title>
    <link rel="stylesheet" href="../EquiposCSS/williams.css">
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
        <img src="../imagenesEquipos/Williams.png" alt="Kick Sauber Logo" class="logo-img">
    </div>
    <div class="titulo">
        <label class="titulo-linea">WILLIAMS</label>
        <label class="titulo-linea">RACING</label>
    </div>
    </section>

    <section class="informacion">
    <div class="tituloInfo">HISTORIA</div>
    <div class="texto">
        <label>Williams Racing, fundado en 1977 por Frank Williams y Patrick Head, ha sido uno de los equipos más</label>
        <label>exitosos en la Fórmula 1, ganando múltiples campeonatos. En años recientes, ha luchado por mantener</label>
        <label>su competitividad en la parrilla.</label>
    </div>
    <iframe class="video1" src="https://www.youtube.com/embed/OnDHuO7Ppkw?si=KSCLRKCOheAIAD9L"
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
                        <img src="../imagenesferrari/williams1.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/williams2.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/williams3.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/williams4.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/williams5.avif" alt="">
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
                    <td>Atlassian Williams Racing</td>
                </tr>
                <tr>
                    <td>Base</td>
                    <td>Grove, United Kingdom</td>
                </tr>
                <tr>
                    <td>Team Chief</td>
                    <td>James Vowles</td>
                </tr>
                <tr>
                    <td>Technical Chief</td>
                    <td>Pat Fry</td>
                </tr>
                <tr>
                    <td>Chassis</td>
                    <td>FW47</td>
                </tr>
                <tr>
                    <td>Power Unit</td>
                    <td>Mercedes</td>
                </tr>
                <tr>
                    <td>First Team Entry</td>
                    <td>1978</td>
                </tr>
                <tr>
                    <td>World Championships</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>Highest Race Finish</td>
                    <td>1 (x114)</td>
                </tr>
                <tr>
                    <td>Pole Positions</td>
                    <td>128</td>
                </tr>
                <tr>
                    <td>Fastest Laps</td>
                    <td>133</td>
                </tr>
                <tr>
                    <td>Podiums</td>
                    <td>243</td>
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