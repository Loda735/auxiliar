<?php require_once "plantilla/encabezado.php"; ?>
<div class="contenedor">
    <form action="index.php?Mensaje&action=Mensaje_Controlador::nuevoMensaje" method="post" class="form">
        
        <label for="id">Id</label>
        <input type="number" name="id" id="id"  readonly>
        <label for="correo">Correo Electrónico:</label>
        <input type="email" placeholder="ingrese su correo" name="correo" id="correo"><br>
        <label for="comentario">Comentarios:</label>
        <textarea name="coment" id="coment" cols="30" rows="10">Agregar comentario</textarea>
        <div class="btn">
        <input type="submit" value="Enviar" name="enviar">
        <input type="reset" value="Limpiar">
        </div>
        
    </form>
    
</div>
