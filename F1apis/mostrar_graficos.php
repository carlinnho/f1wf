<?php

// Consulta de graficos de barras para predecir jornada
$query1 = "SELECT jornada, primer, segundo, tercero FROM predecir";
$result1 = mysqli_query($conexion, $query1);

if (!$result1) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

$rows1 = [];
while ($row1 = mysqli_fetch_assoc($result1)) {
    $rows1[] = "['" . $row1['jornada'] . "', '" . $row1['primer'] . "', '" . $row1['segundo'] . "', '" . $row1['tercero'] . "']";
}

// Consulta de grafico de barras de puntaje de usuario lineal
$query2 = "SELECT idusuario, puntaje, puntajeMaximo FROM respuesta_usuario"; 
$result2 = mysqli_query($conexion, $query2);

if (!$result2) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

$rows2 = [];
while ($row2 = mysqli_fetch_assoc($result2)) {
    $rows2[] = "['" . $row2['idusuario'] . "', " . $row2['puntaje'] . ", " . $row2['puntajeMaximo'] . "]";
}

// Consulta de grafico de barras de cantidad de puntaje obtenidos
$query3 = "SELECT puntaje, COUNT(*) as cantidad FROM respuesta_usuario GROUP BY puntaje";
$result3 = mysqli_query($conexion, $query3);

if (!$result3) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

$rows3 = [];
while ($row3 = mysqli_fetch_assoc($result3)) {
    $rows3[] = "['Puntaje " . $row3['puntaje'] . "', " . $row3['cantidad'] . "]";
}

// Consulta de graficos de quizzes realisados por meses
$query4 = "SELECT DATE_FORMAT(fecha, '%Y-%m') as mes, COUNT(*) as cantidad FROM respuesta_usuario GROUP BY mes";
$result4 = mysqli_query($conexion, $query4);

if (!$result4) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

$rows4 = [];
while ($row4 = mysqli_fetch_assoc($result4)) {
    $rows4[] = "['" . $row4['mes'] . "', " . $row4['cantidad'] . "]";
}

// Consultas de grafico circular para votos de primer lugar
$query5 = "SELECT primer, COUNT(*) as cantidad FROM predecir GROUP BY primer";
$result5 = mysqli_query($conexion, $query5);

if (!$result5) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

$rows5 = [];
while ($row5 = mysqli_fetch_assoc($result5)) {
    $rows5[] = "['" . $row5['primer'] . "', " . $row5['cantidad'] . "]";
}

// Consultas de grafico circular para votos de segundo lugar

$query6 = "SELECT segundo, COUNT(*) as cantidad FROM predecir GROUP BY segundo";
$result6 = mysqli_query($conexion, $query6);

if (!$result6) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

$rows6 = [];
while ($row6 = mysqli_fetch_assoc($result6)) {
    $rows6[] = "['" . $row6['segundo'] . "', " . $row6['cantidad'] . "]";
}

// Consultas de grafico circular para votos de tercer lugar

$query7 = "SELECT tercero, COUNT(*) as cantidad FROM predecir GROUP BY tercero";
$result7 = mysqli_query($conexion, $query7);

if (!$result7) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

