<?php
require "../Modelo/CesionarioModel.php";
$flag = $_POST["flag"];
$cesionario = new CesionarioModel();
switch($flag){
    /**LISTADO DE Cesionario*/
    case 1:
        $resultado = $cesionario->getAllCesionarios();
        echo $resultado;
        break;

    /** BORRA Cesionario */
    case 2:
        $id = $_POST["id"];
        $resultado = $cesionario->deleteCesionario($id);
        echo $resultado;
        break;
    
        /**ACTUALIZA Cesionario */
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
        $resultado = $cesionario->updateCesionario(
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
        $resultado = $cesionario->setCesionario(
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