<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SatuFundacion</title>
</head>
<body>
    <nav>
    <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/galeria">Galeria</a></li>
        <li><a href="/aboutUs">Quienes somos?</a></li>
        <li><a href="/portafolio">Nuestras actividades</a></li>
        <li><a href="/donacion">Donación</a></li>
        <li><a href="/contactanos">Contactanos</a></li>
    </ul>
    </nav>
    <h1>BIENVENIDOS</h1>
     <!-- Como has estado <?php echo $nombre ?? "Invitado" ?> -->
     <!-- Como has estado <?php echo "<script>alert('ALERTAA SCRIPT')</script>"?> -->
     Como has estado {{$nombre ?? "Invitado"}}
</body>
</html>

