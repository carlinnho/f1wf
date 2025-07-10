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
    <title>F1WF | Corredores</title>
    <link rel="stylesheet" href="../css/corredores.css">
</head>
<body>
    <header class="header">
    <b>F1WF</b>
        <?php if ($_SESSION['logeado']) { ?>
            <div class="NuevoUsuario logueado">Bienvenido <?php echo htmlspecialchars($_SESSION['usuario']); ?> </div>
            <div class="Registrarse"><a href="../../api/cerrar.php">Cerrar</a></div>
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
        <li><a href="../index.php">HOME</a></li>
        <li><a href="Corredores.php">CORREDORES</a></li>
        <li><a href="equipos.php">EQUIPOS</a></li>
        <li><a href="info.php">INFORMACIÓN</a></li>
        <li><a href="menuQuiz.php">HACER QUIZ</a></li>
        <li><a href="menuPredecir.php">PREDECIR</a></li>
        <li><a href="Administrativa.php">MI PERFIL</a></li>
    <?php } else { ?>
        <li><a href="../index.php">HOME</a></li>
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
        <div class="titulo">NUESTROS CORREDORES</div>
            <div class="textoMenu">
                <label>Para la temporada 2025 hay un total de 20</label> <br>
                <label>corredores compitiendo por el gran premio</label> <br>
                <label>¡CONOCE A NUESTROS CORREDORES!</label>
            </div>
        </div>
    </section>

    <section class="corredores">
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165074/MaxVerstappen_sw1jce.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Max Vestappen</b></h4>
            <p>Red bull Racing</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165079/YukiTsunoda-RedBull_xbjqqj.png" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Yuki Tsunoda</b></h4>
            <p>Red Bull Racing</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165082/charlesLLecrec_egnsgy.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Charles Lecrerc</b></h4>
            <p>Ferrari</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165072/LewisHamilton-Ferrari_xv2o5m.png" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Lewis Hamilton</b></h4>
            <p>Ferrari</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165070/Kimi_Antonelli_yeruf2.png" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Kimi Antonelli</b></h4>
            <p>Mercedes</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165087/GeorgeRussell_joqhmy.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>George Russell</b></h4>
            <p>Mercedes</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165086/FernandoAlonso_smfxey.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Fernando Alonso</b></h4>
            <p>Aston Martin</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165070/LanceStroll_d1rhka.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Lance Stroll</b></h4>
            <p>Aston Martin</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165076/OscarPiastri_g2bc2j.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Oscar Piastri</b></h4>
            <p>McLaren</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165071/LandoNorris_sr0q5g.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Lando Norris</b></h4>
            <p>McLaren</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165073/Liam_Lawson_pyke25.png" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Liam Lawson</b></h4>
            <p>RB</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165069/Isack_Hadjar_zrf7dd.png" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Isack Hadjar</b></h4>
            <p>RB</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165076/PierreGasly_cocdia.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Pierre Gasly</b></h4>
            <p>Alpine</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165085/EstebanOcon_ipfrcl.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Esteban Ocon</b></h4>
            <p>Alpine</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165075/NicoHulkenberg_bousoe.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Nico Hulkenberg</b></h4>
            <p>Haas</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165070/kevinMagnusson_oguadz.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Kevin Magnussen</b></h4>
            <p>Haas</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165079/Zhou_ocj4hf.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Zhou Guanyu</b></h4>
            <p>Alfa Romeo</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165077/ValtteriBottas_dccrxy.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Valtteri Bottas</b></h4>
            <p>Alfa Romeo</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165080/AlexanderAlbon_sv3kga.avif" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Alexander Albon</b></h4>
            <p>Williams</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://res.cloudinary.com/dl3o5tx2u/image/upload/v1752165081/Carlos_Sainz_n9mro9.png" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Carlos Sainz</b></h4>
            <p>Williams</p>
        </div>
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