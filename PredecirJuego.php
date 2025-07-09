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
<link rel="icon" type="image/png" href="https://drive.google.com/thumbnail?id=1duv5P3V4NFqqMnfiMjl3RoF9-DN_0_4j">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1WF | Predice tu campeon</title>
    <link rel="stylesheet" href="estilosCSS/PredecirJuego.css">
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

    <div class="tituloPredecirJuego">
        <b>PREDICE TU CAMPEON</b>
    </div>

    <form action="F1apis/guardar_prediccion.php" method="post">
        <div class="seleccionJornada">
            <p>Escoge la Jornada:</p>
            <select id="Jornada" name="Jornada" required>
                <option value="">Seleccione una Jornada</option>
                <?php
                require 'F1apis/conexion.php';
                $result = $conexion->query("SELECT ID, jornadas FROM jornada");
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['ID'] . '">' . $row['jornadas'] . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="podio">
            <div class="cuadroPlata">
                <div class="cbxPlata">
                    <select id="CorredorPlata" name="CorredorPlata" required>
                        <option value="">Seleccione un corredor</option>
                        <?php
                        $result = $conexion->query("SELECT ID, nombre FROM corredores");
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['ID'] . '">' . $row['nombre'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="cuadroOro">
                <div class="cbxOro">
                    <select id="CorredorOro" name="CorredorOro" required>
                        <option value="">Seleccione un corredor</option>
                        <?php
                        $result = $conexion->query("SELECT ID, nombre FROM corredores");
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['ID'] . '">' . $row['nombre'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="cuadroBronce">
                <div class="cbxBronce">
                    <select id="CorredorBronce" name="CorredorBronce" required>
                        <option value="">Seleccione un corredor</option>
                        <?php
                        $result = $conexion->query("SELECT ID, nombre FROM corredores");
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['ID'] . '">' . $row['nombre'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <button class="boton-resultados" id="button">
            <p>ENVIAR</p>
        </button>
    </form>

    <script>
        const button = document.getElementById('button');
        button.addEventListener('click', (e) => {
            const Jornada = document.getElementById('Jornada').value;
            const CorredorBronce = document.getElementById('CorredorBronce').value;
            const CorredorPlata = document.getElementById('CorredorPlata').value;
            const CorredorOro = document.getElementById('CorredorOro').value;

            if (!Jornada || !CorredorBronce || !CorredorPlata || !CorredorOro) {
                e.preventDefault();
                alert("Por favor, seleccione todas las opciones.");
            }
        });
    </script>
    <footer class="footer">
    </footer>
</body>
</html>

