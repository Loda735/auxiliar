<?php 
    define("carpetaxDefecto",'controlador/');//controlador frontal
    define("controladorxDefecto",'Mensaje');
    define("accionxDefecto",'Mensaje_Controlador::rec_total_registros');
    
    $controlador=controladorxDefecto;
    if(!empty($_GET['controlador'])){
        $controlador=$_GET['controlador'];

    }

    $action=accionxDefecto;
    if(!empty($_GET['action'])){
        $action=$_GET['action'];
    }

    $controlador=carpetaxDefecto.$controlador.'_Controlador.php';
    
    echo $controlador;
    echo $action;

    try{
        if(is_file($controlador)){
            require_once ($controlador);
        }
        else{
            throw new Exception ('El controlador no existe - 404 not found');
        }

        if(is_callable($action)){
            $action();
        }
        else{
            throw new Exception ('La acción no existe - 404 not found');
        }
    } catch (Exception $e) {
        echo $e->getMensaje().'ocurrio un error desconocido';
    }

?>