<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Nombres</title>
</head>
<body>
    <h1>Nombres en Laravel</h1>

    @if (!empty($nombres))
        <ul>
            <!--{{-- Itera sobre el array 'nombres' que fue pasado desde el controlador --}}!-->
            @foreach ($nombres as $nombre)
                <li>{{ $nombre }}</li>
            @endforeach
        </ul>
    @else
        <p>No hay nombres para mostrar.</p>
    @endif
</body>
</html>