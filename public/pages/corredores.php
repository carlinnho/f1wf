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
        <img src="https://drive.google.com/thumbnail?id=1jcLVDGlxPSfSLS4LVaBjtRR2_Rkzrody" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Max Vestappen</b></h4>
            <p>Red bull Racing</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1GKJwLcpd0JbltTNrC-sjJf0KM8sJeo6M" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Yuki Tsunoda</b></h4>
            <p>Red Bull Racing</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=11e8rqrv8O4MmfbPDU8Ayli3lBQ6nNzq4" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Charles Lecrerc</b></h4>
            <p>Ferrari</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1zYkgEK3YN9tB2dPqjNE0bmYbhtrjx2Hu" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Lewis Hamilton</b></h4>
            <p>Ferrari</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1I0yXFD7RZSriwJ91bwQfBFjkWsyqUt6Q" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Kimi Antonelli</b></h4>
            <p>Mercedes</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1wDa4u7tDs5QNRb1dEE8FAx0gSfO3LMoy" alt="Avatar" class="img">
        <div class="container">
            <h4><b>George Russell</b></h4>
            <p>Mercedes</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1ox05DfpC-l82oS6aZnKWV-qWuqUnN8Yi" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Fernando Alonso</b></h4>
            <p>Aston Martin</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1MN-69UUo_JmUHNx9hBaQS0YvkNxHpegb" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Lance Stroll</b></h4>
            <p>Aston Martin</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1-dinDOQBRWS3UI2xYo8tjuMmJHCGtjaT" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Oscar Piastri</b></h4>
            <p>McLaren</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1ZglNC3LP223cwLgcuYHZEMf-p2dvdNgP" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Lando Norris</b></h4>
            <p>McLaren</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1vONyRf-yrU9lyxHKvQZbnf12oH5epmJZ" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Liam Lawson</b></h4>
            <p>RB</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1oFFf7Gmtw_8UepWVjcNf9uoF_X5k2j2B" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Isack Hadjar</b></h4>
            <p>RB</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1zR0yFRGvlXCXoYoyzBhImpQO6_QXIus_" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Pierre Gasly</b></h4>
            <p>Alpine</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=15c0_efnjQX7C_9g3eSn7Mra8-GCTTbJY" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Esteban Ocon</b></h4>
            <p>Alpine</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1SS6C-1wH-a6AGciykr0DDzRT9WUtAJN5" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Nico Hulkenberg</b></h4>
            <p>Haas</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=16aEfYh4OhGFXpWDpKlaE1DKYzVMCwlR6" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Kevin Magnussen</b></h4>
            <p>Haas</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1J-P15CUwjYJ1E6-6SXJgHp_USJ-zq6R4" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Zhou Guanyu</b></h4>
            <p>Alfa Romeo</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1JJCjIyryB3R3kHgy6Y-yvLfy4QmoEZsE" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Valtteri Bottas</b></h4>
            <p>Alfa Romeo</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1mGKtLunI7C3P0jgJR-lbjpBzSNdj_igf" alt="Avatar" class="img">
        <div class="container">
            <h4><b>Alexander Albon</b></h4>
            <p>Williams</p>
        </div>
    </div>
    <div class="corredor">
        <img src="https://drive.google.com/thumbnail?id=1HRsYq5P5WEEYqEQTYYD_hV2p-2xYH0Rz" alt="Avatar" class="img">
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