<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','SatuFun')</title>
    <style>
        .active a {
            color:red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav>
    {{-- {{request()}} Illuminate\Http\Request--}}
    {{-- <pre>{{dump(request())}} </pre> //Para que salga como tal el archivo JSON del request--}}
    {{-- <pre>{{dump(request()->url())}} </pre> //Para que salga como tal la url--}}
    {{-- <pre>{{dump(request()->path())}} </pre> //Para que salga como tal el path de la url--}}



    <ul>
        <li class="{{setActive('home')}}"><a href="/">Inicio</a></li>
        <li class ="{{setActive('galery')}}"><a href="/Galeria">Galeria</a></li>
        <li class ="{{setActive('about')}}"><a href="/SobreNosotros">Quienes somos?</a></li>
        <li class ="{{setActive('portafolio')}}"><a href="/Portafolio">Nuestras actividades</a></li>
        <li class ="{{setActive('donar')}}"><a href="/Donacion">Donación</a></li>
        <li class ="{{setActive('contacto')}}"><a href="/Contactanos">Contactanos</a></li>
    </ul>
    </nav>
    @yield('content')
</body>
</html>
