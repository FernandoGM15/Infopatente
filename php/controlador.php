<?php
require "conexion.php";
class controlador extends conexion_DB{

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

  public function registrarEmpresas($Nombre, $NombreRL, $Direccion1RL, $Direccion2RL,$EmailRL, $TelefonoRL, $NombreSol, $EmailSol, $TelefonoSol){
    $Nombre = $this->con->real_escape_string($Nombre);
    $NombreRL = $this->con->real_escape_string($NombreRL);
    $Direccion1RL = $this->con->real_escape_string($Direccion1RL);
    $Direccion2RL = $this->con->real_escape_string($Direccion2RL);
    $EmailRL = $this->con->real_escape_string($EmailRL);
    $TelefonoRL = $this->con->real_escape_string($TelefonoRL);
    $NombreSol = $this->con->real_escape_string($NombreSol);
    $EmailSol = $this->con->real_escape_string($EmailSol);
    $TelefonoSol = $this->con->real_escape_string($TelefonoSol);
    $validate = mysqli_query($this->con, "SELECT * FROM Empresas WHERE NOMBRE = '$Nombre'");
    if ( $validate->num_rows == 0 ){
      $res = mysqli_query($this->con, "INSERT INTO Empresas (NOMBRE, NOMBRE_RL, DIRECCION1_RL, DIRECCION2_RL, EMAIL_RL, TELEFONO_RL, NOMBRE_SOL, EMAIL_SOL, TELEFONO_SOL)
        VALUES ('$Nombre','$NombreRL','$Direccion1RL','$Direccion2RL','$EmailRL',$TelefonoRL,'$NombreSol', '$EmailSol', $TelefonoSol)" );
      echo "Exito al registrar";
    }
    else{
      return "Fallo al registrar, empresa ya existe";
    }
  }
}

?>
