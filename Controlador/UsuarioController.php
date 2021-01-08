<?php
require "../Modelo/UsuarioModel.php";
$flag = $_POST["flag"];
$usuario = new UsuarioModel();
switch($flag){
    /**LISTADO DE usuarioS */
    case 1:
        $resultado = $usuario->getAllUsuarios();
        echo $resultado;
        break;

    /** BORRA usuario */
    case 2:
        $id = $_POST["id"];
        $resultado = $usuario->deleteUsuario($id);
        echo $resultado;
        break;
    
        /**ACTUALIZA usuario */
    case 3:
        $id = $_POST["id"];
        $tipo = $_POST["tipo"];
        $empresa = $_POST["empresa"];
        $num_identificacion = $_POST["num_identificacion"];
        $nombre = $_POST["nombre"];
        $apellido_paterno = $_POST["apellido_paterno"];
        $apellido_materno = $_POST["apellido_materno"];
        $email = $_POST["email"];
        $contraseña = $_POST["contraseña"];
        $cp = $_POST["cp"];
        $telefono = $_POST["telefono"];
        $resultado = $usuario->updateUsuario(
            $id, 
            $tipo, 
            $empresa, 
            $num_identificacion, 
            $nombre, $apellido_paterno, 
            $apellido_materno, 
            $email, 
            $contraseña, 
            $cp, 
            $telefono
        );
        echo $resultado;
        break;
    
        //**INSERTAR usuario */
    case 4:
        $tipo = $_POST["tipo"];
        $empresa = $_POST["empresa"];
        $num_identificacion = $_POST["num_identificacion"];
        $nombre = $_POST["nombre"];
        $apellido_paterno = $_POST["apellido_paterno"];
        $apellido_materno = $_POST["apellido_materno"];
        $email = $_POST["email"];
        $contraseña = $_POST["contraseña"];
        $cp = $_POST["cp"];
        $telefono = $_POST["telefono"];
        $resultado = $usuario->setUsuario(
            $tipo, 
            $empresa, 
            $num_identificacion, 
            $nombre, $apellido_paterno, 
            $apellido_materno, 
            $email, 
            $contraseña, 
            $cp, 
            $telefono
        );
        echo $resultado;
        break;
         //**VALIDAR usuario */
    case 5:
        $email= $_POST["user"];
        $contraseña = $_POST["pass"];
        $resultado = $usuario->validateUsuario($email,$contraseña);
        session_start();
        $_SESSION["logged"] = true;
        $_SESSION["data"]= json_decode($resultado);
        echo $resultado;
        break;
}
?>
