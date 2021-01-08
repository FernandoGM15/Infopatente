<?php
require "conexion.php";
date_default_timezone_set("America/Monterrey");
class RepresentanteLegalModel extends conexion_DB{
    
    /**
     * CONSTRUCTOR
     */
    public function __construct()
    {
        parent::__construct();
        $this->Representantes = array();
    }

    /**
     * METODO PARA MOSTRAR TODOS LOS REGISTROS DE ASPIRANTES
     */
    public function getAllRepresentantes(){
        $sql = "SELECT * FROM representantes";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if (mysqli_num_rows($resultado)>0){
            while($row = $resultado->fetch_assoc()) {
                $this->Representantes["data"][]= $row;
            }
            return json_encode($this->Representantes);
        }
        else{
            $this->Representantes= array("data"=>[]);
            return json_encode($this->Representantes);
        } 
    }

    /**
     * METODO PARA MOSTRAR DATOS  
     */
    public function getRepresentante($nombre_patente)
    {
        $nombre_patente = $this->conn->real_escape_string($nombre_patente);
        $sql = "SELECT * FROM representantes WHERE nombre_patente = '$nombre_patente'";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if (mysqli_num_rows($resultado)>0){
            while($row = $resultado->fetch_assoc()) {
                $this->Representantes[]=$row;
            }
            return json_encode($this->Representantes);
        }
        else{
            $this->Representantes= array("data"=>[]);
            return json_encode($this->Representantes);
        }
    }
    
    /**
     *METODO PARA INSERTAR DATOS 
     */
    public function setRepresentante($nombre, $apellido_paterno, $apellido_materno, $direccion1, $direccion2, $pais, $estado, $ciudad, $cp, $nombre_patente)
    {
        $nombre = $this->conn->real_escape_string($nombre);
        $apellido_paterno = $this->conn->real_escape_string($apellido_paterno);
        $apellido_materno = $this->conn->real_escape_string($apellido_materno);
        $direccion1 = $this->conn->real_escape_string($direccion1);
        $direccion2 = $this->conn->real_escape_string($direccion2);
        $pais = $this->conn->real_escape_string($pais);
        $estado = $this->conn->real_escape_string($estado);
        $ciudad = $this->conn->real_escape_string($ciudad);
        $cp = $this->conn->real_escape_string($cp);
        $nombre_patente = $this->conn->real_escape_string($nombre_patente);
        $fecha_mod = date("Y-m-d H:i:s");
        $sql = "INSERT INTO representantes (nombre, apellido_paterno, apellido_materno, direccion1, direccion2, pais, estado, ciudad, cp, nombre_patente, fecha_mod)
            VALUES ('$nombre','$apellido_paterno', '$apellido_materno', '$direccion1', '$direccion2', '$pais','$estado','$ciudad',$cp, '$nombre_patente','$fecha_mod')";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if(mysqli_affected_rows($this->conn)){
            return "Exito al insertar";
        }
    }

    /**
     * METODO PARA BORRAR
     */
    public function deleteRepresentante($id)
    {
        $id = $this->conn->real_escape_string($id);
        $sql = "DELETE FROM representantes WHERE id = '$id'";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if($resultado){
            return "Exito al borrar el registro";
        }
    }

    /**
     * METODO PARA ACTUALIZAR
     */
    public function updateRepresentante($id, $nombre, $apellido_paterno, $apellido_materno, $direccion1, $direccion2, $pais, $estado, $ciudad, $cp, $nombre_patente)
    {
        $nombre = $this->conn->real_escape_string($nombre);
        $apellido_paterno = $this->conn->real_escape_string($apellido_paterno);
        $apellido_materno = $this->conn->real_escape_string($apellido_materno);
        $direccion1 = $this->conn->real_escape_string($direccion1);
        $direccion2 = $this->conn->real_escape_string($direccion2);
        $pais = $this->conn->real_escape_string($pais);
        $estado = $this->conn->real_escape_string($estado);
        $ciudad = $this->conn->real_escape_string($ciudad);
        $cp = $this->conn->real_escape_string($cp);
        $nombre_patente = $this->conn->real_escape_string($nombre_patente);
        $fecha_mod = date("Y-m-d H:i:s");
        $sql = "UPDATE representantes SET 
            nombre = '$nombre',
            apellido_paterno = '$apellido_paterno',
            apellido_materno = '$apellido_materno',
            direccion1 = '$direccion1',
            direccion2 = '$direccion2',
            pais = '$pais',
            estado= '$estado',
            ciudad = '$ciudad',
            cp = $cp,
            nombre_patente = $nombre_patente
            WHERE id = '$id'";
        $resultado = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        if($resultado){
            return "Exito al actualizar el registro";
        }
    }
}

?>