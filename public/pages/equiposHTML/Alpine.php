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
    <title>F1WF | Equipos | Alpine</title>
    <link rel="stylesheet" href="../../css/EquiposCSS/Alpine.css">
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
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153581/Alpine_flv0tc.png" alt="Alpine Logo" class="logo-img">
    </div>
    <div class="titulo">
        <label class="titulo-linea">BWT ALPINE</label>
        <label class="titulo-linea">F1 TEAM</label>
    </div>
    </section>

    <section class="informacion">
    <div class="tituloInfo">HISTORIA</div>
    <div class="texto">
        <label>Alpine, fundado en 1955, incursionó en la Fórmula 1 como equipo constructor en 2021, sucediendo a</label>
        <label>Renault. Heredero del equipo campeón de los años 2005 y 2006, aspira a revivir ese éxito con pilotos</label>
        <label>como Fernando Alonso y Esteban Ocon,</label>
    </div>
    <iframe class="video1" src="https://www.youtube.com/embed/q59YYS0BC3Y?si=8eS3wF0OgfpNFdYH"
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
                        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153583/alpine1_j6gupb.avif" alt="">
                    </li>
                    <li>
                        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153583/alpine2_fzybab.avif" alt="">
                    </li>
                    <li>
                        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153583/alpine3_rritx5.avif" alt="">
                    </li>
                    <li>
                        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153584/alpine4_wvydjt.avif" alt="">
                    </li>
                    <li>
                        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752153584/alpine5_zlc5il.avif" alt="">
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
                    <td>BWT Alpine F1 Team</td>
                </tr>
                <tr>
                    <td>Base</td>
                    <td>Enstone, United Kingdom</td>
                </tr>
                <tr>
                    <td>Team Chief</td>
                    <td>Flavio Briatore</td>
                </tr>
                <tr>
                    <td>Technical Chief</td>
                    <td>David Sanchez</td>
                </tr>
                <tr>
                    <td>Chassis</td>
                    <td>A525</td>
                </tr>
                <tr>
                    <td>Power Unit</td>
                    <td>Renault</td>
                </tr>
                <tr>
                    <td>First Team Entry</td>
                    <td>1986</td>
                </tr>
                <tr>
                    <td>World Championships</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Highest Race Finish</td>
                    <td>1 (x21)</td>
                </tr>
                <tr>
                    <td>Pole Positions</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Fastest Laps</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>Podiums</td>
                    <td>60</td>
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