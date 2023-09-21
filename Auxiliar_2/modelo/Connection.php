<?php 

class Connection extends PDO {
    private $host = "localhost";
    private $typeBD ="mysql";
    private $nameBD = "auxiliar";
    private $usr = "root";
    private $pass = "mysql";
    public $conn;

    public function __construct(){
        try{
    //indica el tipo de BD, el nombre, el host y el juego de caracteres
            parent::__construct("{$this->typeBD}:dbname={$this->nameBD};host={$this->host};charset=utf8",$this->usr,$this->pass);
/*pregunta de final*/
        } catch (PDOExeption $e) {
            echo $e->getMessage("Error en la conexión a la Base de Datos". $e);
            exit;
        }
/*porque se usa $this porque no esta static sino se usaria self*/
    }
}

$conn = new Connection();
?>