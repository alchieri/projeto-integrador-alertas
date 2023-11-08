<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>SENAC - ALERTA</h1>
        </header>


        <nav>
            <ul>
                <li><a href="/">Início</a></li>
                <li><a href="/usuarios">Cadastro de Usuários</a></li>
                <li><a href="/confignotificacaos">Cadastro de Config. de Notificação</a></li>
            </ul>
        </nav>
        <div class="content">
            @yield('content')
        </div>

        
        <footer>
            <div>
                <p>Aprendendo Laravel Framework</p>
                <p><a href="http://www.laravel.com" target="_blank">Laravel Site</a></p>
            </div>
            <div>
                <p>Jorge Valdir Alchieri</p>
                <p>Meu Site</p>
            </div>
        </footer>
    </div>
</body>
</html>