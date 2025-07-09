<?php
session_start();
if (!isset($_SESSION['logeado']))
    $_SESSION['logeado']=false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<link rel="icon" type="image/png" href="https://drive.google.com/thumbnail?id=1duv5P3V4NFqqMnfiMjl3RoF9-DN_0_4j">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1WF | Equipos | Ferrari</title>
    <link rel="stylesheet" href="../EquiposCSS/Ferrari.css">
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
        <img src="https://drive.google.com/thumbnail?id=1WT-b1xWeETCv9mDnmgbLzbvTm_Igl-6t" alt="Ferrari Logo" class="logo-img">
    </div>
    <div class="titulo">
        <label class="titulo-linea">SCUDERIA</label>
        <label class="titulo-linea">FERRARI</label>
    </div>
    </section>


    <section class="informacion">
    <div class="tituloInfo">HISTORIA</div>
    <div class="texto">
        <label>La escudería Ferrari, fundada en 1950, es una leyenda de la Fórmula 1. Con 16 títulos de
        constructores y</label>
        <label>15 de pilotos, ha sido un pilar del deporte. Pilotos legendarios como Schumacher y Lauda han</label>
        <label>competido bajo su icónico color rojo, haciendo de Ferrari un símbolo de velocidad y pasión.</label>
    </div>
    <video src="../Videos/Ferrari.mp4" class="video1" controls  height="600px"></video>
    </section>

    <section class="imagenes">
        <h1>GALERIA DE IMAGENES</h1>
        <div class="contenedor1">
            <div class="slider">
                <ul>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1_xdqMdkag5Ee1HyT9zZOYN_zyh4W_sLK" alt="">
                    </li>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1HrwLdvX4ALPmZV6drplgzJ-EuCRQzd3e" alt="">
                    </li>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1n5ItheANWKfStxFB3TOL-fR5T8TClaix" alt="">
                    </li>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1TH5IrEIBQm2NsEFsXjB2eArdCb0Q967S" alt="">
                    </li>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1x4xwOiX6m5bfV4vqi4nYft7UdVCR8IoQ" alt="">
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
                    <td>Scuderia Ferrari HP</td>
                </tr>
                <tr>
                    <td>Base</td>
                    <td>Maranello, Italy</td>
                </tr>
                <tr>
                    <td>Team Chief</td>
                    <td>Frédéric Vasseur</td>
                </tr>
                <tr>
                    <td>Technical Chief</td>
                    <td>Loic Serra / Enrico Gualtieri</td>
                </tr>
                <tr>
                    <td>Chassis</td>
                    <td>SF-25</td>
                </tr>
                <tr>
                    <td>Power Unit</td>
                    <td>Ferrari</td>
                </tr>
                <tr>
                    <td>First Team Entry</td>
                    <td>1950</td>
                </tr>
                <tr>
                    <td>World Championships</td>
                    <td>16</td>
                </tr>
                <tr>
                    <td>Highest Race Finish</td>
                    <td>1 (x249)</td>
                </tr>
                <tr>
                    <td>Pole Positions</td>
                    <td>253</td>
                </tr>
                <tr>
                    <td>Fastest Laps</td>
                    <td>261</td>
                </tr>
                <tr>
                    <td>Podiums</td>
                    <td>636</td>
                </tr>
            </table>
        </div>
    </section>

    <footer class="footer">
  <div class="footer-container">
    <!-- Columna 1: Logo -->
    <div class="footer-col logo-col">
      <img src="https://drive.google.com/thumbnail?id=1duv5P3V4NFqqMnfiMjl3RoF9-DN_0_4j" alt="Logo F1" class="footer-logo">
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