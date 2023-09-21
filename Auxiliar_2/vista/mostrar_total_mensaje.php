<?php require_once "plantilla/encabezado.php"; ?>
<div class="contenedor">
    <table>
        <thead>
            <th>ID</th>
            <th>CORREO</th>
            <th>TEXTO</th>
            <th colspan="2">ACCION</th>
        </thead>
        <tbody>
            <?php foreach($totalmensaje as $indice): ?>
                <tr>
                    <td><?php echo $indice['ID']; ?></td> 
                    <td><?php echo $indice['CORREO']; ?></td>
                    <td><?php echo $indice['TEXTO']; ?></td>
                    <td>Editar</td>
                    <td>Borrar</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>