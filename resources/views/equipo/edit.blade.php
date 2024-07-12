<form action="{{route('equipo.update', $equipo)}}" method="POST">

    @csrf
    @method('put')
    
    <br>
    <label>
        Nombre:
        <br>
        <input name="nombre" type="text" value="{{old('nombre', $equipo->nombre)}}">
        <br>
    </label>
    <br>
    <label>
        Ciudad:
        <br>
        <input name="ciudad" type="text" value="{{old('ciudad', $equipo->ciudad)}}">
        <br>
    </label>
    <br>
    <label>
        Estadio:
        <br>
        <input name="estadio" type="text" value="{{old('estadio', $equipo->estadio)}}">
        <br>
    </label>
    <br>
    <label>
        Aforo:
        <br>
        <input name="aforo" type="text" value="{{old('aforo', $equipo->aforo)}}">
        <br>
    </label>
    <br>
    <label>
        Año:
        <br>
        <input name="año" type="text" value="{{old('año', $equipo->año)}}">
        <br>
    </label>
    
    <br>
    <button type="submit">Actualizar</button>
   
</form>