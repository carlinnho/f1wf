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
    <title>F1WF | Equipos | Red Bull Racing</title>
    <link rel="stylesheet" href="../EquiposCSS/RedBUll.css">
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
        <img src="https://drive.google.com/thumbnail?id=1E7-qHIJV8rTDLwNdtzHY0s7FWIs3NthQ" alt="Kick Sauber Logo" class="logo-img">
    </div>
    <div class="titulo">
        <label class="titulo-linea">RED BULL</label>
        <label class="titulo-linea">RACING</label>
    </div>
    </section>

    <section class="informacion">
    <div class="tituloInfo">HISTORIA</div>
    <div class="texto">
        <label>Red Bull Racing es un equipo de Fórmula 1 fundado en 2005 por la compañía de bebidas energéticas.</label>
        <label>Ha ganado cuatro campeonatos de constructores y pilotos con Sebastian Vettel entre 2010 y 2013.</label>
        <label>Desde entonces, ha sido uno de los principales competidores en la categoría.</label>
    </div>
    <iframe class="video1" src="https://www.youtube.com/embed/hlIOIhBrjEk?si=9NxB-dlQuiwgPH0-"
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
                        <img src="https://drive.google.com/thumbnail?id=1Ud01LzWc2aUnzKPlyTUdZ96Wcou3qCQE" alt="">
                    </li>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1gUITAxY8Prus67d3A6BVbIN0lblIcECS" alt="">
                    </li>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1zauImtrhoBWhRmroGCdZg6dD8xwbYj1t" alt="">
                    </li>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1Y9_vNtu912BnxPbiYmDjk5l6pz3xhiHU" alt="">
                    </li>
                    <li>
                        <img src="https://drive.google.com/thumbnail?id=1GlVTS1NvksRWUL8A_jMTU9qQXqViH7iT" alt="">
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
                    <td>Oracle Red Bull Racing</td>
                </tr>
                <tr>
                    <td>Base</td>
                    <td>Milton Keynes, United Kingdom</td>
                </tr>
                <tr>
                    <td>Team Chief</td>
                    <td>Christian Horner</td>
                </tr>
                <tr>
                    <td>Technical Chief</td>
                    <td>Pierre Waché</td>
                </tr>
                <tr>
                    <td>Chassis</td>
                    <td>RB21</td>
                </tr>
                <tr>
                    <td>Power Unit</td>
                    <td>Honda RBPT</td>
                </tr>
                <tr>
                    <td>First Team Entry</td>
                    <td>1997</td>
                </tr>
                <tr>
                    <td>World Championships</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>Highest Race Finish</td>
                    <td>1 (x124)</td>
                </tr>
                <tr>
                    <td>Pole Positions</td>
                    <td>106</td>
                </tr>
                <tr>
                    <td>Fastest Laps</td>
                    <td>97</td>
                </tr>
                 <tr>
                    <td>Podiums</td>
                    <td>223</td>
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