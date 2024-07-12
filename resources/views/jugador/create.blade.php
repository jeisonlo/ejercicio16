<form action="{{route('jugador.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
      
        <br>
       
        nombre:
        <br>
        <input type="text" name="nombre">
    </label>
   
    <br>
    <label>
        fechanacimiento:
        <br>
        <input type="text" name="fechanacimiento">
    </label>
   
    <br>
    <label>
        posicion:
        <br>
        <input type="text" name="posicion">
    </label>
   
    <br>
    <label>
       
    <br>
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>
   