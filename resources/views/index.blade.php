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
            <ul>
                @foreach( $phone->sims as $sim)
                <li>
                    Sim: {{ $sim->serial_number}} - {{ $sim->company }}
                </li>
                @endforeach
            </ul>
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

    <!-- 
    Para acceder a la url de la imagen desde user o desde post será
    llamando a la funcion image, con post se debe enviar a la vista
    la variable post desde el controlador
    El operador coalescente nulo (??) para proporcionar un valor predeterminado si el objeto es nulo
    -->

    <h1> {{ $user->image->url ?? 'No hay imagenes' }} </h1>
    <h1> {{ $post->image->url ?? 'No hay imagenes' }} </h1>

</body>
</html>
