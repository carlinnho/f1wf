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
    <title>F1WF | Equipos | Hass</title>
    <link rel="stylesheet" href="../../css/EquiposCSS/haas.css">
</head>

<body>
    <header class="header">
                <b>F1WF</b>
        <?php if ($_SESSION['logeado']) { ?>
            <div class="NuevoUsuario logueado">Bienvenido <?php echo htmlspecialchars($_SESSION['usuario']); ?> </div>
            <div class="Registrarse"><a href="../../../api/cerrar.php">Cerrar</a></div>
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
        <li><a href="../../index.php">HOME</a></li>
        <li><a href="../Corredores.php">CORREDORES</a></li>
        <li><a href="../equipos.php">EQUIPOS</a></li>
        <li><a href="../info.php">INFORMACIÓN</a></li>
        <li><a href="../menuQuiz.php">HACER QUIZ</a></li>
        <li><a href="../menuPredecir.php">PREDECIR</a></li>
        <li><a href="../Administrativa.php">MI PERFIL</a></li>
    <?php } else { ?>
        <li><a href="../../index.php">HOME</a></li>
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
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153582/Haas_ak3duf.png" alt="Haas Logo" class="logo-img">
    </div>
    <div class="titulo">
        <label class="titulo-linea">MONEYGRAM</label>
        <label class="titulo-linea">HAAS F1</label>
    </div>
    </section>

    <section class="informacion">
    <div class="tituloInfo">HISTORIA</div>
    <div class="texto">
        <label>Haas F1 Team, fundado por Gene Haas en 2016, entró en la Fórmula 1 con el modelo de negocio</label>
        <label>"comprar en vez de construir". Han tenido altibajos en resultados, pero han sido un equipo estable en la</label>
        <label>parrilla, asociándose con Ferrari para motores y componentes.</label>
    </div>
    <iframe class="video1" src="https://www.youtube.com/embed/oEMi8g9-ypE?si=k5-nBKJgU2515JGD"
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
                        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153585/haas1_s51uvx.avif" alt="">
                    </li>
                    <li>
                        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153585/haas2_simhz4.avif" alt="">
                    </li>
                    <li>
                        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153585/haas3_tnwx6u.avif" alt="">
                    </li>
                    <li>
                        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153585/haas4_zd4v5t.avif" alt="">
                    </li>
                    <li>
                        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153585/haas5_lwcsu0.avif" alt="">
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
                    <td>MoneyGram Haas F1 Team</td>
                </tr>
                <tr>
                    <td>Base</td>
                    <td>Kannapolis, United States</td>
                </tr>
                <tr>
                    <td>Team Chief</td>
                    <td>Ayao Komatsu</td>
                </tr>
                <tr>
                    <td>Technical Chief</td>
                    <td>Andrea De Zordo</td>
                </tr>
                <tr>
                    <td>Chassis</td>
                    <td>VF-25</td>
                </tr>
                <tr>
                    <td>Power Unit</td>
                    <td>Ferrari</td>
                </tr>
                <tr>
                    <td>First Team Entry</td>
                    <td>2016</td>
                </tr>
                <tr>
                    <td>World Championships</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Highest Race Finish</td>
                    <td>4 (x1)</td>
                </tr>
                <tr>
                    <td>Pole Positions</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Fastest Laps</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Podiums</td>
                    <td>0</td>
                </tr>
            </table>
        </div>
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