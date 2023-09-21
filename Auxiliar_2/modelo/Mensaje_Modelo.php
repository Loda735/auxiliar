<?php
    /*se usa con mayusculas al comienzo porque es ua clase(por convension)*/
    require_once "Connection.php"; //se instancia la class Connection
     //esto es un ejemplo de diagrana de clases
    class Mensaje_Modelo {
        private $idCorreo;      //significan que en la clase tiene el signo (-)
        private $correo;        //cuando instanciamos la clase solo puede modificarse dentro de la clase no fuera por ser privado
        private $mensaje;

        const NOMB_TBL = "mensaje";

        public function __construct($idCorreo, $correo, $mensaje){
            $this->idCorreo = $idCorreo;
            $this->correo = $correo;
            $this->mensaje = $mensaje;
        }

        public function getCorreo(){ //en el diagrama de clases es (+)
            return $this->correo;
        }

        public function setCorreo($correo){
            $this->correo = $correo;
        }
    
        public function getMensaje(){
            return $this->mensaje;
        }
        public function setMensaje($mensaje){
            $this->mensaje = $mensaje;
        }

        public function guardar_editar_Mensj(){
            $conn = new Connection();
            if($this->idCorreo) {
                $sql = "UPDATE ".self::NOMB_TBL." SET correo = :correo, texto = :texto WHERE id = :idCorreo";
                $consulta = $conn->prepare($sql);
                $consulta ->bindParam(":correo", $this->correo);
                $consulta ->bindParam(":texto", $this->mensaje);
                $consulta ->bindParam(":idCorreo", $this->idCorreo);
                $consulta ->execute();
            } else {
                $sql = "INSERT INTO ".self::NOMB_TBL." (correo, texto) VALUES (:correo, :texto)";
                $guardar = $conn->prepare($sql);
                $guardar ->bindParam(":correo", $this->correo);
                $guardar ->bindParam(":texto", $this->mensaje);
                $guardar ->execute();
            } 
            $conn = null;
        }
        
        public static function rec_total_mensj() {
            $conn = new Connection();
                //EL * ES UN REGISTRO DE LA TABLA DE DATOS
            $sql = "SELECT * FROM ".self::NOMB_TBL." ORDER BY correo";
            $consulta = $conn->prepare($sql);
            $consulta->execute();

            $totalmensaje = $consulta->fetchAll(); //trae la tabla, retorna un arreglo o matriz
            
            $conn = null;//cierra la conexión con la BD

            return $totalmensaje;
        }

        public static function rec_un_mensj($id) {
            $conn = new Connection(); //se abre la conexión a la BD

            $sql = "SELECT * FROM ".self::NOMB_TBL." WHERE ID = :ID";
             //where id, usa el campo de la tabla id
            $consulta = $conn->prepare($sql); //prepara la consulta
            $consulta->bindParam(":ID", $id); //se indica el parametro con el valor
            $consulta->execute();//ejecuta la consulta.

            $un_mensaje= $consulta->fetch(); 
            //hay que ver si encontro el valor consultado
            if($un_mensaje){
                return $un_mensaje;
            }
            else {
                return false;
            }
            $conn = null;
        }
        public static function borrar($id) {
            $conn = new Connection();
            
            $sql = "DELETE * FROM ".self::NOMB_TBL." WHERE ID = :ID";
             //
            $consulta = $conn->prepare($sql); //prepara la consulta
            $consulta->bindParam(":ID", $id); //se indica el parametro con el valor
            $resultado = $consulta->execute();//ejecuta la consulta.
            return $resultado;
            $conn = null;


        }

    }



    // var_dump(Mensaje_Modelo::rec_total_mensj());



?>