$rows7 = [];
while ($row7 = mysqli_fetch_assoc($result7)) {
    $rows7[] = "['" . $row7['tercero'] . "', " . $row7['cantidad'] . "]";
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="awebo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficos de Predicción y Puntajes de Usuarios</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        .charts-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }
        .chart {
            width: 100%;
            max-width: 800px; 
            height: 600px; 
            margin: 20px 0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar', 'corechart']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            // Datos para el gráfico de barras
            var data1 = google.visualization.arrayToDataTable([
                ['Jornada', 'Primer', 'Segundo', 'Tercero'],
                <?php echo implode(",", $rows1); ?>
            ]);

            var options1 = {
                title: 'Resultados de Predecir por Jornada',
                bars: 'vertical',
                height: 600,
                width: 800,
                legend: { position: 'bottom' },
                bar: { groupWidth: '75%' },
                isStacked: true,
                colors: ['#F1C40F', '#AFAFAF', '#FF5B33'],
                hAxis: {
                    title: 'Jornada',
                    textPosition: 'out',
                    titleTextStyle: {
                        bold: true,
                        italic: false,
                        fontSize: 14
                    },
                    slantedText: true,
                    slantedTextAngle: 45
                },
                annotations: {
                    textStyle: {
                        fontSize: 12,
                        bold: true,
                        color: '#000',
                        auraColor: 'none'
                    }
                }
            };

            // Dibujar el gráfico de barras
            var chart1 = new google.charts.Bar(document.getElementById('barchart'));
            chart1.draw(data1, google.charts.Bar.convertOptions(options1));

            // Datos para el gráfico de líneas
            var data2 = google.visualization.arrayToDataTable([
                ['ID Usuario', 'Puntaje', 'Puntaje Máximo'],
                <?php echo implode(",", $rows2); ?>
            ]);

            var options2 = {
                title: 'Puntajes de Usuarios',
                height: 600,
                width: 800,
                hAxis: {title: 'ID Usuario'},
                vAxis: {title: 'Puntaje'},
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            // Dibujar el gráfico de líneas
            var chart2 = new google.visualization.LineChart(document.getElementById('linechart'));
            chart2.draw(data2, options2);

            // Datos para el gráfico circular
            var data3 = google.visualization.arrayToDataTable([
                ['Puntaje', 'Cantidad'],
                <?php echo implode(",", $rows3); ?>
            ]);

            var options3 = {
                title: 'Cantidad de Usuarios por Puntaje',
                pieHole: 0.4,
                height: 600,
                width: 800,
                slices: {
                    0: { color: '#154360' },
                    1: { color: '#1F618D' },
                    2: { color: '#2980B9' },
                    3: { color: '#7FB3D5' },
                    4: { color: '#D4E6F1' }
                }
            };

            // Dibujar el gráfico circular
            var chart3 = new google.visualization.PieChart(document.getElementById('piechart'));
            chart3.draw(data3, options3);

            // Datos para el gráfico de quizzes por mes
            var data4 = google.visualization.arrayToDataTable([
                ['Mes', 'Cantidad'],
                <?php echo implode(",", $rows4); ?>
            ]);

            var options4 = {
                title: 'Quizzes Realizados por Mes',
                bars: 'vertical',
                height: 600,
                width: 800,
                legend: { position: 'bottom' },
                bar: { groupWidth: '75%' },
                hAxis: {
                    title: 'Mes',
                    textPosition: 'out',
                    titleTextStyle: {
                        bold: true,
                        italic: false,
                        fontSize: 14
                    },
                    slantedText: true,
                    slantedTextAngle: 45
                },
                vAxis: {
                    title: 'Cantidad',
                    textPosition: 'out',
                    titleTextStyle: {
                        bold: true,
                        italic: false,
                        fontSize: 14
                    }
                },
                annotations: {
                    textStyle: {
                        fontSize: 12,
                        bold: true,
                        color: '#000',
                        auraColor: 'none'
                    }
                }
            };

            // Dibujar el gráfico de barras de quizzes por mes
            var chart4 = new google.charts.Bar(document.getElementById('barchart2'));
            chart4.draw(data4, google.charts.Bar.convertOptions(options4));

            // Datos para el gráfico circular de votos de primer lugar
            var data5 = google.visualization.arrayToDataTable([
                ['Primer Lugar', 'Cantidad'],
                <?php echo implode(",", $rows5); ?>
            ]);

            var options5 = {
                title: 'Votos de Primer Lugar',
                pieHole: 0.4,
                height: 600,
                width: 800,
                slices: {
                    0: { color: '#F1C40F' },
                    1: { color: '#E67E22' },
                    2: { color: '#2980B9' }
                }
            };

            // Dibujar el gráfico circular de votos de primer lugar
            var chart5 = new google.visualization.PieChart(document.getElementById('piechart1'));
            chart5.draw(data5, options5);

            // Datos para el gráfico circular de votos de segundo lugar
            var data6 = google.visualization.arrayToDataTable([
                ['Segundo Lugar', 'Cantidad'],
                <?php echo implode(",", $rows6); ?>
            ]);

            var options6 = {
                title: 'Votos de Segundo Lugar',
                pieHole: 0.4,
                height: 600,
                width: 800,
                slices: {
                    0: { color: '#C0C0C0' },
                    1: { color: '#95A5A6' },
                    2: { color: '#7F8C8D' }
                }
            };

            // Dibujar el gráfico circular de votos de segundo lugar
            var chart6 = new google.visualization.PieChart(document.getElementById('piechart2'));
            chart6.draw(data6, options6);

            // Datos para el gráfico circular de votos de tercer lugar
            var data7 = google.visualization.arrayToDataTable([
                ['Tercer Lugar', 'Cantidad'],
                <?php echo implode(",", $rows7); ?>
            ]);

            var options7 = {
                title: 'Votos de Tercer Lugar',
                pieHole: 0.4,
                height: 600,
                width: 800,
                slices: {
                    0: { color: '#CD7F32' },
                    1: { color: '#B87333' },
                    2: { color: '#A0522D' }
                }
            };

            // Dibujar el gráfico circular de votos de tercer lugar
            var chart7 = new google.visualization.PieChart(document.getElementById('piechart3'));
            chart7.draw(data7, options7);
        }
    </script>
</head>
<body>
    <div class="charts-container">
        <h1>Gráficos de Predicción y Puntajes de Usuarios</h1>
        <div id="barchart" class="chart"></div>
        <div id="linechart" class="chart"></div>
        <div id="piechart" class="chart"></div>
        <div id="barchart2" class="chart"></div>
        <div id="piechart1" class="chart"></div>
        <div id="piechart2" class="chart"></div>
        <div id="piechart3" class="chart"></div>
    </div>
</body>
</html>




