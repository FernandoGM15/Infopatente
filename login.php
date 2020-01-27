<!DOCTYPE html>
<html lang="else" dir="ltr">
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
        <div class="col s2 ">
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
            <a href="nuevo_usuario.php" class="btn red lighten-4 black-text"><i class="material-icons tiny left">person_add</i><span>Nuevo Registro</span></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12 l4 offset-l2">
          <div class="card center-align">
            <div class="card-action deep-orange lighten-3 ">
            <b>Para acceder a infopatente necesitas tener una cuenta activa</b>
            </div>
            <div class="card-content ">
              <div class="input-field">
                <input type="text" id='usuario' class="validate">
                <label for="usuario">Usuario</label>
              </div>
              <br>
              <div class="input-field">
                <label for="contraseña">Contraseña</label>
                <input type="password" id='contraseña'>
              </div>
              <div class="center-align">
                <a href="recuperar-contraseña">Olvide mi contraseña</a>
              </div>
            </div>
            <br>
            <div>
              <button type="submit" id='Entrar' class="btn red"><i class="material-icons right">send</i>Entrar</button>
            </div>
            <br>
          </div>
        </div>

      </div>
      <script src="js/jquery.min.js" charset="utf-8"></script>
      <script src="js/login.js" charset="utf-8"></script>
      <script src="js/materialize.min.js" charset="utf-8"></script>
  </body>
</html>
