<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Meu Projeto Cinema</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
<nav>
    <a href="{{ route('filmes.index') }}">Filmes</a> |
    <a href="{{ route('sessoes.index') }}">Sessões</a> |
    <a href="{{ route('reservas.index') }}">Reservas</a>
</nav>
<hr>