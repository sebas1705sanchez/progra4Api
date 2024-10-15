<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    @if($users)
        <ul>
            @foreach($users as $user)
                <li>
                    <h2>{{ $user['name'] }}</h2>
                    <p>Email: {{ $user['email'] }}</p>
                    <img src="{{ $user['avatar'] }}" alt="{{ $user['name'] }}" width="100">
                </li>
            @endforeach
        </ul>
    @else
        <p>No se encontraron usuarios.</p>
    @endif
</body>
</html>
