<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('css/estilos.css') }}">
</head>
<body>
<header>
    <h1>Carrera - San Andrés de Giles</h1>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Corredores</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/corredor/nuevo') }}">Inscripción</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/corredores') }}">Corredores</a>
                </li>
            </ul>
       </div>
    </nav>
</header>
<main class="main-content container">
     <!-- Sección para ceder a otros templates -->
    @yield('main')
</main>
<footer class="main-footer">
    <p>Gemina Lopez - Da Vinci &copy; 2019</p>
</footer>
</body>
</html>
