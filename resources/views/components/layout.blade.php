<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <title>{{ $title }} - Controle de Séries</title>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        {{ $slot }}
    </div>
</body>
</html>