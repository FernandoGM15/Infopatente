<?php
require "../config/config.php";

class conexion_DB{
    protected $conn;

    public function __construct(){
        $this->conn = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME);
        $this->conn->set_charset('utf8');
        if (!$this->conn){
          echo "ERROR EN LA CONEXION";
        }
    }
}
?>