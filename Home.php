<?php
session_start();
if(!$_SESSION["logged"]){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="img/check.ico" />
    <title>Sistema de Patentes</title>
  </head>
  <body class="grey lighten-4">

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
<!-- Contenedor De cartas -->
  <div class="container-fluid row red-text text-darken-4">
    <!-- Carta Para Aplicación de patente LARGE-->
    <div class="col l10 m12 s12 offset-l1 ">
      <div class="card small horizontal">
        <div class="card-image">
          <img src="img/NuevaAplicacion.jpg" class="responsive-img hide-on-med-and-down">
        </div>
        <div class="card-stacked">
          <span class="card-title">Nueva Aplicacion</span>
          <div class="card-content red-text text-darken-2">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="card-action">
            <a href="nueva_app.php" class="red-text text-darken-4"><i class="material-icons left">add</i>Crear Nueva Aplicacion</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Cierre de Carta LARGE-->
    <!-- Carta Para Consultar la ultima Pantente Aplicada LARGE -->
    <div class="col l10 m12 s12 offset-l1 ">
      <div class="card small horizontal">
        <div class="card-image">
          <img src="img/UltimaPatenteAplicada.jpg" class="responsive-img hide-on-med-and-down">
        </div>
        <div class="card-stacked">
          <span class="card-title">Ultima Patente Aplicada</span>
          <div class="card-content red-text text-darken-2">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="card-action">
            <a href="#" class="red-text text-darken-4"><i class="material-icons left">today</i>Consultar ultima patente aplicada</a>
          </div>
        </div>
      </div>
    </div>
      <!-- Cierre de Carta LARGE-->
      <!--- Carta Para Consultar Todas las Pantentes Aplicadas LARGE-->
      <div class="col l10 m12 s12 offset-l1">
        <div class="card small horizontal">
          <div class="card-image">
            <img src="img/PatentesAplicadas.jpg" class="responsive-img hide-on-med-and-down">
          </div>
          <div class="card-stacked">
            <span class="card-title">Consultar Patentes Aplicadas</span>
            <div class="card-content red-text text-darken-2">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="card-action">
              <a href="#" class="red-text text-darken-4"><i class="material-icons left">view_list</i>Consultar Todas las patentes aplicadas</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Cierre de Carta LARGE-->
  </div>
<!-- Cierre de Contenedor-->
    <script src="js/jsload/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
  </body>
</html>
