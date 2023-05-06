<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fontes do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/index.js"></script>

</head>

<body>
    <header>
        <div id="cabecalho">
            <nav>
                <ul id="ul-nav">
                    <li id="li-nav">
                        <a id="link-nav" href="/">Eventos</a>
                    </li>
                    <li id="li-nav">
                        <a id="link-nav" href="/events/create">Criar Eventos</a>
                    </li>
                    <li id="li-nav">
                        <a id="link-nav" href="/">Entrar</a>
                    </li>
                    <li id="li-nav">
                        <a id="link-nav" href="/">Cadastrar</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="div-main">
            <h1>@yield('title')</h1>
            @yield('content')
        </div>
    </main>
    <footer>
        <div id="rodape">
            Eventos &copy; 2023
        </div>
    </footer>
</body>

</html>
