<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','SatuFun')</title>
</head>
<body>
    <nav>
    <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/Galeria">Galeria</a></li>
        <li><a href="/SobreNosotros">Quienes somos?</a></li>
        <li><a href="/Portafolio">Nuestras actividades</a></li>
        <li><a href="/Donacion">Donación</a></li>
        <li><a href="/Contactanos">Contactanos</a></li>
    </ul>
    </nav>
    @yield('content')
</body>
</html>
