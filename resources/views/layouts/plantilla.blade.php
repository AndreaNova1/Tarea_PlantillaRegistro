<!doctype html>
<html lang="es">
<head>
    <title>Registro Alumnos - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
    <div class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-info text-white">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Navbar</a>
                <button type="button"
                        class="navbar-toggler"
                        data-bs-toggle="collapse"
                        data-bs-target="#MenuNavegacion">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div id="MenuNavegacion" class="collapse navbar-collapse">

                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Opciones de soporte
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Manuales</a></li>
                            <li><a class="dropdown-item" href="#">Base de conocimientos</a></li>
                            <li><a class="dropdown-item" href="#">Contacta con nosotros</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


            <ul class="navbar-nav ms-3">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </ul>
                    </li>
                @endguest
            </ul>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
