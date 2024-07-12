<form action="{{route('equipo.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
        <br>
        Nombre:
        <br>
        <input type="text" name="nombre">
    </label>
   
    <br>
    <label>
        Ciudad:
        <br>
        <input type="text" name="ciudad">
    </label>
   
    <br>
    <label>
        Estadio:
        <br>
        <input type="text" name="estadio">
    </label>
   
    <br>
    <label>
        Aforo:
        <br>
        <input type="text" name="aforo">
    </label>
   
    <br>
    <label>
        Año:
        <br>
        <input type="text" name="año">
    </label>
   
    <br>
    <br><br>
    <button type="submit">Enviar Formulario</button>
</form>