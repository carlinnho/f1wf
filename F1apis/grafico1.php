<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
<link rel="icon" type="image/png" href="awebo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>Gráfico de Barras</title> 
    </head>
    <body>
        <div style="width: 1000px " "height:800px">
            <canvas id="MyChart"></canvas>
        </div>

        <script>
            const labels = ['jornada', 'primer', 'segundo', 'tercero'];
            const data = {
                labels: labels,
                datasets: [
                    {
                        label: 'GP Gran Bretaña',
                        data: [2,0,0,0],
                        backgroundColor: 'rgba(238, 75, 250)',
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 1
                    },
                    {
                        label: 'GP Hungria',
                        data: [2,0,0,0],
                        backgroundColor: 'rgba(255, 99, 132)',
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 1
                    },
                    {
                        label: 'GP Las Vegas',
                        data: [1,0,0,0],
                        backgroundColor: 'rgba(54, 162, 235)',
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 1
                    },
                    {
                        label: 'Max Verstappen',
                        data: [0,3,1,1],
                        backgroundColor: 'rgba(238, 75, 250)',
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 1
                    },
                    {
                        label: 'Checo Perez',
                        data: [0,0,3,0],
                        backgroundColor: 'rgba(255, 99, 132)',
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 1
                    },
                    {
                        label: 'Lando Norris',
                        data: [0,1,1,2],
                        backgroundColor: 'rgba(54, 162, 235)',
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 1
                    },
                    {
                        label: 'Carlos Sainz',
                        data: [0,1,0,1],
                        backgroundColor: 'rgba(227, 208, 61)',
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 1
                    },
                    {
                        label: 'Fernando Alonso',
                        data: [0,0,0,1],
                        backgroundColor: 'rgba(255, 206, 86)',
                        borderColor: 'rgb(0,0,0)',
                        borderWidth: 1
                    },
                    
                ]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        },
                        x: {
                            stacked: true
                        },
                        y: {
                            stacked: true
                        }
                    }
                }
            };

            var MyChart = new Chart(
                document.getElementById('MyChart'),
                config
            );
        </script>
    </body>
</html>
