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
        <nav>
            <ul>
                <li>
                    <a href="/">Eventos</a>
                </li>
                <li>
                    <a href="/events/create">Criar Eventos</a>
                </li>
                <li>
                    <a href="/">Entrar</a>
                </li>
                <li>
                    <a href="/">Cadastrar</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Events &copy; 2023</p>
    </footer>
</body>

</html>
