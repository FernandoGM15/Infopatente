<?php
require_once 'controlador.php';
$Tipo = $_POST["Tipo"];
$Empresa = $_POST["Empresa"];
$NumIDentificacion = $_POST["NumIdentificacion"];
$Nombre = $_POST["Nombre"];
$ApPat = $_POST["ApPat"];
$ApMat = $_POST["ApMat"];
$Email = $_POST["Email"];
$Contraseña = $_POST["Contraseña"];
$Cp = $_POST["Cp"];
$Telefono = $_POST["Telefono"];
if (strlen($Empresa)==0){
    $Empresa = "NULO";
    $NumIDentificacion = "NULO";
}
$registrar = new  controlador();
$resultado = $registrar->registrarUsuario($Tipo, $Empresa, $NumIDentificacion, $Nombre, $ApPat, $ApMat, $Email, $Contraseña, $Cp, $Telefono);
echo $resultado;
?>