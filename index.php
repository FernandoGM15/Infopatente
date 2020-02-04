<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/check.ico" />
    <title>Inicio de sesion</title>
  </head>
  <body class="red lighten-4">
    <div class="container-fluid valign-wrapper red accent-4 z-depth-3 row col s12">
        <div class="col l2 hide-on-med-and-down">
            <img src="img/MARCAInfoPatente.jpg" class="responsive-img">
        </div>
        <div class="col s6 offset-s1">
          <div class="col s12 center-align white-text">
            <h5>Infopatente</h5>
            <h6>Sistema de apoyo en el Registro de Patentes</h6>
          </div>
        </div>
        <div class="col s3 right-align">
          <div class="col s12 white-text">
            <a href="nuevo_usuario.php" class="btn red lighten-4 black-text"><i class="material-icons tiny left">person_add</i><span class="hide-on-med-and-down">Nuevo Registro</span></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col l5 card offset-l1">
          <div class="card-content row left-align">
            <div class="col s12 center-align">
              <h6>¿Que es InfoPatente?</h6>
              <p>InfoPatente es un Sistema para el apoyo al registro de Patentes</p>
              <h6 class="left-align">Los servicios que proporciona son los siguientes:</h6>
            </div>
            <div class="col s6 l6">
                <h6>Guía estructurada para el llenado de información general de la patente.</h6>
                  <ul>
                    <li>Título de la Patente</li>
                    <li>Numero de Autores</li>
                    <li>País de aplicación</li>
                    <li>Representante legal</li>
                    <li>Tipo de aplicación</li>
                    <li>Estrategia de solicitud</li>
                    <li>Tarifa de descuento</li>
                    <li>Solicitante</li>
                  </ul>
            </div>
            <div class="col s6 l6">
              <h6>Apoyo en la redacción de la Solicitud de Patente.</h6>
                <ul>
                  <li>Resumen de la invención</li>
                  <li>Antecedentes de la invención</li>
                  <li>Realización preferente / Sumario</li>
                  <li>Breve Descripción de los Dibujos</li>
                  <li>Descripción Detallada del invento</li>
                  <li>Reivindicaciones</li>
                  <li>Objeto / Campo Técnico de la invención</li>
                  <li>Dibujos</li>
                </ul>
            </div>
            <div class="col s6 l6">
              <h6>Informacion administrativa.</h6>
                <ul>
                  <li>Acceso al sistema de internet PASE del IMPI</li>
                </ul>
            </div>
            <div class=" col s6 l6">
              <h6>Búsqueda de Arte Previo relacionado.</h6>
                <ul>
                  <li>Descripción del proceso de búsqueda</li>
                  <li>Búsquedas Nuevas</li>
                  <li>Búsquedas previamente guardadas</li>
                </ul>
            </div>
            <div class="col s12 center-align">
              <p>En cada elemento se da una descripción de lo que hay que hacer o escribir. En el caso de los elementos de la Solicitud de Patente se proporcionan ejemplos de estos elementos en patentes otorgadas en el área similar a la patente que se esta elaborando.</p>
            </div>
          </div>
        </div>
        <div class="col s6 l4 offset-l1 offset-s3">
          <div class="card center-align">
            <div class="card-action deep-orange lighten-3 ">
            <b>Para acceder a infopatente necesitas tener una cuenta activa</b>
            </div>
            <div class="card-content">
              <div class="input-field">
                <input type="text" id='usuario' class="validate">
                <label for="usuario">Usuario</label>
              </div>
              <br>
              <div class="input-field ">
                <label for="contraseña">Contraseña</label>
                <input type="password" id='contraseña'>
              </div>
              <div class="card-content">
                <button type="submit" id='Entrar' class="btn red col s12">Iniciar Sesion</button>
              </div>
              <br>
              <div class="card-content">
                <a href="recuperar_contraseña.php">Olvidé mi contraseña</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="js/jquery.min.js" charset="utf-8"></script>
    <script src="js/login.js" charset="utf-8"></script>
    <script src="js/materializejq.js" charset="utf-8"></script>
    <script src="js/materialize.min.js" charset="utf-8"></script>
  </body>
</html>
