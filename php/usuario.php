<?php
require "conexion.php";
class usuario extends conexion_DB{

  function __construct(){
    parent::__construct();
  }

  public function validar($user, $pass){
    $user = $this->con->real_escape_string($user);
    $pass = $this->con->real_escape_string($pass);
    $res = mysqli_query($this->con,"SELECT * FROM USUARIOS WHERE USUARIO = '$user' AND CONTRASEÑA ='$pass'");
    if ($res->num_rows > 0 ){
      $data = $res->fetch_assoc();
      return $data;
    }
    else {
      return 0;
    }
  }
}
?>
