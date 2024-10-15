<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categorías</title>
</head>
<body>
    <h1>Lista de Categorías</h1>
    @if($categories)
        <ul>
            @foreach($categories as $category)
                <li>
                    <h2>{{ $category['name'] }}</h2>
                    <img src="https://i.imgur.com/QkIa5tT.jpeg" alt="{{ $category['name'] }}" width="100">
                </li>
            @endforeach
        </ul>
    @else
        <p>No se encontraron categorías.</p>
    @endif
</body>
</html>
