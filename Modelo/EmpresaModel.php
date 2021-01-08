<?php
require "conexion.php";
date_default_timezone_set("America/Monterrey");
class EmpresaModel extends conexion_DB{
    
    /**
     * CONSTRUCTOR
     */
    public function __construct()
    {
        parent::__construct();
        $this->Empresas = array();
    }

    /**
     * METODO PARA MOSTRAR TODOS LOS REGISTROS DE ASPIRANTES
     */
    public function getAllEmpresas(){
        $sql = "SELECT * FROM empresas";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if (mysqli_num_rows($resultado)>0){
            while($row = $resultado->fetch_assoc()) {
                $this->Empresas["data"][]= $row;
            }
            return json_encode($this->Empresas);
        }
        else{
            $this->Empresas= array("data"=>[]);
            return json_encode($this->Empresas);
        } 
    }

    /**
     * METODO PARA MOSTRAR DATOS  
     */
    public function getEmpresas($id)
    {
        $id = $this->conn->real_escape_string($id);
        $sql = "SELECT * FROM empresas WHERE id = '$id'";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if (mysqli_num_rows($resultado)>0){
            while($row = $resultado->fetch_assoc()) {
                $this->Empresas[]=$row;
            }
            return json_encode($this->Empresas);
        }
        else{
            $this->Empresas= array("data"=>[]);
            return json_encode($this->Empresas);
        }
    }
    
    /**
     *METODO PARA INSERTAR DATOS 
     */
    public function setEmpresa($nombre, $nombre_rl, $direccion1_rl, $direccion2_rl, $email_rl, $telefono_rl, $nombre_sol, $email_sol, $telefono_sol)
    {
        $nombre = $this->conn->real_escape_string($nombre);
        $nombre_rl = $this->conn->real_escape_string($nombre_rl);
        $direccion1_rl = $this->conn->real_escape_string($direccion1_rl);
        $direccion2_rl = $this->conn->real_escape_string($direccion2_rl);
        $email_rl = $this->conn->real_escape_string($email_rl);
        $telefono_rl = $this->conn->real_escape_string($telefono_rl);
        $nombre_sol = $this->conn->real_escape_string($nombre_sol);
        $email_sol = $this->conn->real_escape_string($email_sol);
        $telefono_sol = $this->conn->real_escape_string($telefono_sol);
        $fecha_mod = date("Y-m-d H:i:s");
        $sql = "INSERT INTO empresas (nombre, nombre_rl, direccion1_rl, direccion2_rl, email_rl, telefono_rl, nombre_sol, email_sol, telefono_sol, fecha_mod)
            VALUES ('$nombre','$nombre_rl', '$direccion1_rl', '$direccion2_rl', '$email_rl', $telefono_rl, '$nombre_sol','$email_sol',$telefono_sol,'$fecha_mod')";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if(mysqli_affected_rows($this->conn)){
            return "Exito al insertar";
        }
    }

    /**
     * METODO PARA BORRAR
     */
    public function deleteEmpresa($id)
    {
        $id = $this->conn->real_escape_string($id);
        $sql = "DELETE FROM empresas WHERE id = '$id'";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if($resultado){
            return "Exito al borrar el registro";
        }
    }

    /**
     * METODO PARA ACTUALIZAR
     */
    public function updateEmpresa($id, $nombre, $nombre_rl, $direccion1_rl, $direccion2_rl, $email_rl, $telefono_rl, $nombre_sol, $email_sol, $telefono_sol)
    {
        $id = $this->conn->real_escape_string($id);
        $nombre = $this->conn->real_escape_string($nombre);
        $nombre_rl = $this->conn->real_escape_string($nombre_rl);
        $direccion1_rl = $this->conn->real_escape_string($direccion1_rl);
        $direccion2_rl = $this->conn->real_escape_string($direccion2_rl);
        $email_rl = $this->conn->real_escape_string($email_rl);
        $telefono_rl = $this->conn->real_escape_string($telefono_rl);
        $nombre_sol = $this->conn->real_escape_string($nombre_sol);
        $email_sol = $this->conn->real_escape_string($email_sol);
        $telefono_sol = $this->conn->real_escape_string($telefono_sol);
        $fecha_mod = date("Y-m-d H:i:s");
        $sql = "UPDATE empresas SET nombre = '$nombre',nombre_rl = '$nombre_rl',direccion1_rl = '$direccion1_rl',direccion2_rl = '$direccion2_rl',email_rl = '$email_rl',telefono_rl = $telefono_rl,nombre_sol = '$nombre_sol',email_sol = '$email_sol',telefono_sol = $telefono_sol WHERE id = '$id'";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if($resultado){
            return "Exito al actualizar el registro";
        }
    }
}

?>