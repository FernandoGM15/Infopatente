<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/check.ico" />
    <title>Nuevo Registro</title>
  </head>
  <body class="grey lighten-4">
    <div class="container-fluid row red accent-4 valign-wrapper z-depth-3">
      <div class="col l2  hide-on-med-and-down">
        <a href="index.php"><img src="img/MARCAInfoPatente.jpg" class="responsive-img"></a>
      </div>
      <div class="col s12 m4 l6 white-text center-align offset-l1">
        <h5>InfoPatente</h5>
        <h6>Nuevo Registro</h6>
      </div>
      <div class="col l3 right-align">
        <div class="col s12 white-text">
          <a href="registro_nueva_empresa.php" class="btn red lighten-4 black-text"><i class="material-icons tiny left">store</i><span class="hide-on-med-and-down">Nueva Empresa</span></a>
        </div>
      </div>
    </div>

  <div class="container">
    <div class="card row">
      <div class="card-action deep-orange lighten-3 center-align">
        <span><b>Para el registro de alumnos, profesores o trabajadores de empresas es necesario contar con numero de identificacion de la universidad o empresa perteneciente</b></span>
      </div>
          <div class="card-content row">
            <div class="col l12">
              <div class="input-field col l4 offset-l2">
                <i class="material-icons prefix">account_circle</i>
                <select id='tipo_de_usuario' class="browser-default col l10 right">
                  <option value="" disabled selected>Tipo de usuario</option>
                  <option value="Alumno">Alumno</option>
                  <option value="Profesor">Profesor</option>
                  <option value="Empleado">Trabajador de empresa</option>
                  <option value="Abogado">Abogado</option>
                  <option value="Independiente">Inventor Independiente</option>
                </select>
              </div>
            </div>
            <div class="col l12" id='registro_folio'">
              <div class="input-field col l5 offset-l1">
                  <i class="material-icons prefix">domain</i>
                  <select class="col l10 right browser-default" id='nombre_empresa'>
                  </select>
              </div>
              <div class="input-field col l4 ">
                <i class="material-icons prefix">fingerprint</i>
                  <input type="text" id='numero_identificacion'>
                  <label for="numero_identificacion">Numero de identificacion</label>
              </div>
              <div class="input-field col l2">
                  <button id='verificar' class="waves-effect waves-light btn red">Verificar</button>
              </div>
            </div>
            <form id='form_registro'>
            <div class="col l12" id='registro_no_folio'>
              <div class="input-field col l8 offset-l2">
                <input type="text" id='Nombre_usuario'>
                <label for="Nombre_usuario">Nombre</label>
              </div>
              <div class="input-field col l8 offset-l2">
                <input type="text" id='ApPaterno_usuario'>
                <label for="ApPaterno_usuario">Apellido Paterno</label>
              </div>
              <div class="input-field col l8 offset-l2">
                <input type="text" id='ApMaterno_usuario'>
                <label for="ApMaterno_usuario">Apellido Materno</label>
              </div>
              <div class="input-field col l5 offset-l2">
                <i class="material-icons prefix">email</i>
                <input type="text" id='Correo_usuario'>
                <label for="Correo_usuario">Correo Elecronico</label>
              </div>
              <div class="input-field col l4 offset-l2">
                <i class="material-icons prefix">markunread_mailbox</i>
                <input type="text" id='CP_usuario'>
                <label for="CP_usuario">Codigo postal</label>
              </div>
              <div class="input-field col l5 offset-l2">
                <i class="material-icons prefix">phone</i>
                <input type="tel" id='Telefono_usuario'>
                <label for="Telefono_usuario">Telefono</label>
              </div>
            </div>
            <div class="col l12 right-align">
              <div class="col l4 right">
                <button type="submit" class='btn red' id='registrar'>Registrar</button>
              </div>
            </div>
            </form>
          </div>
    </div>
  </div>

  <script src="js/jsload/jquery.min.js" charset="utf-8"></script>
  <script src="js/jsload/materialize.min.js" charset="utf-8"></script>
  <script src="js/jsload/materializejq.js" charset="utf-8"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="js/nuevo_usuario.js" charset="utf-8"></script>
  </body>
</html>
