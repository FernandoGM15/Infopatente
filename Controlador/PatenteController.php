<?php
require "../Modelo/PatenteModel.php";
$flag = $_POST["flag"];
$patente = new PatenteModel();
switch($flag){
    /**LISTADO DE Patente*/
    case 1:
        $resultado = $patente->getAllPatentes();
        echo $resultado;
        break;

    /** BORRA Patente */
    case 2:
        $id = $_POST["id"];
        $resultado = $patente->deletePatente($id);
        echo $resultado;
        break;
    
        /**ACTUALIZA Patente */
    case 3:
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $pais_presentacion = $_POST["pais_presentacion"];
        $entidad_pequeña = $_POST["entidad_pequeña"];
        $tipo = $_POST["tipo"];
        $aplicacion = $_POST["aplicacion"];
        $resultado = $patente->updatePatente(
            $id,
            $nombre,
            $pais_presentacion,
            $entidad_pequeña,
            $tipo,
            $aplicacion
        );
        echo $resultado;
        break;
    
        //**INSERTAR usuario */
    case 4:
        $nombre = $_POST["nombre"];
        $pais_presentacion = $_POST["pais_presentacion"];
        $entidad_pequeña = $_POST["entidad_pequeña"];
        $tipo = $_POST["tipo"];
        $aplicacion = $_POST["aplicacion"];
        $resultado = $patente->setPatente(
            $nombre,
            $pais_presentacion,
            $entidad_pequeña,
            $tipo,
            $aplicacion
        );
        echo $resultado;
        break;
}
?>