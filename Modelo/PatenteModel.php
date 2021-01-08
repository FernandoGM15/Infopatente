<?php
require "conexion.php";
date_default_timezone_set("America/Monterrey");
class PatenteModel extends conexion_DB{
    
    /**
     * CONSTRUCTOR
     */
    public function __construct()
    {
        parent::__construct();
        $this->Patentes = array();
    }

    /**
     * METODO PARA MOSTRAR TODOS LOS REGISTROS DE ASPIRANTES
     */
    public function getAllPatentes(){
        $sql = "SELECT * FROM patentes";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if (mysqli_num_rows($resultado)>0){
            while($row = $resultado->fetch_assoc()) {
                $this->Patentes["data"][]= $row;
            }
            return json_encode($this->Patentes);
        }
        else{
            $this->Patentes= array("data"=>[]);
            return json_encode($this->Patentes);
        } 
    }

    /**
     * METODO PARA MOSTRAR DATOS  
     */
    public function getPatente($id)
    {
        $id = $this->conn->real_escape_string($id);
        $sql = "SELECT * FROM patentes WHERE id = '$id'";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if (mysqli_num_rows($resultado)>0){
            while($row = $resultado->fetch_assoc()) {
                $this->Patentes[]=$row;
            }
            return json_encode($this->Patentes);
        }
        else{
            $this->Patentes= array("data"=>[]);
            return json_encode($this->Patentes);
        }
    }
    
    /**
     *METODO PARA INSERTAR DATOS 
     */
    public function setPatente($nombre, $pais_presentacion ,$entidad_pequeña, $tipo, $aplicacion)
    {
        $nombre = $this->conn->real_escape_string($nombre);
        $pais_presentacion = $this->conn->real_escape_string($pais_presentacion);
        $entidad_pequeña = $this->conn->real_escape_string($entidad_pequeña);
        $tipo = $this->conn->real_escape_string($tipo);
        $aplicacion = $this->conn->real_escape_string($aplicacion);
        $autorizacion = "NO";
        $fecha_mod = date("Y-m-d H:i:s");
        $sql = "INSERT INTO patentes (nombre, pais_presentacion, entidad_pequeña, tipo, aplicacion, autorizacion, fecha_mod)
            VALUES ('$nombre','$pais_presentacion', '$entidad_pequeña', '$tipo', '$aplicacion', '$autorizacion','$fecha_mod')";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if(mysqli_affected_rows($this->conn)){
            return "Exito al insertar";
        }
    }

    /**
     * METODO PARA BORRAR
     */
    public function deletePatente($id)
    {
        $id = $this->conn->real_escape_string($id);
        $sql = "DELETE FROM patentes WHERE id = '$id'";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if($resultado){
            return "Exito al borrar el registro";
        }
    }

    /**
     * METODO PARA ACTUALIZAR
     */
    public function updateCesionario($id, $nombre, $pais_presentacion ,$entidad_pequeña, $tipo, $aplicacion)
    {
        $id = $this->conn->real_escape_string($id);
        $nombre = $this->conn->real_escape_string($nombre);
        $pais_presentacion = $this->conn->real_escape_string($pais_presentacion);
        $entidad_pequeña = $this->conn->real_escape_string($entidad_pequeña);
        $tipo = $this->conn->real_escape_string($tipo);
        $aplicacion = $this->conn->real_escape_string($aplicacion);
        $fecha_mod = date("Y-m-d H:i:s");
        $sql = "UPDATE patentes SET 
            nombre = '$nombre',
            pais_presentacion = '$pais_presentacion',
            entidad_pequeña = '$entidad_pequeña',
            tipo = '$tipo',
            aplicacion = '$aplicacion',
            fecha_mod= '$fecha_mod',
            WHERE id = '$id'";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if($resultado){
            return "Exito al actualizar el registro";
        }
    }
}

?>