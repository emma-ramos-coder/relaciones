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

    <p>Imagenes asignadas a user {{ $user->name }}: </p>
    <ul>
        @foreach( $user->images as $image)
        <li>
            {{ $image->url ?? 'No hay imagenes' }}
        </li>
        @endforeach
    </ul>

    <p>Imagenes asignadas al post  {{ $post->titulo }}: </p>
    <ul>
        @foreach( $post->images as $image)
        <li>
            {{ $image->url ?? 'No hay imagenes' }}
        </li>
        @endforeach
    </ul>

    <h2>Post: {{ $post->titulo }}</h2>
    <p>Tags: </p>
    <ul>
        @foreach( $post->tags as $tag)
        <li>
            {{ $tag->nombre }}
            <p>Videos: </p>
            <ul>
                @foreach( $tag->videos as $video)
                <li>
                    {{ $video->titulo ?? 'No hay titulo' }}
                    {{ $video->url ?? 'No hay URL' }}
                    <br>
                </li>
                @endforeach
            </ul>
        </li>
        @endforeach
    </ul>

    <h2>Tag: {{ $tag->nombre }}</h2>
    <p>Posts: </p>
    <ul>
        @foreach( $tag->posts as $post)
        <li>
            {{ $post->titulo ?? 'No hay titulo' }}
        </li>
        @endforeach
    </ul>
    <p>Videos: </p>
    <ul>
        @foreach( $tag->videos as $video)
        <li>
            {{ $video->titulo ?? 'No hay titulo' }}
            {{ $video->url ?? 'No hay URL' }}
            <br>
        </li>
        @endforeach
    </ul>
</body>
</html>
