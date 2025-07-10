<?php
session_start();
if (!isset($_SESSION['logeado']))
  $_SESSION['logeado'] = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="https://drive.google.com/thumbnail?id=1duv5P3V4NFqqMnfiMjl3RoF9-DN_0_4j">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>F1WF | Inicio</title>
  <link rel="stylesheet" href="css/index.css">

</head>

<body>

  <div id="loader" class="loader">
    <svg viewBox="25 25 50 50">
      <circle r="20" cy="50" cx="50"></circle>
    </svg>
  </div>

  <header class="header">
    <b>F1WF</b>
    <?php if ($_SESSION['logeado']) { ?>
      <div class="NuevoUsuario logueado">Bienvenido <?php echo htmlspecialchars($_SESSION['usuario']); ?> </div>
      <div class="Registrarse"><a href="../api/cerrar.php">Cerrar</a></div>
    <?php } else { ?>
      <div class="NuevoUsuario"><a href="pages/registro.php">Registro</a></div>
      <div class="Registrarse"><a href="pages/Ingresar.php">Ingresar</a></div>
    <?php } ?>
  </header>

  <nav class="nav">
    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <label for="menu-toggle" class="menu-icon">&#9776;</label>
    <ul class="barnav">
      <?php if ($_SESSION['logeado']) { ?>
        <li><a href="index.php">HOME</a></li>
        <li><a href="pages/Corredores.php">CORREDORES</a></li>
        <li><a href="pages/equipos.php">EQUIPOS</a></li>
        <li><a href="pages/info.php">INFORMACIÓN</a></li>
        <li><a href="pages/menuQuiz.php">HACER QUIZ</a></li>
        <li><a href="pages/menuPredecir.php">PREDECIR</a></li>
        <li><a href="pages/Administrativa.php">MI PERFIL</a></li>
      <?php } else { ?>
        <li><a href="pages/index.php">HOME</a></li>
        <li><a href="pages/Corredores.php">CORREDORES</a></li>
        <li><a href="pages/equipos.php">EQUIPOS</a></li>
        <li><a href="pages/info.php">INFORMACIÓN</a></li>
        <li><a href="pages/menuQuiz.php">HACER QUIZ</a></li>
        <li><a href="pages/menuPredecir.php">PREDECIR</a></li>
      <?php } ?>
    </ul>
  </nav>

  <section class="presentacion">
    <div class="contenido">
      <div class="titulo">FORMULA 1 WEB FANS</div>
      <div class="textoMenu">
        <label>Una pagina hecha por Fans para los Fans,</label> <br>
        <label>descubre más acerca de este apasionado deporte</label> <br>
        <label>y no te pierdas de las proximas carreras</label>
      </div>
      <a href="menuQuiz.php" class="botonPortada">PON A PRUEBA TUS CONOCIMIENTOS</a>
    </div>
  </section>

  <section class="seasonSection">
    <div class="season-tabs">
      <div class="season-header">
        <h1>2025 SEASON</h1>
        <div class="tab-buttons">
          <div class="tab-btn active" onclick="showTab('drivers')">DRIVERS</div>
          <div class="tab-btn" onclick="showTab('teams')">TEAMS</div>
        </div>
      </div>

      <div class="container">
        <div id="drivers" class="tab-content active">
          <table>
            <thead>
              <tr>
                <th>POS.</th>
                <th>DRIVER</th>
                <th>TEAM</th>
                <th>PTS.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Oscar Piastri</td>
                <td>McLaren</td>
                <td>234</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Lando Norris</td>
                <td>McLaren</td>
                <td>226</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Max Verstappen</td>
                <td>Red Bull Racing</td>
                <td>165</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="teams" class="tab-content">
          <table>
            <thead>
              <tr>
                <th>POS.</th>
                <th>TEAM</th>
                <th>PTS.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>McLaren</td>
                <td>460</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Ferrari</td>
                <td>222</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Mercedes</td>
                <td>210</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>


  <section class="MejoresCorredores">
    <div class="background"></div>
    <div class="tituloCorredores">CONOCE A NUESTROS MEJORES CORREDORES</div>
    <div class="corredoresContainer">
      <div class="corredor corredor1">
        <img src="https://drive.google.com/thumbnail?id=1zRFaLns2XMVPy4N379JdAwE9RdLI-eqn" alt="Avatar" class="img">
        <div class="container">
          <h4><b>Max Vestappen</b></h4>
          <p>Red bull Racing</p>
        </div>
      </div>
      <div class="corredor corredor2">
        <img src="https://drive.google.com/thumbnail?id=1ZglNC3LP223cwLgcuYHZEMf-p2dvdNgP" alt="Avatar" class="img">
        <div class="container">
          <h4><b>Lando Norris</b></h4>
          <p>McLaren</p>
        </div>
      </div>
      <div class="corredor corredor3">
        <img src="https://drive.google.com/thumbnail?id=1wDa4u7tDs5QNRb1dEE8FAx0gSfO3LMoy" alt="Avatar" class="img">
        <div class="container">
          <h4><b>George Russel</b></h4>
          <p>Mercedes</p>
        </div>
      </div>
    </div>
    <a href="Corredores.php" class="botonCorredores">Conoce más aquí</a>
  </section>


  <section class="MomentosDestacados">
    <div class="fondito"></div>
    <div class="tituloMomentos">Momentos Destacados</div>
    <div class="videosContainer">
      <div class="video video1">
        <video src="Videos/PitsMásRapida.mp4" controls class="videoElement"></video>
      </div>
      <div class="video video2">
        <video src="Videos/AdelantamientoVerstappen.mp4" controls class="videoElement"></video>
      </div>
      <div class="video video3">
        <video src="Videos/VueltaMásRapida.mp4" controls class="videoElement"></video>
      </div>
    </div>
    <a href="equipos.php" class="botonMomentos">Descubre más aquí</a>
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
  <script>
    function showTab(tabId) {

      const tabs = document.querySelectorAll('.tab-content');
      tabs.forEach(tab => tab.classList.remove('active'));
      const buttons = document.querySelectorAll('.tab-btn');
      buttons.forEach(btn => btn.classList.remove('active'));
      document.getElementById(tabId).classList.add('active');
      event.currentTarget.classList.add('active');
    }
  </script>


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var loader = document.getElementById('loader');
      loader.style.display = 'flex';

      setTimeout(function() {
        loader.style.display = 'none';
      }, 1000);
    });
  </script>

  <script>
fetch('../api/MostrarClasificacion.php')
  .then(response => response.json())
  .then(data => {
    const driversBody = document.querySelector('#drivers tbody');
    const teamsBody = document.querySelector('#teams tbody');

    // Limpiar tablas
    driversBody.innerHTML = '';
    teamsBody.innerHTML = '';

    // Renderizar pilotos
    data.drivers.forEach(driver => {
      driversBody.innerHTML += `
        <tr>
          <td>${driver.posicion}</td>
          <td>${driver.corredor}</td>
          <td>${driver.equipo}</td>
          <td>${driver.puntuacion}</td>
        </tr>
      `;
    });

    // Renderizar equipos
    data.teams.forEach(team => {
      teamsBody.innerHTML += `
        <tr>
          <td>${team.posicion}</td>
          <td>${team.equipo}</td>
          <td>${team.puntuacion}</td>
        </tr>
      `;
    });
  })
  .catch(error => {
    console.error('Error al cargar la clasificación:', error);
  });
</script>


</body>

</html>