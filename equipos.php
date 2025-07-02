<?php
session_start();
if (!isset($_SESSION['logeado']))
    $_SESSION['logeado'] = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="awebo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1WF | Equipos</title>
    <link rel="stylesheet" href="estilosCSS/equipos.css">
</head>

<body>
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
            <div class="titulo">CONOCE A NUESTROS EQUIPOS</div>
            <div class="textoMenu">
                <label>Para esta temporada 2024</label> <br>
                <label>on 10 equipos que lucharan</label> <br>
                <label>por ganar el premio de esta edicion de la Formula 1</label>
            </div>
        </div>
    </section>

    <section class="equipos">
        <a href="equiposHTML/Kick.php" class="equipo">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="imagenesEquipos/KickSauber.png" alt="" class="imagen">
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Stake F1 Team Kick Sauber</p>
                    </div>
                </div>
            </div>
        </a>


        <a href="equiposHTML/Ferrari.php" class="equipo">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="imagenesEquipos/ferrari.jpg" alt="" class="imagen">
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Scuderia Ferrari</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="equiposHTML/Mclaren.php" class="equipo">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="imagenesEquipos/McLaren.png" alt="" class="imagen">
                    </div>
                    <div class="flip-card-back">
                        <p class="title">McLaren Formula 1 Team</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="equiposHTML/Alpine.php" class="equipo">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="imagenesEquipos/Alpine.png" alt="" class="imagen">
                    </div>
                    <div class="flip-card-back">
                        <p class="title">BWT Alpine F1 Team</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="equiposHTML/mercedes.php" class="equipo">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="imagenesEquipos/Mercedes.png" alt="" class="imagen">
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Mercedes-AMG PETRONAS F1 Team</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="equiposHTML/haas.php" class="equipo">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="imagenesEquipos/Haas.png" alt="" class="imagen">
                    </div>
                    <div class="flip-card-back">
                        <p class="title">MoneyGram Haas F1 Team</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="equiposHTML/williams.php" class="equipo">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="imagenesEquipos/Williams.png" alt="" class="imagen">
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Williams Racing</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="equiposHTML/RedBull.php" class="equipo">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="imagenesEquipos/RedBull.jpg" alt="" class="imagen">
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Oracle Red Bull Racing</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="equiposHTML/astonmartin.php" class="equipo">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="imagenesEquipos/astonMartin.jpg" alt="" class="imagen">
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Aston Martin Aramco F1 Team</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="equiposHTML/RB.php" class="equipo">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="imagenesEquipos/RB.avif" alt="" class="imagen">
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Visa Cash RB Formula 1 Team</p>
                    </div>
                </div>
            </div>
        </a>


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