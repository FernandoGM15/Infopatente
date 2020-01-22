//Codigo JS

  //Funcion Para generar los formularios segun Num. de autores
    function htmlform(NumAutores) {
        for (let i = 1; i<= NumAutores; i++) {
            $('#formularioDatosAutores').append('<div class="col s12 card"> <h5 class="center-align">Datos Autor '+i+'</h5><div class="col s12"> <div class="input-field col s12 m8 l4"> <input id="NombreAutor'+i+'" type="text" class="validate" placeholder=""> <label class="black-text" for="NombreAutor'+i+'">Nombre </label> </div> <div class="input-field col s12 m8 l4 "> <input id="ApellidoPAutor'+i+'" type="text" class="validate" placeholder=""> <label class="black-text" for="ApellidoPAutor'+i+'">Apellido Paterno</label> </div> <div class="input-field col s12 m8 l4 "> <input id="ApellidoMAutor'+i+'" type="text" class="validate" placeholder=""> <label class="black-text" for="ApellidoMAutor'+i+'">Apellido Materno</label> </div> <div class="input-field col s12 m10 l6"> <input id="Direccion1Autor'+i+'" type="text" class="validate" placeholder=""> <label class="black-text" for="Direccion1Autor'+i+'">Direccion 1</label> </div> <div class="input-field col s12 m10 l6"> <input id="Direccion2Autor'+i+'" type="text" class="validate" placeholder=""> <label class="black-text" for="Direccion2Autor'+i+'">Direccion 2</label> </div> <div class="input-field col s8 m6 l3 "> <input id="CiudadAutor'+i+'" type="text" class="validate" placeholder=""> <label class="black-text" for="CiudadAutor'+i+'">Ciudad</label> </div> <div class="input-field col s8 m6 l3"> <select id="EstadoAutor'+i+'" class="browser-default"> <option disabled selected value>Seleccione Estado</option> <option value="Aguascalientes">Aguascalientes</option> <option value="Baja California">Baja California</option> <option value="Baja California Sur">Baja California Sur</option> <option value="Campeche">Campeche</option> <option value="Coahuila">Coahuila</option> <option value="Colima">Colima</option> <option value="Chiapas">Chiapas</option> <option value="Chihuahua">Chihuahua</option> <option value="Ciudad de Mexico">Ciudad de Mexico</option> <option value="Durango">Durango</option> <option value="Guanajuato">Guanajuato</option> <option value="Guerrero">Guerrero</option> <option value="Hidalgo">Hidalgo</option> <option value="Jalisco">Jalisco</option> <option value="Mexico">México</option> <option value="Michoacan">Michoacán</option> <option value="Morelos">Morelos</option> <option value="Nayarit">Nayarit</option> <option value="Nuevo Leon">Ciudad de Mexico</option> <option value="Oaxaca">Durango</option> <option value="Puebla">Puebla</option> <option value="Queretaro">Querétaro</option> <option value="Quintana Roo">Quintana Roo </option> <option value="San Luis Potosi">San Luis Potosí</option> <option value="Sinaloa ">Sinaloa</option> <option value="Sonora">Sonora</option> <option value="Tabasco">Tabasco</option> <option value="Tamaulipas">Tamaulipas</option> <option value="Tlaxcala">Tlaxcala</option> <option value="Veracruz">Veracruz</option> <option value="Yucatan">Yucatán</option> <option value="Zacatecas">Zacatecas</option> </select> </div> <div class="input-field col s8 m6 l3"> <input id="CPAutor'+i+'" type="text" class="validate" placeholder=""> <label class="black-text" for="CPAutor'+i+'">Codigo Postal</label> </div> <div class="input-field col s8 m6 l3"> <select id="PaisAutor'+i+'" class="browser-default"> <option disabled selected value>Seleccione pais</option> <option value="Mexico">Mexico</option> </select> </div> </div> </div>').hide();
        }
    }

    function htmlformRL(){
      $('#formularioRepresentante').append('<div class="col s12 card"> <h5 class="center-align">Datos Representante Legal </h5><div class="input-field col s12 m8 l4"> <input id="NombreRep" type="text" class="validate" placeholder=""> <label class="black-text" for="NombreRep">Nombre</label> </div> <div class="input-field col s12 m8 l4 "> <input id="ApellidoPRep" type="text" class="validate" placeholder=""> <label class="black-text" for="ApellidoPRep">Apellido Paterno</label> </div> <div class="input-field col s12 m8 l4 "> <input id="ApellidoMRep" type="text" class="validate" placeholder=""> <label class="black-text" for="ApellidoMRep">Apellido Materno</label> </div> <div class="input-field col s12 m10 l6"> <input id="Direccion1Rep" type="text" class="validate" placeholder=""> <label class="black-text" for="Direccion1Rep">Direccion 1</label> </div> <div class="input-field col s12 m10 l6"> <input id="Direccion2Rep" type="text" class="validate" placeholder=""> <label class="black-text" for="Direccion2Rep">Direccion 2</label> </div> <div class="input-field col s8 m6 l3 "> <input id="CiudadRep" type="text" class="validate" placeholder=""> <label class="black-text" for="CiudadRep">Ciudad</label> </div> <div class="input-field col s8 m6 l3"> <select id="EstadoRep" class="browser-default"> <option disabled selected value>Seleccione Estado</option> <option value="Aguascalientes">Aguascalientes</option> <option value="Baja California">Baja California</option> <option value="Baja California Sur">Baja California Sur</option> <option value="Campeche">Campeche</option> <option value="Coahuila">Coahuila</option> <option value="Colima">Colima</option> <option value="Chiapas">Chiapas</option> <option value="Chihuahua">Chihuahua</option> <option value="Ciudad de Mexico">Ciudad de Mexico</option> <option value="Durango">Durango</option> <option value="Guanajuato">Guanajuato</option> <option value="Guerrero">Guerrero</option> <option value="Hidalgo">Hidalgo</option> <option value="Jalisco">Jalisco</option> <option value="Mexico">México</option> <option value="Michoacan">Michoacán</option> <option value="Morelos">Morelos</option> <option value="Nayarit">Nayarit</option> <option value="Nuevo Leon">Ciudad de Mexico</option> <option value="Oaxaca">Durango</option> <option value="Puebla">Puebla</option> <option value="Queretaro">Querétaro</option> <option value="Quintana Roo">Quintana Roo </option> <option value="San Luis Potosi">San Luis Potosí</option> <option value="Sinaloa ">Sinaloa</option> <option value="Sonora">Sonora</option> <option value="Tabasco">Tabasco</option> <option value="Tamaulipas">Tamaulipas</option> <option value="Tlaxcala">Tlaxcala</option> <option value="Veracruz">Veracruz</option> <option value="Yucatan">Yucatán</option> <option value="Zacatecas">Zacatecas</option> </select> </div> <div class="input-field col s8 m6 l3"> <input id="CPRep" type="text" class="validate" placeholder=""> <label class="black-text" for="CPRep">Codigo Postal</label> </div> <div class="input-field col s8 m6 l3"> <select id="PaisRep" class="browser-default"> <option disabled selected value>Seleccione pais</option> <option value="Mexico">Mexico</option> </select> </div> </div> </div>').hide();

    }

    function htmlformAss() {
      $('#formulariocesion').append('<div class="col s12 card"> <h5 class="center-align">Datos Cesionario </h5> <div class="col s12"> <div class="input-field col s12 m8 l4"> <input id="NombreCes" type="text" class="validate" placeholder=""> <label class="black-text" for="NombreCes">Nombre</label> </div> <div class="input-field col s12 m8 l4 "> <input id="ApellidoPCes" type="text" class="validate" placeholder=""> <label class="black-text" for="ApellidoPCes">Apellido Paterno</label> </div> <div class="input-field col s12 m8 l4 "> <input id="ApellidoMCes" type="text" class="validate" placeholder=""> <label class="black-text" for="ApellidoMCes">Apellido Materno</label> </div> <div class="input-field col s12 m10 l6"> <input id="Direccion1Ces" type="text" class="validate" placeholder=""> <label class="black-text" for="Direccion1Ces">Direccion 1</label> </div> <div class="input-field col s12 m10 l6"> <input id="Direccion2Ces" type="text" class="validate" placeholder=""> <label class="black-text" for="Direccion2Ces">Direccion 2</label> </div> <div class="input-field col s8 m6 l3 "> <input id="CiudadCes" type="text" class="validate" placeholder=""> <label class="black-text" for="CiudadCes">Ciudad</label> </div> <div class="input-field col s8 m6 l3"> <select id="EstadoCes" class="browser-default"> <option disabled selected value>Seleccione Estado</option> <option value="Aguascalientes">Aguascalientes</option> <option value="Baja California">Baja California</option> <option value="Baja California Sur">Baja California Sur</option> <option value="Campeche">Campeche</option> <option value="Coahuila">Coahuila</option> <option value="Colima">Colima</option> <option value="Chiapas">Chiapas</option> <option value="Chihuahua">Chihuahua</option> <option value="Ciudad de Mexico">Ciudad de Mexico</option> <option value="Durango">Durango</option> <option value="Guanajuato">Guanajuato</option> <option value="Guerrero">Guerrero</option> <option value="Hidalgo">Hidalgo</option> <option value="Jalisco">Jalisco</option> <option value="Mexico">México</option> <option value="Michoacan">Michoacán</option> <option value="Morelos">Morelos</option> <option value="Nayarit">Nayarit</option> <option value="Nuevo Leon">Ciudad de Mexico</option> <option value="Oaxaca">Durango</option> <option value="Puebla">Puebla</option> <option value="Queretaro">Querétaro</option> <option value="Quintana Roo">Quintana Roo </option> <option value="San Luis Potosi">San Luis Potosí</option> <option value="Sinaloa ">Sinaloa</option> <option value="Sonora">Sonora</option> <option value="Tabasco">Tabasco</option> <option value="Tamaulipas">Tamaulipas</option> <option value="Tlaxcala">Tlaxcala</option> <option value="Veracruz">Veracruz</option> <option value="Yucatan">Yucatán</option> <option value="Zacatecas">Zacatecas</option> </select> </div> <div class="input-field col s8 m6 l3"> <input id="CPCes" type="text" class="validate" placeholder=""> <label class="black-text" for="CPCes">Codigo Postal</label> </div> <div class="input-field col s8 m6 l3"> <select id="PaisCes" class="browser-default"> <option disabled selected value>Seleccione pais</option> <option value="Mexico">Mexico</option> </select> </div> </div> </div>').hide();
    }
