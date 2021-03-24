<?php
require "../Modelo/EmpresaModel.php";
if (array_key_exists("action",$_POST)){
    $flag = 3;
    unset($_POST["action"]);
}
else{
    $flag = $_POST["flag"];
}
$empresa = new EmpresaModel();
switch($flag){
    /**LISTADO DE Empresa*/
    case 1:
        $resultado = $empresa->getAllEmpresas();
        echo $resultado;
        break;

    /** BORRA Empresa */
    case 2:
        $id = $_POST["id"];
        $resultado = $empresa->deleteEmpresa($id);
        echo $resultado;
        break;
    
        /**ACTUALIZA Empresa */
    case 3:
        $resultado = $empresa->updateEmpresa($_POST);
        echo $resultado;
        break;
    
        //**INSERTAR usuario */
    case 4:
        $nombre = $_POST["nombre"];
        $nombre_rl = $_POST["nombre_rl"];
        $direccion1_rl = $_POST["direccion1_rl"];
        $direccion2_rl = $_POST["direccion2_rl"];
        $email_rl = $_POST["email_rl"];
        $telefono_rl = $_POST["telefono_rl"];
        $nombre_sol = $_POST["nombre_sol"];
        $email_sol = $_POST["email_sol"];
        $telefono_sol = $_POST["telefono_sol"];
        $resultado = $empresa->setEmpresa(
            $nombre, 
            $nombre_rl, 
            $direccion1_rl,
            $direccion2_rl,
            $email_rl,
            $telefono_rl,
            $nombre_sol,
            $email_sol,
            $telefono_sol
        );
        echo $resultado;
        break;
}
?>