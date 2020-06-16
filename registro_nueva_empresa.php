<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/check.ico" />
    <title>Registro de nueva empresa</title>
    <title></title>
  </head>
  <body class="grey lighten-4">
      <div class="nav-wrapper row red accent-4 z-depth-3">
        <div class="col s12 ">
            <div class="col l2 hide-on-med-and-down" style="margin-top: .75rem;">
              <a href="index.php"><img src="img/MARCAInfoPatente.jpg" class="responsive-img"></a>
            </div>
            <div class="col s12 l8 center-align white-text">
              <h5>Infopatente</h5>
              <h6>Registro de nueva empresa</h6>
            </div>
        </div>
      </div>

      <div class="container">
        <div class="card row col s12 l8 offset-l2">
          <div class="card-action center-align deep-orange lighten-3">
            <span><b>Procedimiento para alta de universidad o Empresa</b></span>
          </div>
          <div class="card-content row">
            <form id='form_empresas'>
              <div class="input-field col l8 s12 offset-l1">
                <i class="material-icons prefix">domain</i>
                <input type="text" id='nombre_empresa' name='nombre_empresa'>
                <label for="nombre_empresa">Nombre Universidad o Empresa</label>
              </div>
              <div class="col s12 center-align card-panel deep-orange lighten-3">
                <h6><b>Representante Legal</b></h6>
              </div>
              <div class="input-field col l8 s12 offset-l1">
                <i class="material-icons prefix">accessibility</i>
                <input type="text" id='nombre_responsable_legal' name='nombre_responsable_legal'>
                <label for="nombre_responsable_legal">Nombre</label>
              </div>
              <div class="input-field col l8 s12 offset-l1">
                <i class="material-icons prefix">markunread_mailbox</i>
                <input type="text" id='direccion1_responsable_legal' name='nombre_responsable_legal'>
                <label for="direccion1_responsable_legal">Direccion 1</label>
              </div>
              <div class="input-field col l8 s12 offset-l1">
                <i class="material-icons prefix grey-text text-darken-3">markunread_mailbox</i>
                <input type="text" id='direccion2_responsable_legal' name='direccion2_responsable_legal'>
                <label for="direccion2_responsable_legal">Direccion 2</label>
              </div>
              <div class="input-field col l8 s12 offset-l1">
                <i class="material-icons prefix">email</i>
                <input type="text" id='email_responsable_legal' name='email_responsable_legal'>
                <label for="email_responsable_legal">Correo Electronico</label>
              </div>
              <div class="input-field col l8 s12 offset-l1">
                <i class="material-icons prefix">phone</i>
                <input type="text" id='tel_responsable_legal' name='tel_responsable_legal'>
                <label for="tel_responsable_legal">Telefono</label>
              </div>
              <div class="col s12 center-align card-panel deep-orange lighten-3">
                <h6><b>Solicitante</b></h6>
              </div>
              <div class="input-field col l8 s12 offset-l1">
                <i class="material-icons prefix">accessibility</i>
                <input type="text" id='nombre_solicitante' name='nombre_solicitante'>
                <label for="nombre_solicitante">Nombre</label>
              </div>
              <div class="input-field col l8 s12 offset-l1">
                <i class="material-icons prefix">mail</i>
                <input type="text" id='email_solicitante' name='email_solicitante'>
                <label for="email_solicitante">Correo Electronico</label>
              </div>
              <div class="input-field col l8 s12 offset-l1">
                <i class="material-icons prefix">phone_iphone</i>
                <input type="text" id='tel_solicitante' name='tel_solicitante'>
                <label for="tel_solicitante">Telefono</label>
              </div>
              <div class="s12 right-align">
                <div class="col l4 right">
                  <button type="submit" class='waves-effect waves-light btn red' id="registrar_empresa">Registrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    <script src="js/jsload/jquery.min.js" charset="utf-8"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="js/jsload/materialize.min.js" charset="utf-8"></script>
    <script src="js/jsload/jsmaterializejq.js" charset="utf-8"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/registro_nueva_empresa.js" charset="utf-8"></script>
  </body>
</html>
