<?php
require "conexion.php";
class usuario extends conexion_DB{

  function __construct(){
    parent::__construct();
  }

  public function validar($email, $contraseña){
    $email = $this->con->real_escape_string($email);
    $contraseña = $this->con->real_escape_string($contraseña);
    $res = mysqli_query($this->con,"SELECT * FROM USUARIOS WHERE EMAIL = '$email' AND CONTRASEÑA ='$contraseña'");
    if ($res->num_rows > 0 ){
      $data = $res->fetch_assoc();
      return $data;
    }
    else {
      return 0;
    }
  }
  public function  registrarUsuario($tipo, $empresa, $numIDentificacion, $Nombre, $ApPat, $ApMAt, $email, $contraseña, $CP, $telefono ){
    $tipo = $this->con->real_escape_string($tipo);
    $empresa = $this->con->real_escape_string($empresa);
    $numIDentificacion = $this->con->real_escape_string($numIDentificacion);
    $Nombre = $this->con->real_escape_string($Nombre);
    $ApPat = $this->con->real_escape_string($ApPat);
    $ApMAt = $this->con->real_escape_string($ApMAt);
    $email = $this->con->real_escape_string($email);
    $contraseña = $this->con->real_escape_string($contraseña);
    $CP = $this->con->real_escape_string($CP);
    $telefono = $this->con->real_escape_string($telefono);
    $validate = mysqli_query($this->con, "SELECT * FROM USUARIOS WHERE EMAIL = '$email'");
    if ($validate->num_rows == 0){
      $res = mysqli_query($this->con, "INSERT INTO USUARIOS (TIPO, EMPRESA,NUMIDENTIFICACION, NOMBRE, APPAT, APMAT, EMAIL, CONTRASEÑA, CP, TELEFONO) 
      VALUES ('$tipo', '$empresa', $numIDentificacion,'$Nombre','$ApPat','$ApMAt','$email', '$contraseña', $CP, '$telefono')");
      echo "Exito al registrar";
    }
    else{
      return "Fallo al registrar, usuario ya existe";
    }
  }

}

// $tipo = "Alumno";
// $empresa = "Universidad Autonoma de Coahuila";
// $numIDentificacion = "123456789";
// $Nombre = "Administrador";
// $ApPat = "Admin";
// $ApMAt = "Admin";
// $email = "usuario@infopatente.mx";
// $contraseña = "infopatente.mx";
// $CP = 25069;
// $telefono = 8444179783;

// $registro = new usuario();
// $res = $registro->registrarUsuario($tipo, $empresa, $numIDentificacion, $Nombre, $ApPat, $ApMAt, $email, $contraseña, $CP, $telefono);
// echo $res;
?>
