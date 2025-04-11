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
    <title>F1WF | Equipos | Kick Sauber</title>
    <link rel="stylesheet" href="../EquiposCSS/Kick.css">
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
                        <img src="../imagenesferrari/kick1.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/kick2.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/kick3.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/kick4.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/kick5.avif" alt="">
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
                    <td>Alessandro Alunni Bravi</td>
                </tr>
                <tr>
                    <td>Technical Chief</td>
                    <td>James Key</td>
                </tr>
                <tr>
                    <td>Chassis</td>
                    <td>C44</td>
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
            </table>
        </div>
    </section>

    <footer class="footer">

    </footer>
</body>

</html>