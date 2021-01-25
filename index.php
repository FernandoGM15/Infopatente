<?php
  session_start();
  if(isset($_SESSION["logged"])){
    if($_SESSION["data"]->tipo == "ADMINISTRADOR"){
      header('Location:admin_panel.php');
    }
    else{
      header('Location: Home.php');
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/check.ico" />
    <title>Inicio de sesion</title>
    <style>
      .logo{
        border-radius: .25rem;
      }

      .servicios{
          overflow-y: auto;
          height: 32.4rem;
        }
    </style>
  </head>
  <body class="grey lighten-4">
    <div class="container-fluid red accent-4 z-depth-3">
      <div class="row">
        <div class="valign-wrapper">
          <div class="col l2 left-align hide-on-med-and-down">
            <img src="img/MARCAInfoPatente.jpg" class="logo responsive-img">
          </div>
          <div class="col l6 m9  offset-l1">
            <div class="col s12 center-align white-text">
              <h5>Infopatente</h5>
              <h6>Sistema de apoyo en el registro de patentes</h6>
            </div>
          </div>
          <div class="col l3 m3">
            <div class="col s3 right">
              <a id="Logout" href="nuevo_usuario.php" class="red lighten-4 white-text tooltipped" data-position="left" data-tooltip="Crear usuario"><i class="medium material-icons right icono">person_add</i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col l6 m12">
          <div class="container">
            <div class="card">
              <div class="card-action deep-orange lighten-3 ">
              <b>Para acceder a infopatente necesitas tener una cuenta activa</b>
              </div>
              <div class="card-content">
              <form id='login'>
                <div class="input-field">
                  <input type="email" id='usuario' class="validate">
                  <label for="usuario">Email</label>
                </div>
                <br>
                <div class="input-field ">
                  <input type="password" id='contra'>
                  <label for="contra">Contraseña</label>
                </div>
                <div class="card-content">
                  <button class="btn waves-effect waves-light col s12 red" type="submit" >Iniciar sesion</button>
                </div>
              </form>
                <br>
                <div class="card-content">
                  <a href="recuperar_contra.php">Olvidé mi contraseña</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col m12 l6">
          <div class="card">
            <div class="card-content servicios">
              <div class="row">
                <span class="card-title center-align">¿Que es Infopatente?</span>
                <h6>Infopatente es un sistema para el apoyo al registro de patentes.<br>
                Los servicios que proporciona son los siguientes:</h6>
              </div>
              <div class="row">
                <div class="col s12 l6">
                  <h6><b>Guía estructurada para el llenado de información general de la patente.</b></h6>
                  <ul>
                    <li><i class="material-icons tiny prefix">check</i>Titulo de la patente</li>
                    <li><i class="material-icons tiny prefix">check</i>Numero de Autores</li>
                    <li><i class="material-icons tiny prefix">check</i>País de aplicación</li>
                    <li><i class="material-icons tiny prefix">check</i>Representante legal</li>
                    <li><i class="material-icons tiny prefix">check</i>Tipo de aplicación</li>
                    <li><i class="material-icons tiny prefix">check</i>Estrategia de solicitud</li>
                    <li><i class="material-icons tiny prefix">check</i>Tarifa de descuento</li>
                    <li><i class="material-icons tiny prefix">check</i>Solicitante</li>
                  </ul>
                </div>
                <div class="col s12 l6">
                  <h6><b>Apoyo en la redacción de la Solicitud de Patente.</b></h6>
                  <ul>
                    <li><i class="material-icons tiny prefix">check</i>Resumen de la invención</li>
                    <li><i class="material-icons tiny prefix">check</i>Antecedentes de la invención</li>
                    <li><i class="material-icons tiny prefix">check</i>Realización preferente / Sumario</li>
                    <li><i class="material-icons tiny prefix">check</i>Breve Descripción de los Dibujos</li>
                    <li><i class="material-icons tiny prefix">check</i>Descripción Detallada del invento</li>
                    <li><i class="material-icons tiny prefix">check</i>Reivindicaciones</li>
                    <li><i class="material-icons tiny prefix">check</i>Objeto / Campo Técnico de la invención</li>
                    <li><i class="material-icons tiny prefix">check</i>Dibujos</li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col s12 l6">
                  <h6><b>Informacion administrativa.</b></h6>
                  <ul>
                    <li><i class="material-icons tiny prefix">check</i>Acceso al sistema de internet PASE del IMPI</li>
                  </ul>
                </div>
                <div class=" col s12 l6">
                  <h6><b>Búsqueda de Arte Previo relacionado.</b></h6>
                    <ul>
                      <li><i class="material-icons tiny prefix">check</i>Descripción del proceso de búsqueda</li>
                      <li><i class="material-icons tiny prefix">check</i>Búsquedas Nuevas</li>
                      <li><i class="material-icons tiny prefix">check</i>Búsquedas previamente guardadas</li>
                    </ul>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <p>En cada elemento se da una descripción de lo que hay que hacer o escribir. En el caso de los elementos de la Solicitud de Patente se proporcionan ejemplos de estos elementos en patentes otorgadas en el área similar a la patente que se esta elaborando.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 
        <div class="col s6 l4 offset-l1 offset-s3">
          <div class="card center-align">
            <div class="card-action deep-orange lighten-3 ">
            <b>Para acceder a infopatente necesitas tener una cuenta activa</b>
            </div>
            <div class="card-content">
            <form id='login'>
              <div class="input-field">
                <input type="email" id='usuario' class="validate">
                <label for="usuario">Email</label>
              </div>
              <br>
              <div class="input-field ">
                <input type="password" id='contra'>
                <label for="contra">Contraseña</label>
              </div>
              <div class="card-content">
                <button class="btn waves-effect waves-light col s12 red" type="submit" >Iniciar sesion</button>
              </div>
            </form>
              <br>
              <div class="card-content">
                <a href="recuperar_contra.php">Olvidé mi contraseña</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    <script src="js/jsload/jquery.min.js" charset="utf-8"></script>
    <script src="js/jsload/materialize.min.js" charset="utf-8"></script>
    <script src="js/jsload/materializejq.js" charset="utf-8"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/index.js" charset="utf-8"></script>
  </body>
</html>
