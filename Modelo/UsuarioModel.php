<?php
require "conexion.php";
date_default_timezone_set("America/Monterrey");
class UsuarioModel extends conexion_DB{
    
    /**
     * CONSTRUCTOR
     */
    public function __construct()
    {
        parent::__construct();
        $this->Usuarios = array();
    }

    /**
     * METODO PARA MOSTRAR TODOS LOS REGISTROS DE ASPIRANTES
     */
    public function getAllUsuarios(){
        $sql = "SELECT * FROM usuarios";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if (mysqli_num_rows($resultado)>0){
            while($row = $resultado->fetch_assoc()) {
                $this->Usuarios["data"][]= $row;
            }
            return json_encode($this->Usuarios);
        }
        else{
            $this->Usuarios= array("data"=>[]);
            return json_encode($this->Usuarios);
        } 
    }

    /**
     * METODO PARA MOSTRAR DATOS  
     */
    public function validateUsuario($email, $pass)
    {
        $email = $this->conn->real_escape_string($email);
        $pass = $this->conn->real_escape_string($pass);
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        $row = $resultado -> fetch_assoc();
        if(password_verify($pass, $row["contraseña"])){
            return json_encode($row);
        }
        else{
            return 0;
        }
    }
    
    /**
     *METODO PARA INSERTAR DATOS 
     */
    public function setUsuario($tipo, $empresa, $num_identificacion, $nombre, $apellido_paterno, $apellido_materno, $email, $contraseña, $cp, $telefono)
    {
        $tipo = $this->conn->real_escape_string($tipo);
        $empresa = $this->conn->real_escape_string($empresa);
        $num_identificacion = $this->conn->real_escape_string($num_identificacion);
        $nombre = $this->conn->real_escape_string($nombre);
        $apellido_paterno = $this->conn->real_escape_string($apellido_paterno);
        $apellido_materno = $this->conn->real_escape_string($apellido_materno);
        $email = $this->conn->real_escape_string($email);
        $contraseña = $this->conn->real_escape_string($contraseña);
        $encryptPass = password_hash($contraseña, PASSWORD_DEFAULT);
        $cp = $this->conn->real_escape_string($cp);
        $telefono = $this->conn->real_escape_string($telefono);
        $fecha_mod = date("Y-m-d H:i:s");
        if($this->ExistsUsuario($email)=="Duplicado"){
            return "Fallo al registrar, usuario ya existe";
        }
        $sql = "INSERT INTO usuarios (tipo, empresa, num_identificacion, nombre, apellido_paterno, apellido_materno, email, contraseña, cp, telefono, fecha_mod)
            VALUES ('$tipo','$empresa', '$num_identificacion', '$nombre', '$apellido_paterno', '$apellido_materno', '$email','$encryptPass',$cp, $telefono, '$fecha_mod')";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if(mysqli_affected_rows($this->conn)){
            return "Exito al registrar";
        }
    }

    /**
     * METODO PARA BORRAR
     */
    public function deleteUsuario($id)
    {
        $id = $this->conn->real_escape_string($id);
        $sql = "DELETE FROM usuarios WHERE id = '$id'";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if($resultado){
            return "Exito al borrar el registro";
        }
    }

    /**
     * METODO PARA ACTUALIZAR
     */
    public function updateUsuario($id, $tipo, $empresa, $num_identificacion, $nombre, $apellido_paterno, $apellido_materno, $email, $contraseña, $cp, $telefono)
    {
        $id = $this->conn->real_escape_string($id);
        $tipo = $this->conn->real_escape_string($tipo);
        $empresa = $this->conn->real_escape_string($empresa);
        $num_identificacion = $this->conn->real_escape_string($num_identificacion);
        $nombre = $this->conn->real_escape_string($nombre);
        $apellido_paterno = $this->conn->real_escape_string($apellido_paterno);
        $apellido_materno = $this->conn->real_escape_string($apellido_materno);
        $email = $this->conn->real_escape_string($email);
        $contraseña = $this->conn->real_escape_string($contraseña);
        $encryptPass = password_hash($contraseña, PASSWORD_DEFAULT);
        $cp = $this->conn->real_escape_string($cp);
        $telefono = $this->conn->real_escape_string($telefono);
        $fecha_mod = date("Y-m-d H:i:s");
        $sql = "UPDATE usuarios SET 
            tipo = '$tipo',
            empresa = '$empresa',
            num_identificacion = '$num_identificacion',
            nombre = '$nombre',
            apellido_paterno = '$apellido_paterno',
            apellido_materno = '$apellido_materno',
            email = '$email',
            contraseña = '$encryptPass',
            cp = $cp,
            telefono = $telefono,
            fecha_mod = '$fecha_mod'
            WHERE id = $id";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if($resultado){
            return "Exito al actualizar el registro";
        }
    }

    public function ExistsUsuario($email)
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if($resultado->num_rows>0){
            return "Duplicado";
        }
    }
}
?>