//Codigo jquery

  //Documento Listo
$(document).ready(function () {
    //Generacion de Formularios de Autores
    $('#NumAutores').change(function () {
        $('#formularioDatosAutores').empty();
        htmlform($('#NumAutores').val());
        $('#formularioDatosAutores').fadeIn(800);
    });
    //Cierre de Generacion de Formularios Autores

    $('input:radio[name=TipoEntidad]').change(function(event) {
      console.log($('input:radio[name=TipoEntidad]:checked').val());
    });

    //Generacion de Formulario de Representante Legal
  $('input:radio[name=RepresentanteLegal]').change(function(event) {
    if($('input:radio[name=RepresentanteLegal]:checked').val()== "Si"){
      $('#formularioRepresentante').empty();
      htmlformRL();
      $('#formularioRepresentante').fadeIn(800);
    }
    else{
      $('#formularioRepresentante').fadeOut(200);
    }
  });

    //Decripcion tipos de patentes
  $('#TipoPatentente').change(function(event) {
    $('#DescAplicacionPatente').empty();
      if($('#TipoPatentente').val() == 'Utilidad'){
        $('#DescTiposPatente').empty();
        $('#DescTiposPatente').append('Estas patentes incluyen máquinas, aparatos, métodos, procesos, productos, etc.').hide();
        $('#DescTiposPatente').fadeIn(500);
      }
      else if ($('#TipoPatentente').val() == 'Diseño') {
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
      switch ($('#TipoPatentente').val()) {
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
    $('#TipoAplicacion').change(function(event) {
      if($('#TipoAplicacion').val() == 'Provisional'){
        $('#DescAplicacionPatente').empty();
        $('#DescAplicacionPatente').append('Los solicitantes tienen derecho a reclamar el beneficio de una solicitud provisional en una solicitud no provisional correspondiente presentada a más tardar 12 meses después de la fecha de presentación de la solicitud provisional').hide();
        $('#DescAplicacionPatente').fadeIn(500);
      }
      else if($('#TipoAplicacion').val() == 'No Provisional') {
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

    //Formulario cesion
    $('#Cesion').change(function(event) {
        if($('#Cesion').val()== "Si"){
          htmlformAss()
          $('#formulariocesion').fadeIn(800);
        }
        else{
            $('#formulariocesion').fadeOut(800);
          $('#formulariocesion').empty();

        }
    });

    //Inicializacion JSON para almacenar Datos Autores
      var datosAutor = [];
      var datosRepLeg=[];
      var datosPatente=[];
      var datosCes=[];
    //Datos de Autores  almacenados en JSON
    $('#form-patente').submit(function(event) {
      event.preventDefault();
      //Insertar Tabla Autores
      for ( var i = 1 ; i <= $('#NumAutores').val(); i++) {
        datosAutor.push({
          'PatenteA': $('#NomPatente').val(),
          'NombreA': $('#NombreAutor'+i).val(),
          'ApellidoPA': $('#ApellidoPAutor'+i).val(),
          'ApellidoMA': $('#ApellidoMAutor'+i).val(),
          'Direccion1A': $('#Direccion1Autor'+i).val(),
          'Direccion2A': $('#Direccion2Autor'+i).val(),
          'CiudadA': $('#CiudadAutor'+i).val(),
          'EstadoA': $('#EstadoAutor'+i).val(),
          'CPA':$('#CPAutor'+i).val(),
          'PaisA':$('#PaisAutor'+i).val()
        });
        //Cierre PUSH
        //AJAX metodo POST Envio de datos
        $.post('php/insertar-datos.php', datosAutor[(i-1)], function(response) {
          console.log(response);
        });//Cierre POST AJAX
      }//Cierre FOR

      //Insertar Tabla Representante Legal
      if ($('#RepresentanteLegal').val()== "No") {
        $.post('php/insertar-datos.php', datosAutor[0], function(response) {
          console.log(response);
        });
      }
      else{
        datosRepLeg.push({
          'PatenteRL': $('#NomPatente').val(),
          'NombreRL': $('#NombreRep').val(),
          'ApellidoPRL': $('#ApellidoPRep').val(),
          'ApellidoMRL': $('#ApellidoMRep').val(),
          'Direccion1RL': $('#Direccion1Rep').val(),
          'Direccion2RL': $('#Direccion2Rep').val(),
          'CiudadRL': $('#CiudadRep').val(),
          'EstadoRL': $('#EstadoRep').val(),
          'CPRL':$('#CPRep').val(),
          'PaisRL':$('#PaisRep').val()
        });
        $.post('php/insertar-datos.php', datosRepLeg[0], function(response) {
          console.log(response);
        });
      }
      //Insertar Datos Cesionario
      if($('#Cesion')=="Si"){
        datosCes.push({
          'Patente': $('#NomPatente').val(),
          'NombreC': $('#NombreCes').val(),
          'ApellidoPC': $('#ApellidoPCes').val(),
          'ApellidoMC': $('#ApellidoMCes').val(),
          'Direccion1C': $('#Direccion1Ces').val(),
          'Direccion2C': $('#Direccion2Ces').val(),
          'CiudadC': $('#CiudadCes').val(),
          'EstadoC': $('#EstadoCes').val(),
          'CPC':$('#CPCes').val(),
          'PaisC':$('#PaisCes').val()
        });
        $.post('php/insertar-datos.php', datosCes[0], function(response) {
         console.log(response);
        });
      }

      console.log($('input:radio[name=TipoEntidad]:checked').val());

    });//Ciere FORM SUBMIT



    //MATERIALIZE
    $('.tooltipped').tooltip();
    $('select').formSelect();
    M.updateTextFields();
});
