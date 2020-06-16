<?php
require_once 'usuario.php';
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

$validar = new usuario();
$_SESSION['logged'] = json_encode($validar->validar($user, $pass));
echo $_SESSION['logged'];

