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
    <title>F1WF | Equipos | Kick Sauber</title>
    <link rel="stylesheet" href="../../css/EquiposCSS/Kick.css">
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
        <img src="../imagenesEquipos/KickSauber.png" alt="Kick Sauber Logo" class="logo-img">
    </div>
    <div class="titulo">
        <label class="titulo-linea">Stake F1</label>
        <label class="titulo-linea">KICK SAUBER</label>
    </div>
    </section>


    <section class="informacion">
    <div class="tituloInfo">HISTORIA</div>
    <div class="texto">
        <label>Peter Sauber fundó el equipo en 1970, debutando en F1 en 1993. Aunque nunca ganaron un título,</label>
        <label>fueron una cantera de talentos. Fueron rebautizados como Alfa Romeo Racing en 2019, continuando su</label>
        <label>legado en la F1 como parte del equipo suizo-italiano.</label>
    </div>
    <iframe class="video1" src="https://www.youtube.com/embed/_omlQl8EaFo?si=o1IlkmnIVBbOcu0L"
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
                        <img src="https://drive.google.com/thumbnail?id=1YUUGcWUTON_FGnvSIG5zp1cGcWBGJFDy" alt="">
                    </li>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1DSl6Aj58iNU4zirpgvZZrsMPTIOuRAYe" alt="">
                    </li>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1Y-rjybrBKgUfmgQtPTt-1LKKpEKHH4ds" alt="">
                    </li>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1l6fl8M6jeW5zuEVCXa_tRwXFI2BIGqBl" alt="">
                    </li>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1HI1GWMBsM_HTayvuX_-6lfGYazzebEdN" alt="">
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
                    <td>Stake F1 Team Kick Sauber </td>
                </tr>
                <tr>
                    <td>Base</td>
                    <td>Hinwil, Switzerland</td>
                </tr>
                <tr>
                    <td>Team Chief</td>
                    <td>Jonathan Wheatley</td>
                </tr>
                <tr>
                    <td>Technical Chief</td>
                    <td>James Key</td>
                </tr>
                <tr>
                    <td>Chassis</td>
                    <td>C45</td>
                </tr>
                <tr>
                    <td>Power Unit</td>
                    <td>Ferrari</td>
                </tr>
                <tr>
                    <td>First Team Entry</td>
                    <td>1993</td>
                </tr>
                <tr>
                    <td>World Championships</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Highest Race Finish</td>
                    <td>1 (x1)</td>
                </tr>
                <tr>
                    <td>Pole Positions</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Fastest Laps</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>Podiums</td>
                    <td>26</td>
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