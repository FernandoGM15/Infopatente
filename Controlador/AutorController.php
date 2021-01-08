<?php
require "../Modelo/AutorModel.php";
$flag = $_POST["flag"];
$autor = new AutorModel();
switch($flag){
    /**LISTADO DE Autor*/
    case 1:
        $resultado = $autor->getAllAutores();
        echo $resultado;
        break;

    /** BORRA Autor */
    case 2:
        $id = $_POST["id"];
        $resultado = $autor->deleteAutor($id);
        echo $resultado;
        break;
    
        /**ACTUALIZA Autor */
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
        $resultado = $autor->updateAutor(
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
        $resultado = $autor->setAutor(
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