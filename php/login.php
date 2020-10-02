<?php
require_once 'controlador.php';
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
$validar = new controlador();
$resultado = $validar->validar($user, $pass);
if ($resultado == 0) {
    echo $resultado;
}
else{
    $_SESSION['logged'] = json_encode($resultado);
    echo $_SESSION['logged'];
}


