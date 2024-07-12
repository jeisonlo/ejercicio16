<form action="{{route('jugador.update', $jugador)}}"  method="POST">

    @csrf
    @method('put')
    
    </label>
    <br>
    <label>
    nombre:
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$jugador-> nombre)}}">
    <br>
    </label>
    <br>
    <label>
    fechanacimiento:
    <br>
    <input name="fechanacimiento" type="text" value="{{old('fechanacimiento',$jugador-> fechanacimiento)}}">
    <br>
    </label>
    <br>
    <label>
    posicion:
    <br>
    <input name="posicion" type="text" value="{{old('posicion',$jugador->posicion)}}">
    <br>
    </label>
    
    <br>
    <button  type="submit">Actualizar</button>
   
</form>