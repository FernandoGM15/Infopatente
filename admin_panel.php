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
    <script src="js/jsload/materializejq.js"></script>
    <script src="js/jsload/dataTables.js"></script>
    <script src="js/jsload/materialize.min.js"></script>
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

    </style>
</head>
<body>
<body class="grey lighten-4">
    <div class="container-fluid red accent-4 z-depth-3">
      <div class="row">
        <div class="valign-wrapper">
          <div class="col l2 left-align hide-on-med-and-down">
            <img src="img/MARCAInfoPatente.jpg" class="logo responsive-img">
          </div>
          <div class="col l6 s9  offset-l1">
            <div class="col s12 center-align white-text">
              <h5>Infopatente</h5>
              <h6>Sistema de apoyo en el registro de patentes</h6>
            </div>
          </div>
          <div class="col l3 s3">
            <div class="col s3 right">
              <a href="Modelo/Session_destroy.php" class="red lighten-4 white-text tooltipped" data-position="left" data-tooltip="Cerrar sesion"><i class="medium material-icons right icono">input</i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
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