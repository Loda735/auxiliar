<?php 
    require_once "./modelo/Mensaje_Modelo.php";

    class Mensaje_Controlador {
        public static function nuevoMensaje() {
            if(isset($_POST['enviar'])){
             $id = $_POST['id'];
             $correo = $_POST['correo'];
             $coment = $_POST['coment'];


            $mensaje_modelo = new Mensaje_Modelo($id, $correo, $coment);
            $mensaje_modelo->guardar_editar_Mensj();
            }
        }

        public static function rec_total_registros() {
            $totalmensaje = Mensaje_Modelo::rec_total_mensj();
          
            require_once "./vista/mostrar_total_mensaje.php";
        }

        public static function rec_un_registro() {
            $id = $_GET['id'];//acceder 
            $un_mensaje = Mensaje_Modelo::rec_un_mensj($id);

            // require_once "./vista/mostrar_un_mensaje.php";
        
        }

    }

    // var_dump(Mensaje_Controlador::rec_total_registros());


?>