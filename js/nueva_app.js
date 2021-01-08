
//Codigo jquery
$(document).ready(function () {
  //VARIABLE REPRESENTANTE LEGAL
  let representante = [];
  //INICIALIAZACION MODAL
  $('.modal').modal();

  //Generacion de Formularios de Autores
  $('#NumAutores').change(function () {
    let html = "";
    if($("#NomPatente").val() == ""){
      swal({
        title:"Error",
        text:"Favor de ingresar el nombre de la patente para continuar",
        icon:"error",
        button:"Aceptar"
      });
    }
    else{
      for (let i = 1; i <= $(this).val(); i++) {
        html += `
            <h5 class="center-align">Datos Autor ${i}</h5>
            <div class="col s12">
              <div class="row">
                <div class="input-field col s4"> 
                  <input id="NombreAutor${i}" name="NombreAutor${i}" type="text" class="validate" placeholder=""> 
                  <label class="black-text" for="NombreAutor${i}">Nombre </label> 
                </div> 
                <div class="input-field col s4 "> 
                  <input id="ApellidoPAutor${i}" name="ApellidoPAutor${i}" type="text" class="validate" placeholder=""> 
                  <label class="black-text" for="ApellidoPAutor${i}">Apellido Paterno</label> 
                </div> 
                <div class="input-field col s4 "> 
                  <input id="ApellidoMAutor${i}" name="ApellidoMAutor${i}" type="text" class="validate" placeholder=""> 
                  <label class="black-text" for="ApellidoMAutor${i}">Apellido Materno</label> 
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6"> 
                  <input id="Direccion1Autor${i}" name="Direccion1Autor${i}" type="text" class="validate" placeholder=""> 
                  <label class="black-text" for="Direccion1Autor${i}">Direccion 1 (Calle y Numero)</label> 
                </div>
                <div class="input-field col s6"> 
                  <input id="Direccion2Autor${i}" name="Direccion2Autor${i}" type="text" class="validate" placeholder=""> 
                  <label class="black-text" for="Direccion1Autor${i}">Direccion 2 (Colonia)</label> 
                </div>
              </div>
              <div class="row">
                <div class="input-field col s3"> 
                  <select id="PaisAutor${i}" name="PaisAutor${i}" class="browser-default"> 
                    <option disabled selected value>Seleccione pais</option> 
                    <option value="Mexico">Mexico</option> 
                  </select> 
                </div>
                <div class="input-field col s3"> 
                  <select id="EstadoAutor${i}" name="EstadoAutor${i}" class="browser-default"> 
                    <option disabled selected value>Seleccione Estado</option> 
                    <option value="Aguascalientes">Aguascalientes</option> 
                    <option value="Baja California">Baja California</option> 
                    <option value="Baja California Sur">Baja California Sur</option> 
                    <option value="Campeche">Campeche</option> 
                    <option value="Coahuila">Coahuila</option> 
                    <option value="Colima">Colima</option> 
                    <option value="Chiapas">Chiapas</option> 
                    <option value="Chihuahua">Chihuahua</option> 
                    <option value="Ciudad de Mexico">Ciudad de Mexico</option> 
                    <option value="Durango">Durango</option> 
                    <option value="Guanajuato">Guanajuato</option> 
                    <option value="Guerrero">Guerrero</option> 
                    <option value="Hidalgo">Hidalgo</option> 
                    <option value="Jalisco">Jalisco</option> 
                    <option value="Mexico">México</option> 
                    <option value="Michoacan">Michoacán</option> 
                    <option value="Morelos">Morelos</option> 
                    <option value="Nayarit">Nayarit</option> 
                    <option value="Nuevo Leon">Ciudad de Mexico</option> 
                    <option value="Oaxaca">Durango</option> 
                    <option value="Puebla">Puebla</option> 
                    <option value="Queretaro">Querétaro</option> 
                    <option value="Quintana Roo">Quintana Roo </option> 
                    <option value="San Luis Potosi">San Luis Potosí</option> 
                    <option value="Sinaloa ">Sinaloa</option> 
                    <option value="Sonora">Sonora</option> 
                    <option value="Tabasco">Tabasco</option> 
                    <option value="Tamaulipas">Tamaulipas</option> 
                    <option value="Tlaxcala">Tlaxcala</option> 
                    <option value="Veracruz">Veracruz</option> 
                    <option value="Yucatan">Yucatán</option> 
                    <option value="Zacatecas">Zacatecas</option> 
                  </select> 
                </div> 
                <div class="input-field col s3"> 
                  <input id="CiudadAutor${i}" name="CiudadAutor${i}" type="text" class="validate" placeholder=""> 
                  <label class="black-text" for="CiudadAutor${i}">Ciudad</label> 
                </div> 
                <div class="input-field col s3"> 
                  <input id="CPAutor${i}" name="CPAutor${i}" type="text" class="validate" placeholder="" maxlength="5"> 
                  <label class="black-text" for="CPAutor${i}">Codigo Postal</label> 
                </div> 
              </div>
            </div>
          `
      }
      document.getElementById("modal-contenido-autores").innerHTML = html;
      $('#modal-autores').modal('open');
    }
  });

  //SUBMIT FORMULARIO AUTORES
  $("#s-formulario-autores").click(function (e) {
    e.preventDefault();
    let error = 0;
    for (let i = 1; i <= $('#NumAutores').val(); i++) {
      if(i==1){
          representante.push(
            {
              nombre: $(`#NombreAutor${i}`).val().toUpperCase(),
              apellido_paterno: $(`#ApellidoPAutor${i}`).val().toUpperCase(),
              apellido_materno: $(`#ApellidoMAutor${i}`).val().toUpperCase(),
              direccion1: $(`#Direccion1Autor${i}`).val().toUpperCase(),
              direccion2: $(`#Direccion2Autor${i}`).val().toUpperCase(),
              pais: $(`#PaisAutor${i}`).val().toUpperCase(),
              estado: $(`#EstadoAutor${i}`).val().toUpperCase(),
              ciudad: $(`#CiudadAutor${i}`).val().toUpperCase(),
              cp: $(`#CPAutor${i}`).val(),
              nombre_patente: $("#NomPatente").val().toUpperCase()
            }
          )
      }
      $.post("Controlador/AutorController.php", 
        {
          flag:4,
          nombre:$(`#NombreAutor${i}`).val().toUpperCase(),
          apellido_paterno:$(`#ApellidoPAutor${i}`).val().toUpperCase(),
          apellido_materno:$(`#ApellidoMAutor${i}`).val().toUpperCase(),
          direccion1: $(`#Direccion1Autor${i}`).val().toUpperCase(),
          direccion2: $(`#Direccion2Autor${i}`).val().toUpperCase(),
          pais:$(`#PaisAutor${i}`).val().toUpperCase(),
          estado:$(`#EstadoAutor${i}`).val().toUpperCase(),
          ciudad:$(`#CiudadAutor${i}`).val().toUpperCase(),
          cp:$(`#CPAutor${i}`).val(),
          nombre_patente:$("#NomPatente").val().toUpperCase()
        },
        function (data) {
          if(data !="Exito al insertar"){
            error = 1;
          }
        },
        "string"
      );
    }
    if (error == 0){
      swal({
        title:"Exito",
        text:"Los Autores se han registrado Correctamente",
        icon:"success",
        button:"Aceptar"
      });
      $('#modal-autores').modal('close');
      $("#NumAutores").prop('disabled', true);
      $("#NomPatente").prop('disabled', true);
    }
    else{
      swal({
        title:"Error",
        text:"Los Autores no se han registrado Correctamente, Comunicar a soporte",
        icon:"error",
        button:"Aceptar"
      });
    }
  });
  //Cierre de Generacion de Formularios Autores

  //Generacion de Formulario de Representante Legal
  $('input:radio[name=RepresentanteLegal]').change(function (event) {
    if ($('input:radio[name=RepresentanteLegal]:checked').val() == "Si") {
      let html=`<h5 class="center-align">Datos Representante Legal</h5>
      <div class="col s12">
        <div class="row">
          <div class="input-field col s4"> 
            <input id="NombreRL" name="NombreRL" type="text" class="validate" placeholder=""> 
            <label class="black-text" for="NombreRL">Nombre </label> 
          </div> 
          <div class="input-field col s4 "> 
            <input id="ApellidoPRL" name="ApellidoPRL" type="text" class="validate" placeholder=""> 
            <label class="black-text" for="ApellidoPRL">Apellido Paterno</label> 
          </div> 
          <div class="input-field col s4 "> 
            <input id="ApellidoMRL" name="ApellidoMRL" type="text" class="validate" placeholder=""> 
            <label class="black-text" for="ApellidoMRL">Apellido Materno</label> 
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6"> 
            <input id="Direccion1RL" name="Direccion1RL" type="text" class="validate" placeholder=""> 
            <label class="black-text" for="Direccion1RL">Direccion 1 (Calle y Numero)</label> 
          </div>
          <div class="input-field col s6"> 
            <input id="Direccion2RL" name="Direccion2RL" type="text" class="validate" placeholder=""> 
            <label class="black-text" for="Direccion1RL">Direccion 2 (Colonia)</label> 
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3"> 
            <select id="PaisRL" name="PaisRL" class="browser-default"> 
              <option disabled selected value>Seleccione pais</option> 
              <option value="Mexico">Mexico</option> 
            </select> 
          </div>
          <div class="input-field col s3"> 
            <select id="EstadoRL" name="EstadoRL" class="browser-default"> 
              <option disabled selected value>Seleccione Estado</option> 
              <option value="Aguascalientes">Aguascalientes</option> 
              <option value="Baja California">Baja California</option> 
              <option value="Baja California Sur">Baja California Sur</option> 
              <option value="Campeche">Campeche</option> 
              <option value="Coahuila">Coahuila</option> 
              <option value="Colima">Colima</option> 
              <option value="Chiapas">Chiapas</option> 
              <option value="Chihuahua">Chihuahua</option> 
              <option value="Ciudad de Mexico">Ciudad de Mexico</option> 
              <option value="Durango">Durango</option> 
              <option value="Guanajuato">Guanajuato</option> 
              <option value="Guerrero">Guerrero</option> 
              <option value="Hidalgo">Hidalgo</option> 
              <option value="Jalisco">Jalisco</option> 
              <option value="Mexico">México</option> 
              <option value="Michoacan">Michoacán</option> 
              <option value="Morelos">Morelos</option> 
              <option value="Nayarit">Nayarit</option> 
              <option value="Nuevo Leon">Ciudad de Mexico</option> 
              <option value="Oaxaca">Durango</option> 
              <option value="Puebla">Puebla</option> 
              <option value="Queretaro">Querétaro</option> 
              <option value="Quintana Roo">Quintana Roo </option> 
              <option value="San Luis Potosi">San Luis Potosí</option> 
              <option value="Sinaloa ">Sinaloa</option> 
              <option value="Sonora">Sonora</option> 
              <option value="Tabasco">Tabasco</option> 
              <option value="Tamaulipas">Tamaulipas</option> 
              <option value="Tlaxcala">Tlaxcala</option> 
              <option value="Veracruz">Veracruz</option> 
              <option value="Yucatan">Yucatán</option> 
              <option value="Zacatecas">Zacatecas</option> 
            </select> 
          </div> 
          <div class="input-field col s3"> 
            <input id="CiudadRL" name="CiudadRL" type="text" class="validate" placeholder=""> 
            <label class="black-text" for="CiudadRL">Ciudad</label> 
          </div> 
          <div class="input-field col s3"> 
            <input id="CPRL" name="CPRL" type="text" class="validate" placeholder="" maxlength="5"> 
            <label class="black-text" for="CPRL">Codigo Postal</label> 
          </div> 
        </div>
      </div>`
      document.getElementById("modal-contenido-representante").innerHTML = html;
      $("#modal-representante").modal("open");
    }
  });

  $("#s-formulario-RL").click(function (e) { 
    e.preventDefault();
    $.post("Controlador/RepresentanteLegalController.php",
        {
          flag:4,
          nombre:$(`#NombreRL`).val().toUpperCase(),
          apellido_paterno:$(`#ApellidoPRL`).val().toUpperCase(),
          apellido_materno:$(`#ApellidoMRL`).val().toUpperCase(),
          direccion1: $(`#Direccion1RL`).val().toUpperCase(),
          direccion2: $(`#Direccion2RL`).val().toUpperCase(),
          pais:$(`#PaisRL`).val().toUpperCase(),
          estado:$(`#EstadoRL`).val().toUpperCase(),
          ciudad:$(`#CiudadRL`).val().toUpperCase(),
          cp:$(`#CPRL`).val(),
          nombre_patente:$("#NomPatente").val().toUpperCase()
        },
      function (data) {
        if(data =="Exito al insertar"){
          swal({
            title:"Exito",
            text:"El representante legal se ha registrado correctamente",
            icon:"success",
            button:"Aceptar"
          });
        }
        else{
          swal({
            title:"Error",
            text:"El representante legal no se ha registrado correctamente, Comunicar a soporte",
            icon:"error",
            button:"Aceptar"
          });
        }
      }
    );
    $('#modal-representante').modal('close');
  });

  //Decripcion tipos de patentes
  $('#TipoPatente').change(function (event) {
    $('#DescAplicacionPatente').empty();
    if ($('#TipoPatente').val() == 'Utilidad') {
      $('#DescTiposPatente').empty();
      $('#DescTiposPatente').append('Estas patentes incluyen máquinas, aparatos, métodos, procesos, productos, etc.').hide();
      $('#DescTiposPatente').fadeIn(500);
    }
    else if ($('#TipoPatente').val() == 'Diseño') {
      $('#DescTiposPatente').empty();
      $('#DescTiposPatente').append('De esta categoria forman parte las líneas exteriores, la ornamentación, la textura y estética de algo').hide();
      $('#DescTiposPatente').fadeIn(500);
    }
    else {
      $('#DescTiposPatente').empty();
      $('#DescTiposPatente').append('Incluye la clonación de plantas y árboles.').hide();
      $('#DescTiposPatente').fadeIn(500);
    }

    //Llenado de opcion dependiendo de  tipo de TipoEntidad
    switch ($('#TipoPatente').val()) {
      case "Utilidad":
        $('#TipoAplicacion').empty();
        $('#TipoAplicacion').append('<option disabled selected value> Selecciona Opcion</option>');
        $('#TipoAplicacion').append('<option value="Provisional">Provisional</option>');
        $('#TipoAplicacion').append('<option value="No Provisional">No Provisional</option>');
        $('#TipoAplicacion').append('<option value="Etapa Nacional">Etapa Nacional</option>');
        $('#TipoAplicacion').append('<option value="PCT">PCT</option>');
        break;
      case "Planta":
        $('#TipoAplicacion').empty();
        $('#TipoAplicacion').append('<option disabled selected value> Selecciona Opcion</option>');
        $('#TipoAplicacion').append('<option value="No Provisional">No Provisional</option>');
        break;
      case "Diseño":
        $('#TipoAplicacion').empty();
        $('#TipoAplicacion').append('<option disabled selected value> Selecciona Opcion</option>');
        $('#TipoAplicacion').append('<option value="No Provisional">No Provisional</option>');
        break;
    }
  });



  //Descripcion Aplicaciones
  $('#TipoAplicacion').change(function (event) {
    if ($('#TipoAplicacion').val() == 'Provisional') {
      $('#DescAplicacionPatente').empty();
      $('#DescAplicacionPatente').append('Los solicitantes tienen derecho a reclamar el beneficio de una solicitud provisional en una solicitud no provisional correspondiente presentada a más tardar 12 meses después de la fecha de presentación de la solicitud provisional').hide();
      $('#DescAplicacionPatente').fadeIn(500);
    }
    else if ($('#TipoAplicacion').val() == 'No Provisional') {
      $('#DescAplicacionPatente').empty();
      $('#DescAplicacionPatente').append('Una solicitud de patente de utilidad no provisional debe incluir una especificación, que incluye un reclamo o reclamos; dibujos, cuando sea necesario; un juramento o declaración; y las tarifas prescritas de presentación, búsqueda y examen.').hide();
      $('#DescAplicacionPatente').fadeIn(500);
    }
    else if ($('#TipoAplicacion').val() == 'Etapa Nacional') {
      $('#DescAplicacionPatente').empty();
      $('#DescAplicacionPatente').append('Un procesamiento de etapa nacional comienza con la presentación de una solicitud internacional y finaliza (en el caso de un resultado favorable para el solicitante) con la concesión de una serie de patentes nacionales y / o regionales.').hide();
      $('#DescAplicacionPatente').fadeIn(500);
    }
    else {
      $('#DescAplicacionPatente').empty();
      $('#DescAplicacionPatente').append('El PCT facilita la obtención de protección para las invenciones cuando se busca dicha protección en cualquiera o en todos los Estados contratantes del PCT. Proporciona la presentación de una solicitud de patente ("la solicitud internacional"), con efecto en varios Estados, en lugar de presentar varias solicitudes de patente nacionales y / o regionales por separado.').hide();
      $('#DescAplicacionPatente').fadeIn(500);
    }
  });

  $('input:radio[name=Cesion]').change(function (event) {
    if ($('input:radio[name=Cesion]:checked').val() == "Si") {
      let html=`
      <h5 class="center-align">Datos Cesionario</h5>
      <div class="col s12">
        <div class="row">
          <div class="input-field col s4"> 
            <input id="NombreCesion" name="NombreCesion" type="text" class="validate" placeholder=""> 
            <label class="black-text" for="NombreCesion">Nombre </label> 
          </div> 
          <div class="input-field col s4 "> 
            <input id="ApellidoPCesion" name="ApellidoPCesion" type="text" class="validate" placeholder=""> 
            <label class="black-text" for="ApellidoPCesion">Apellido Paterno</label> 
          </div> 
          <div class="input-field col s4 "> 
            <input id="ApellidoMCesion" name="ApellidoMCesion" type="text" class="validate" placeholder=""> 
            <label class="black-text" for="ApellidoMCesion">Apellido Materno</label> 
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6"> 
            <input id="Direccion1Cesion" name="Direccion1Cesion" type="text" class="validate" placeholder=""> 
            <label class="black-text" for="Direccion1Cesion">Direccion 1 (Calle y Numero)</label> 
          </div>
          <div class="input-field col s6"> 
            <input id="Direccion2Cesion" name="Direccion2Cesion" type="text" class="validate" placeholder=""> 
            <label class="black-text" for="Direccion1Cesion">Direccion 2 (Colonia)</label> 
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3"> 
            <select id="PaisCesion" name="PaisCesion" class="browser-default"> 
              <option disabled selected value>Seleccione pais</option> 
              <option value="Mexico">Mexico</option> 
            </select> 
          </div>
          <div class="input-field col s3"> 
            <select id="EstadoCesion" name="EstadoCesion" class="browser-default"> 
              <option disabled selected value>Seleccione Estado</option> 
              <option value="Aguascalientes">Aguascalientes</option> 
              <option value="Baja California">Baja California</option> 
              <option value="Baja California Sur">Baja California Sur</option> 
              <option value="Campeche">Campeche</option> 
              <option value="Coahuila">Coahuila</option> 
              <option value="Colima">Colima</option> 
              <option value="Chiapas">Chiapas</option> 
              <option value="Chihuahua">Chihuahua</option> 
              <option value="Ciudad de Mexico">Ciudad de Mexico</option> 
              <option value="Durango">Durango</option> 
              <option value="Guanajuato">Guanajuato</option> 
              <option value="Guerrero">Guerrero</option> 
              <option value="Hidalgo">Hidalgo</option> 
              <option value="Jalisco">Jalisco</option> 
              <option value="Mexico">México</option> 
              <option value="Michoacan">Michoacán</option> 
              <option value="Morelos">Morelos</option> 
              <option value="Nayarit">Nayarit</option> 
              <option value="Nuevo Leon">Ciudad de Mexico</option> 
              <option value="Oaxaca">Durango</option> 
              <option value="Puebla">Puebla</option> 
              <option value="Queretaro">Querétaro</option> 
              <option value="Quintana Roo">Quintana Roo </option> 
              <option value="San Luis Potosi">San Luis Potosí</option> 
              <option value="Sinaloa ">Sinaloa</option> 
              <option value="Sonora">Sonora</option> 
              <option value="Tabasco">Tabasco</option> 
              <option value="Tamaulipas">Tamaulipas</option> 
              <option value="Tlaxcala">Tlaxcala</option> 
              <option value="Veracruz">Veracruz</option> 
              <option value="Yucatan">Yucatán</option> 
              <option value="Zacatecas">Zacatecas</option> 
            </select> 
          </div> 
          <div class="input-field col s3"> 
            <input id="CiudadCesion" name="CiudadCesion" type="text" class="validate" placeholder=""> 
            <label class="black-text" for="CiudadCesion">Ciudad</label> 
          </div> 
          <div class="input-field col s3"> 
            <input id="CPCesion" name="CPCesion" type="text" class="validate" placeholder="" maxlength="5"> 
            <label class="black-text" for="CPCesion">Codigo Postal</label> 
          </div> 
        </div>
      </div>`;
      document.getElementById("modal-contenido-cesion").innerHTML = html;
      $("#modal-cesion").modal("open");
    }
  });

  $("#s-formulario-cesion").click(function (e) { 
    e.preventDefault();
    $.post("Controlador/CesionarioController.php",
        {
          flag:4,
          nombre:$(`#NombreCesion`).val().toUpperCase(),
          apellido_paterno:$(`#ApellidoPCesion`).val().toUpperCase(),
          apellido_materno:$(`#ApellidoMCesion`).val().toUpperCase(),
          direccion1: $(`#Direccion1Cesion`).val().toUpperCase(),
          direccion2: $(`#Direccion2Cesion`).val().toUpperCase(),
          pais:$(`#PaisCesion`).val().toUpperCase(),
          estado:$(`#EstadoCesion`).val().toUpperCase(),
          ciudad:$(`#CiudadCesion`).val().toUpperCase(),
          cp:$(`#CPCesion`).val(),
          nombre_patente:$("#NomPatente").val().toUpperCase()
        },
      function (data) {
        if(data =="Exito al insertar"){
          swal({
            title:"Exito",
            text:"El Cesionario se ha registrado correctamente",
            icon:"success",
            button:"Aceptar"
          });
        }
        else{
          swal({
            title:"Error",
            text:"El Cesionario no se ha registrado correctamente, Comunicar a soporte",
            icon:"error",
            button:"Aceptar"
          });
        }
      }
    );
    $('#modal-cesion').modal('close');
  });
  //Datos de Autores  almacenados en JSON
  $('#form-patente').submit(function (e) {
    e.preventDefault();
    if($('input:radio[name=RepresentanteLegal]:checked').val() == "No"){
      $.post("Controlador/RepresentanteLegalController.php", 
        {
          flag:4,
          nombre: representante[0].nombre,
          apellido_paterno: representante[0].apellido_paterno,
          apellido_materno: representante[0].apellido_materno,
          direccion1: representante[0].direccion1,
          direccion2: representante[0].direccion2,
          pais: representante[0].pais,
          estado: representante[0].estado,
          ciudad: representante[0].ciudad,
          cp: representante[0].cp,
          nombre_patente: representante[0].nombre_patente,
        }
      );
    }
    $.post("Controlador/PatenteController.php", 
      {
        flag:4,
        nombre: $("#NomPatente").val().toUpperCase(),
        pais_presentacion: $('select[name=PaisAplicacion] option').filter(':selected').val().toUpperCase(),
        entidad_pequeña: $('input[name="TipoEntidad"]:checked').val().toUpperCase(),
        tipo: $('select[name=TipoPatente] option').filter(':selected').val().toUpperCase(),
        aplicacion: $('select[name=TipoAplicacion] option').filter(':selected').val().toUpperCase(),
      },
      function (data) {
        if (data == "Exito al insertar"){
          swal({
            title:"Exito",
            text:"La patente ha sido registrada correctamente",
            icon:"success",
            button:"Aceptar"
          }).then(function() {
            location.href="Home.php";
            });;
        }
        else{
          swal({
            title:"Error",
            text:"La patente no ha sido registrada correctamente, comuniquese con soporte",
            icon:"success",
            button:"Aceptar"
          });
        }
      }
    );
  });//Ciere FORM SUBMIT

});
