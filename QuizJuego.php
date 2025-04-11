<?php
session_start();
if (!isset($_SESSION['logeado']))
    $_SESSION['logeado']=false;


if (!$_SESSION['logeado'])
    header('Location: ingresar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<link rel="icon" type="image/png" href="awebo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1WF | Quiz</title>
    <link rel="stylesheet" href="estilosCSS/QuizJuego.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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

        <div class="start_btn"><button>INICIAR QUIZ</button>

        </div>

        <div class="info_box">
            <div class="info-title"><span>Reglas del cuestionario</span></div>
            <div class="info-list">
                <div class="info">1. Una vez que seleccione su respuesta, no se puede deshacer.</div>
                <div class="info">2. No puedes salir del Quiz mientras estás jugando.</div>
                <div class="info">3. Obtendrás puntos en base a tus respuestas correctas.</div>
            </div>
            <div class="buttons">
                <button class="quit">Salir</button>
                <button class="restart">Continuar</button>
            </div>

        </div>

        <div class="quiz_box">
            <header>
                <div class="title">QUIZ F1WF</div>
            </header>
            <section>
                <div class="que_text">
                    <!--Preguntas del JS-->
                </div>
                <div class="option_list">
                    <!--Opciones del JS-->
                </div>
            </section>

            <footer>
                <div class="total_que">
                    <!--Conteo-->
                </div>
                <button class="next_btn">Siguiente</button>
            </footer>
        </div>

        <div class="result_box">
            <div class="icon">

            </div>
            <div class="complete_text">¡Has completado el cuestionario!</div>
            <div class="score_text">
                <!--Score-->
            </div>
            <div class="buttons">
                <button class="restart">Repetir</button>
                <button class="quit">Salir </button>
            </div>
        </div>
        <input type="hidden" id="idusuario" name="idusuario" value="<?php echo $_SESSION['idusuario'];?>"/>
        <script src="JAVAS/preguntas.js"></script>

        <script src="JAVAS/script.js"></script>


</body>

</html>