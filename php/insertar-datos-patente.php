<?php
include 'conexion.php';

if(isset($_POST['Patente'])){
$Patente= $_POST['Patente'];
$NumAutores = $_POST['NumAutores'];
$PaisAplicacion = $_POST['PaisAplicacion'];
$TipoEntidad = $_POST['TipoEntidad'];
$TipoPatente= $_POST['TipoPatente'];
$TipoAplicacion= $_POST['TipoAplicacion'];


    $queryinsertarformulariosPat = "INSERT INTO patente (Patente,Num_Autores,Pais_Presentada,Entidad_Pequeña,Tipo_Patente,Tipo_Aplicacion)
    VALUES('$Patente','$NumAutores', '$PaisAplicacion','$TipoEntidad','$TipoPatente','$TipoAplicacion')";
    mysqli_query($conn, $queryinsertarformulariospat);

    echo "Cesionario Registrado";
}
else {
echo  'Error, Introduzca Patente';
}
 ?>
