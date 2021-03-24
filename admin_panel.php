<?php
session_start();
if(!$_SESSION['logged']){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/check.ico" />
    <script src="js/jsload/jquery-3.1.1.min.js"></script>
    <script src="js/jsload/jquery.tabledit.min.js"></script>
    <script src="js/jsload/materialize.min.js"></script>
    <script src="js/jsload/materializejq.js"></script>
    <script src="js/jsload/dataTables.js"></script>
    <title>Sistema de patentes - Administrador</title>
    <style>
        .tabs .tab a{
            color:black;
        }
        .tabs .tab a:hover {
	        background-color:transparent;
	        color: rgb(110, 110, 110);
        }
        
        .tabs .tab a.active{
            background-color:transparent;
	        color: black;
        }
        .tabs .indicator {
	        background-color:black;
        }

        .dataTables_filter{
          width: 25%;
        }

        a:hover{
          color: black;
          cursor: pointer;
        }

        th{
          cursor:pointer;
        }

    </style>
</head>
<body>
<body class="grey lighten-4">
    <div class="container-fluid">
        <div class="row red accent-4 valign-wrapper z-depth-2">
          <div class="col l2 hide-on-med-and-down">
            <img src="img/MARCAInfoPatente.jpg" class="responsive-img valign-wrapper">
          </div>
          <div class="col l4 m7 s6 offset-s3 offset-m2 offset-l2 center-align white-text">
            <h5>InfoPatente</h5>
            <h6>Sistema de apoyo en el Registro de Patentes</h6>
          </div>
          <div class="col l4 right-align">
              <a class="waves-effect btn red lighten-4 black-text " href="Modelo/Session_destroy.php"><i class="material-icons left hide-on-med-and-down">input</i>Cerrar Sesion</a>
          </div>
        </div>
        <div class="row">
            <div class="col s12">
            <ul class="tabs">
                <li class="tab col s4"><a href="#patentes-tab">Patentes</a></li>
                <li class="tab col s4"><a href="#empresas-tab">Empresas</a></li>
                <li class="tab col s4"><a href="#usuarios-tab">Usuarios</a></li>
            </ul>
            </div>
            <div id="patentes-tab" class="col s12"><?php include "patentes-view.php";?></div>
            <div id="empresas-tab" class="col s12"><?php include "empresas-view.php";?></div>
            <div id="usuarios-tab" class="col s12"><?php include "usuarios-view.php";?></div>
        </div>
    </div>
</body>


</html>