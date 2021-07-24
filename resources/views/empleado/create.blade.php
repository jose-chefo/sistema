Creacion de formulario de empleados

<div class="">
    <form action="{{ route('empleado.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>

        <label for="apellido">1º Apellido</label>
        <input type="text" name="apellido" id="apellido">
        <br>

        <label for="apellido2">2º Apellido</label>
        <input type="text" name="apellido2" id="apellido2">
        <br>

        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>

        <label for="foto">Imagen</label>
        <input type="file" name="foto" id="foto">
        <br>

        <input type="submit" value="Enviar">
        <br>
    </form>
</div>