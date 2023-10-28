<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <h1>Usuario: {{ $user->name }}</h1>
    <p>Email: {{ $user->email }} </p>
    <p>Teléfonos: </p>
    <ul>
        @foreach( $user->phones as $phone)
        <li> 
            {{ $phone->prefijo }} - {{ $phone->numero }}
        </li>
        @endforeach
    </ul>
    <p>Roles asignados: </p>
    <ul>
        @foreach( $user->roles as $role)
        <li> 
            {{ $role->nombre }} 
        </li>
        @endforeach
    </ul>
</body>
</html>