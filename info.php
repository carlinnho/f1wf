<?php
session_start();
if (!isset($_SESSION['logeado']))
    $_SESSION['logeado'] = false;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="awebo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1WF | Informacion</title>
    <link rel="stylesheet" href="estilosCSS/equipos.css">
    <link rel="stylesheet" href="estilosCSS/info.css">
</head>
<body>
    <header class="header">
        <b>F1WF</b>
        <?php if ($_SESSION['logeado']) { ?>
            <div class="NuevoUsuario logueado">Bienvenido <?php echo htmlspecialchars($_SESSION['usuario']); ?></div>
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
            <li><a href="index.php">HOME</a></li>
            <li><a href="Corredores.php">CORREDORES</a></li>
            <li><a href="equipos.php">EQUIPOS</a></li>
            <li><a href="info.php">INFORMACIÓN</a></li>
            <li><a href="menuQuiz.php">HACER QUIZ</a></li>
            <li><a href="menuPredecir.php">PREDECIR</a></li>
            <?php if ($_SESSION['logeado']) { ?>
                <li><a href="Administrativa.php">MI PERFIL</a></li>
            <?php } ?>
        </ul>
    </nav>

    <section class="presentacion">
        <div class="contenido">
            <div class="titulo">APRENDE MÁS DE LA FORMULA 1</div>
            <div class="textoMenu">
                <label>Bienvenido a nuestra sección dedicada a la Fórmula 1,</label><br>
                <label>donde podras descubrir todo sobre los corredores historicos, circuitos emocionantes</label><br>
                <label>y las mejores jugadas</label>
            </div>
        </div>
    </section>

    <div class="contenedor-principal">
        <section class="seccionP">
            <div class="tituloP">Corredores históricos</div>
            <div class="containerP">
                <div class="textoP">
                    <p>
                    La Fórmula 1 ha sido testigo de pilotos legendarios como Michael Schumacher y Lewis Hamilton, ambos con siete títulos mundiales, junto a Ayrton Senna, Alain Prost y Juan Manuel Fangio, quienes dejaron huellas imborrables con su habilidad y determinación en la pista. Su legado no solo incluye múltiples campeonatos, sino también inspiración perdurable para futuras generaciones de aficionados y corredores en el mundo del automovilismo.
                    </p>
                </div>
                <div class="imagen">
                    <img src="imagenesInformación/Corredores.jpg" alt="Corredores históricos" class="imagen">
                </div>
            </div>
        </section>

        <section class="seccionP">
            <div class="tituloP">Circuitos</div>
            <div class="containerP">
                <div class="textoP">
                    <p>
                    La Fórmula 1 cuenta con circuitos legendarios como Mónaco, con calles estrechas y curvas desafiantes; Suzuka, en Japón, conocido por la "S" y la curva 130R; Spa-Francorchamps en Bélgica, con Eau Rouge y Raidillon; y Silverstone en el Reino Unido, cuna del deporte. Estos circuitos no solo son escenarios de carreras emocionantes, sino también testigos de momentos históricos que han definido la F1 a través de su diseño desafiante y su impacto cultural y deportivo.
                    </p>
                </div>
                <div class="imagen">
                    <img src="imagenesInformación/Circuito de Monaco.jpg" alt="Circuito de Mónaco" class="imagen">
                </div>
            </div>
        </section>

        <section class="seccionP">
            <div class="tituloP">Equipos Históricos</div>
            <div class="containerP">
                <div class="textoP">
                    <p>
                    Scuderia Ferrari, fundado en 1929, es el equipo más antiguo y exitoso de la Fórmula 1, conocido por su pasión y color rojo icónico. McLaren, desde 1963, destaca por su innovación tecnológica y pilotos legendarios como Ayrton Senna. Williams, fundado en 1977, ha sido un competidor formidable con múltiples campeonatos. Mercedes, con una rica historia en automovilismo, domina la era moderna con tecnología avanzada y pilotos como Lewis Hamilton. Estos equipos no solo han competido por victorias, sino que también han dejado una marca indeleble en el deporte.
                    </p>
                </div>
                <div class="imagen">
                    <img src="imagenesInformación/Circuito historico.png" alt="Circuito histórico" class="imagen">
                </div>
            </div>
        </section>

        <section class="seccionP">
            <div class="tituloP">Momentos emocionantes</div>
            <div class="containerP">
                <div class="textoP">
                    <p>
                        La Fórmula 1 está llena de momentos emocionantes que han dejado una marca indeleble en la historia del deporte.
                        Desde adelantamientos de último segundo hasta sorpresas bajo la lluvia, cada carrera es una montaña rusa de emociones.
                        Momentos como la remontada de Ayrton Senna en el Gran Premio de Europa en 1993 o el duelo épico entre Lewis Hamilton y Nico Rosberg en el Gran Premio de Bélgica en 2014 son solo algunos ejemplos de la intensidad y la emoción que define a la Fórmula 1.
                        Estos momentos no solo hacen latir el corazón de los aficionados, sino que también encapsulan la intriga y la pasión que hacen de este deporte uno de los más emocionantes del mundo.
                    </p>
                </div>
                <div class="imagen">
                    <img src="imagenesInformación/MomentosAyrtonSenna.jpg" alt="Momentos Ayrton Senna" class="imagen">
                </div>
            </div>
        </section>
    </div>

    <footer class="footer"></footer>
</body>
</html>
