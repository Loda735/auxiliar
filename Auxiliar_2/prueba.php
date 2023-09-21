<?php 
    require_once "modelo/Mensaje_Modelo.php";// aqui tiene id 3 entonces lo reemplaza pero si es 0 agrega otro registro
    $mensaje_modelo = new Mensaje_Modelo(3,"otrootrocorreo@hotmail.com", "mensaje_1");//instanciando la clase con "new Mensaje_Modelo" se instancia porque no es estático
    $mensaje_modelo->setCorreo('otrootrocorreo@yahoo.com');//el método set hace que se reemplace el valor cargado antes que era hotmail por yahoo
    $mensaje_modelo->guardar_editar_Mensj(); //acceder a un método dentro de la clase.
    // $mensajes = Mensaje_Modelo::rec_total_mensj();//para recuperar todos los mensajes
    // var_dump($mensajes);
    // echo "-----";
    // $mensaje = Mensaje_Modelo::rec_un_mensj("3");//busca la linea 3 de la tabla
    // var_dump($mensaje);

    // Mensaje_Modelo::borrar(3);
    
?>