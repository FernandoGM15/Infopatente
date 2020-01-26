<?php
  include 'conexion.php';

  if(isset($_POST['Patente'])){
    $Patente= $_POST['PatenteA'];
    $NombreA = $_POST['NombreA'];
    $ApellidoPA = $_POST['ApellidoPA'];
    $ApellidoMA = $_POST['ApellidoMA'];
    $Direccion1A= $_POST['Direccion1A'];
    $Direccion2A= $_POST['Direccion2A'];
    $CiudadA= $_POST['CiudadA'];
    $EstadoA= $_POST['EstadoA'];
    $CPA= $_POST['CPA'];
    $PaisA= $_POST['PaisA'];

    $queryinsertarformularioAutor = "INSERT INTO Autores (Patente,Nombre,ApellidoP,ApellidoM,Direccion1,Direccion2,Ciudad,Estado,CP,Pais)
    VALUES('$PatenteA','$NombreA', '$ApellidoPA','$ApellidoMA','$Direccion1A','$Direccion2A','$CiudadA','$EstadoA',$CPA,'$PaisA')";
    mysqli_query($conn, $queryinsertarformularios);

    echo "Autor Registrado";
  }else {
  echo  'Error, Introduzca Patente';
  }
 ?>
