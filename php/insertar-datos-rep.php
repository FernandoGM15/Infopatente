<?php
include 'conexion.php';

if(isset($_POST['Patente'])){
$PatenteRL= $_POST['PatenteRL'];
$NombreRL = $_POST['NombreRL'];
$ApellidoPRL = $_POST['ApellidoPRL'];
$ApellidoMRL = $_POST['ApellidoMRL'];
$Direccion1RL= $_POST['Direccion1RL'];
$Direccion2RL= $_POST['Direccion2RL'];
$CiudadRL= $_POST['CiudadRL'];
$EstadoRL= $_POST['EstadoRL'];
$CPRL= $_POST['CPRL'];
$PaisRL= $_POST['PaisRL'];


    $queryinsertarformulariosRep = "INSERT INTO representantelegal (Patente,Nombre,ApellidoP,ApellidoM,Direccion1,Direccion2,Ciudad,Estado,CP,Pais)
    VALUES('$PatenteRL','$NombreRL', '$ApellidoPRL','$ApellidoMRL','$Direccion1RL','$Direccion2RL','$CiudadRL','$EstadoRL',$CPRL,'$PaisRL')";
    mysqli_query($conn, $queryinsertarformulariosRep);

    echo "Representante Legal Registrado";
}
else {
echo  'Error, Introduzca Patente';
}
 ?>
