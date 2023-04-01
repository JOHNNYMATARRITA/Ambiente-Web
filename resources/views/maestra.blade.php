
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{env("APP_NAME")}}">
    <meta name="author" content="Parzibyte">
    <title>@yield("titulo") - {{env("APP_NAME")}}</title>
      <!-- Styles -->
      @livewireStyles
    <style>
        body {
            padding-top: 70px;
            /*Para la barra inferior fija*/
            padding-bottom: 70px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" target="_blank" href="//parzibyte.me/blog">{{env("APP_NAME")}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            id="botonMenu" aria-label="Mostrar u ocultar menú">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            @guest
         
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route("home")}}">Inicio&nbsp;<i class="fa fa-home"></i></a>
                </li>
            @endguest
        </ul>
        <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item">
                    <a href="{{route("logout")}}" class="nav-link">
                        Salir ({{ Auth::user()->name }})
                    </a>
                </li>
            @endauth
            <li class="nav-item">
                <a class="nav-link" href="{{route("soporte.index")}}">Soporte&nbsp;<i
                        class="fa fa-hands-helping"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route("acerca_de.index")}}">Acerca de&nbsp;<i class="fa fa-info"></i></a>
            </li>
        </ul>
    </div>
</nav>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const menu = document.querySelector("#menu"),
            botonMenu = document.querySelector("#botonMenu");
        if (menu) {
            botonMenu.addEventListener("click", () => menu.classList.toggle("show"));
        }
    });
</script>
<main class="container-fluid">
    @yield("contenido")
</main>
<footer class="px-2 py-2 fixed-bottom bg-dark">
    <span class="text-muted">Sistema de Gestion de Ferreteria
        <a target="_blank" class="text-white" >
            <i class="fab fa-github"></i>
        </a>
    </span>
</footer>
</body>
</html>
