<?php
require "../Modelo/RepresentanteLegalModel.php";
$flag = $_POST["flag"];
$representante = new RepresentanteLegalModel();
switch($flag){
    /**LISTADO DE Representante*/
    case 1:
        $resultado = $representante->getAllRepresentantes();
        echo $resultado;
        break;

    /** BORRA Representante */
    case 2:
        $id = $_POST["id"];
        $resultado = $representante->deleteRepresentante($id);
        echo $resultado;
        break;
    
        /**ACTUALIZA Representante */
    case 3:
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido_paterno = $_POST["apellido_paterno"];
        $apellido_materno = $_POST["apellido_materno"];
        $direccion1 = $_POST["direccion1"];
        $direccion2 = $_POST["direccion2"];
        $pais = $_POST["pais"];
        $estado = $_POST["estado"];
        $ciudad = $_POST["ciudad"];
        $cp = $_POST["cp"];
        $nombre_patente = $_POST["nombre_patente"];
        $resultado = $representante->updateRepresentante(
            $id,
            $nombre, 
            $apellido_paterno , 
            $apellido_materno ,
            $direccion1,
            $direccion2,
            $pais,
            $estado,
            $ciudad,
            $cp,
            $nombre_patente
        );
        echo $resultado;
        break;
    
        //**INSERTAR usuario */
    case 4:
        $nombre = $_POST["nombre"];
        $apellido_paterno = $_POST["apellido_paterno"];
        $apellido_materno = $_POST["apellido_materno"];
        $direccion1 = $_POST["direccion1"];
        $direccion2 = $_POST["direccion2"];
        $pais = $_POST["pais"];
        $estado = $_POST["estado"];
        $ciudad = $_POST["ciudad"];
        $cp = $_POST["cp"];
        $nombre_patente = $_POST["nombre_patente"];
        $resultado = $representante->setRepresentante(
            $nombre, 
            $apellido_paterno , 
            $apellido_materno ,
            $direccion1,
            $direccion2,
            $pais,
            $estado,
            $ciudad,
            $cp,
            $nombre_patente
        );
        echo $resultado;
        break;
}
?>