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
        <img src="../imagenesEquipos/ferrari.jpg" alt="Ferrari Logo" class="logo-img">
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
                        <img src="../imagenesferrari/4.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/1.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/2.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/3.avif" alt="">
                    </li>
                    <li>
                        <img src="../imagenesferrari/7.avif" alt="">
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
                    <td>Enrico Cardile / Enrico Gualtieri</td>
                </tr>
                <tr>
                    <td>Chassis</td>
                    <td>SF-24</td>
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
                    <td>1 (x245)</td>
                </tr>
                <tr>
                    <td>Pole Positions</td>
                    <td>249</td>
                </tr>
                <tr>
                    <td>Fastest Laps</td>
                    <td>261</td>
                </tr>
            </table>
        </div>
    </section>

    <footer class="footer">

    </footer>
</body>

</html>