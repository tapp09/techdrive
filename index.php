<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SolarCar</title>
    <link rel="stylesheet" href="waves.css" />
    <style>
        .loaders {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center; 
        }
    </style>
</head>
<body>
        <section class="ondas">
            <div class="onda onda1"></div>
            <div class="onda onda2"></div>
            <div class="onda onda3"></div>
            <div class="onda onda4"></div>
        </section>
        <script>
          temporizador = setTimeout(abrirpagina, 3500);
          function abrirpagina () {
            window.open('home/index.php', '_self');
          }
        </script>
</body>
</html>