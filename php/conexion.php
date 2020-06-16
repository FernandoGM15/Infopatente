<?php
require "config.php";

class conexion_DB{
    protected $con;

    public function __construct(){
        $this->con = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME);
        $this->con->set_charset('utf8');
        if (!$this->con){
          echo "ERROR EN LA CONEXION";
        }
    }
}
?>