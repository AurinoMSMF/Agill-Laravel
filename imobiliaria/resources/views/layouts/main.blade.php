<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('tittle')</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet"> 

        <!-- CSS -->
        <link href="/css/styles.css" rel="stylesheet" type="text/css"/>

        <!--  JS -->
        <script src="/js/script.js"></script>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse id" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/images/icone.png" alt="Agil Imoveis">
                    </a>
                    <ul class="navbar-nav">
                        <il class="nav-item">
                            <a href="/imoveis" class="nav-link">Imóveis</a>
                        </il>
                        <il class="nav-item">
                            <a href="/imoveis/locar" class="nav-link">Locar imóvel</a>
                        </il>
                        <il class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </il>
                        <il class="nav-item">
                            <a href="/" class="nav-link">Cadastre-se</a>
                        </il>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>    
        <footer>
            <p id="footer-text">Agil Teste Imóveis &copy; 2023</p>
        </footer>
    </body>
</html>
