<?php 
    require_once "vista/plantilla/encabezado.php"
    <div class="form">
        <form action="http://localhost/auxiliar/controlador/Controlador_Mensaje::nuevoMensaje" method="post">
            <label for="id">Id</label>
            <input type"number" name="id" id="id"  readonly>
            <label for="correo">Correo Electrónico:</label>
            <input type="email" placeholder="ingrese su correo" name="correo" id="correo"><br>
            <label for="comentario">Comentarios:</label>
            <textarea name="coment" id="coment" cols="30" rows="10">Agregar comentario</textarea>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpiar">
        
            </form>
    </div>
?>
