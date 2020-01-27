<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/check.ico" />
  <title>Nueva Patente</title>
</head>

<body class="red lighten-4">
  <div class="container-fluid row red accent-4 valign-wrapper z-depth-3">
    <div class="col s4 m4 l2 ">
      <a href="index.html" class="btn red lighten-4 black-text"><i class="material-icons tiny left">arrow_back</i><span
          class="hide-on-med-and-down">Regresar</span></a>
    </div>
    <div class="col s7 m4 l6 offset-l1 offset-s1 white-text center-align ">
      <h5>Nueva Patente</h5>
    </div>
    <div class="col l2 m3 offset-m1 offset-l1  hide-on-small-only">
      <img src="img/MARCAInfoPatente.jpg" class="responsive-img">
    </div>
  </div>

  <form id="form-patente" class="container-fluid">
    <div class="card-panel row grey lighten-5">
        <div class="col s12">
          <div class="col s12 l5 offset-l1">

            <div class="input-field col s12">
              <h6><li>Ingrese Titulo de su patente</li> </h6>
            <input id="NomPatente" type="text" class="validate">
            <a href="#" class="right black-text"><i class="material-icons tiny tooltipped" data-tooltip="Trate de ser conciso y descriptivo de lo que es o hace la patente.
            Este nombre no es un nombre de archivo.">help</i></a>
          </div>
        </div>
        <div class="col s12 l5">
          <div class="input-field input-field col s12 m4 l6 right">
              <h6 ><li>Ingrese Numero de Autores</li> </h6>
            <select id="NumAutores" class="browser-default">
              <option disabled selected value>Seleccione</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            <a href="#" class="right black-text"><i class="material-icons tiny tooltipped"
            data-tooltip="Todos los autores son considerados de tener los mismos e iguales derechos.">help</i></a>
          </div>
        </div>
        <div id="formularioDatosAutores">
        </div>
      </div>
    <div class="col s12 center-align">
      <div class= "col s12 l4">
        <h6><li>Pais donde esta patente sera presentada</li></h6>
        <div class="input-field col s12 l4 offset-l4">
          <select id="PaisAplicacion" class="browser-default">
            <option disabled selected value> Seleccione</option>
            <option value="Mexico">Mexico</option>
          </select>
            <a href="#" class="right black-text"><i class="material-icons tiny tooltipped" data-tooltip="Si el pais que necesita no esta disponible, contactar: adiministrador@infopatente.mx">help</i></a>
        </div>
      </div>
      <div class="col s12 l4">
        <h6><li>¿Se clasifica como entidad pequeña?</li></h6>
        <div class="input-field col s12 l4 offset-l4">
          <p>
          <label>
          <input type="radio" name="TipoEntidad" class="with-gap" value="Si">
          <span>Si</span>
          </label>
        </p>
        <p>
          <label >
          <input type="radio" name="TipoEntidad" class="with-gap" value="No">
          <span>No</span>
          </label>
        </p>
          <a href="#" class="right black-text"><i class="material-icons tiny tooltipped" data-tooltip="Una entidad pequeña se define como: persona, empresa pequeña u organización sin fines de lucro">help</i></a>
        </div>
      </div>
      <div class="col s12 l4">
        <h6 class=""><li>¿Desea Agregar un Representante legal?</li></h6>
        <div class="input-field col s12 l4 offset-l4">
          <p>
          <label>
          <input type="radio" name="RepresentanteLegal" class="with-gap" value="Si">
          <span>Si</span>
          </label>
        </p>
        <p>
          <label >
          <input type="radio" name="RepresentanteLegal" class="with-gap"  value="No">
          <span>No</span>
          </label>
        </p>
          <a href="#" class="right black-text"><i class="material-icons tiny tooltipped" data-tooltip="Si no deasea agregar representante legal, el primer autor sera considerado como tal">help</i></a>
        </div>
      </div>
    </div>
      <div id="formularioRepresentante">
      </div>
      <div class="col s12 center align">
        <div class="col s12 l4">
          <h6><li>Seleccione tipo de patente</li></h6>
          <div class="input-field col s12 l4 offset-l4">
            <select id="TipoPatentente" class="browser-default">
              <option disabled selected value> Selecciona Opcion</option>
              <option value="Utilidad">Utilidad</option>
              <option value="Diseño">Diseño</option>
              <option value="Planta">Planta</option>
            </select>
            <a href="#" class="right black-text"><i class="material-icons tiny tooltipped" data-tooltip="Seleccione una opcion para desplegar una pequeña descripcion">help</i></a>
          </div>
          <p class="col s12" id="DescTiposPatente"></p>
        </div>
        <div class="col s12 l4">
          <h6><li>Seleccione tipo de Aplicacion</li></h6>
          <div class="input-field col s12 l6 offset-l3">
            <select id="TipoAplicacion" class="browser-default">
              <option disabled selected value> Selecciona Opcion</option>
            </select>
            <a href="#" class="right black-text"><i class="material-icons tiny tooltipped" data-tooltip="Seleccione una opcion para desplegar una pequeña descripcion">help</i></a>
          </div>
          <p class="col s12" id= "DescAplicacionPatente"></p>
        </div>
        <div class="col s12 l4">
          <h6><li>¿Desea agregar un cesionario?</li></h6>
          <div class="input-field col s12 l4 offset-l4">
            <p>
            <label>
            <input type="radio" name="Cesion" class="with-gap "value="Si">
            <span>Si</span>
            </label>
          </p>
          <p>
            <label >
            <input type="radio" name="Cesion" class="with-gap" value="No">
            <span>No</span>
            </label>
          </p>
            <a href="#" class="right black-text"><i class="material-icons tiny tooltipped" data-tooltip="Una entidad pequeña se define como: persona, empresa pequeña u organización sin fines de lucro">help</i></a>
          </div>
        </div>
      </div>
      <div id="formulariocesion">

      </div>
      <div class="col s12 right-align">
        <button type="submit" id="enviar" class="btn red waves-effect">Enviar</button>
      </div>
    </div>
  </form>
  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/componentes.js"></script>

</body>

</html>
