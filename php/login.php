<?php
require_once 'usuario.php';
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
$validar = new usuario();
$resultado = $validar->validar($user, $pass);
if ($resultado == 0) {
    echo $resultado;
}
else{
    $_SESSION['logged'] = json_encode($resultado);
    echo $_SESSION['logged'];
}


