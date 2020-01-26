<?php
include 'conexion.php';

if(isset($_POST['Patente'])){
$PatenteCes= $_POST['PatenteC'];
$NombreCes = $_POST['NombreC'];
$ApellidoPCes = $_POST['ApellidoPC'];
$ApellidoMCes = $_POST['ApellidoMC'];
$Direccion1Ces= $_POST['Direccion1C'];
$Direccion2Ces= $_POST['Direccion2C'];
$CiudadCes= $_POST['CiudadC'];
$EstadoCes= $_POST['EstadoC'];
$CPCes= $_POST['CPC'];
$PaisCes= $_POST['PaisC'];


    $queryinsertarformulariosRep = "INSERT INTO representantelegal (Patente,Nombre,ApellidoP,ApellidoM,Direccion1,Direccion2,Ciudad,Estado,CP,Pais)
    VALUES('$PatenteCes','$NombreCes', '$ApellidoPCes','$ApellidoMCes','$Direccion1Ces','$Direccion2Ces','$CiudadCes','$EstadoCes',$CPCes,'$PaisCes')";
    mysqli_query($conn, $queryinsertarformulariosRep);

    echo "Cesionario Registrado";
}
else {
echo  'Error, Introduzca Patente';
}
 ?>
