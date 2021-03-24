<?php
require "../Modelo/PatenteModel.php";
if (array_key_exists("action",$_POST)){
    $flag = 3;
    unset($_POST["action"]);
}
else{
    $flag = $_POST["flag"];
}
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
        $resultado = $patente->updatePatente($_POST);
        echo $resultado;
        break;
    
        //**INSERTAR usuario */
    case 4:
        $nombre = $_POST["nombre"];
        $pais_presentacion = $_POST["pais_presentacion"];
        $entidad_pequeña = $_POST["entidad_pequeña"];
        $tipo = $_POST["tipo"];
        $aplicacion = $_POST["aplicacion"];
        $email_registro = $_POST["email_registro"];
        $resultado = $patente->setPatente(
            $nombre,
            $pais_presentacion,
            $entidad_pequeña,
            $tipo,
            $aplicacion,
            $email_registro
        );
        echo $resultado;
        break;
}
?>