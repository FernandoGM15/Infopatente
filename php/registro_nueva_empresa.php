<?php
require_once "controlador.php";
$Nombre = $_POST["Nombre"];
$NombreRL = $_POST["NombreRL"];
$Direccion1RL = $_POST["Direccion1RL"];
$Direccion2RL = $_POST["Direccion2RL"];
$EmailRL = $_POST["EmailRL"];
$TelefonoRL = $_POST["TelefonoRL"];
$NombreSol = $_POST["NombreSol"];
$EmailSol = $_POST["EmailSol"];
$TelefonoSol = $_POST["TelefonoSol"];

$registrar = new controlador();
$res = $registrar->registrarEmpresas($Nombre, $NombreRL, $Direccion1RL, $Direccion2RL, $EmailRL, $TelefonoRL, $NombreSol, $EmailSol, $TelefonoSol);

echo $res;
?>