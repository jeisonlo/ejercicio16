<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Lista de equipos</h1>

    @foreach ($equi as $equipo)
    <tr>
        <br>
        <td>{{ $equipo->nombre }}</td>
        <td>{{ $equipo->ciudad }}</td>
        <td>{{ $equipo->estadio }}</td>
        <td>{{ $equipo->aforo }}</td>
        <td>{{ $equipo->año }}</td>
        
        <td><a href="{{route('equipo.show', $equipo->id)}}">Detalle</a></td>
        <td><a href="{{route('equipo.edit', $equipo->id)}}">Editar</a></td>
        <form action="{{route('equipo.destroy', $equipo->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
        <br>
    </tr>
    @endforeach
   
</body>
</html>