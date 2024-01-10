
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/alagoas.css">
    <title>{{ $titulo }}</title>
</head>
<body>
    <header>
        <a href="{{ route('home') }}">Pagina Principal</a>
    <div class="titulo">
        <h1>Bem Vindo(a)! ao {{ $titulo }} </h1>
    </div>
    </header>

    <footer>
        &copy; Todos os direitos reservados - Turismo Brazil 
    </footer>
</body>
</html>
