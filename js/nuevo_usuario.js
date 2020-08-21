$(document).ready(function() {
  $('#registro_folio').hide();
  $('#registro_no_folio').hide();
  $('#registrar').hide();

    $('#tipo_de_usuario').change(function(event) {
      switch ($('#tipo_de_usuario').val()) {
        case "Alumno":
        case "Profesor":
          $('#nombre_empresa').empty();
          $('#nombre_empresa').append('<option value="" disabled selected value> Seleccione Universidad </option>');
          $('#nombre_empresa').append('<option value="UAdeC">Universidad Autonoma de Coahuila</option>');
          $('#registro_folio').fadeIn(800);
          $('#registro_no_folio').fadeOut(200);
          break;
        case "Empleado":
          $('#registro_no_folio').fadeOut(200);
          $('#registro_folio').fadeIn(800);
          $('#nombre_empresa').empty();
          $('#nombre_empresa').append('<option value="" disabled selected value> Seleccione Empresa </option>');
          $('#nombre_empresa').append('<option value="NoDisp" disabled>Ninguna Disponible</option>'); 
          break;
        case"Abogado":
        case "Independiente":
          $('#registro_no_folio').fadeIn(800);
          $('#registro_folio').fadeOut(400);
          $('#registrar').show();
          break;
        default:
          alert("Opcion Invalida")
          break;
      }
    });
    
    $('#verificar').click(function (e) { 
      e.preventDefault();
      $('#registro_no_folio').fadeIn(800);
      $('#registrar').show();
    });

    $('#form_registro').submit(function (e) { 
      e.preventDefault();
      if(
        $("#Nombre_usuario").val().length < 1  ||
        $("#ApPaterno_usuario").val().length < 1 ||
        $("#ApMaterno_usuario").val().length < 1 ||
        $("#Correo_usuario").val().length < 1    ||
        ($("#Contraseña").val() != $("#validarContraseña").val()) ||
        $("#CP_usuario").val().length < 1        ||
        $("#Telefono_usuario").val().length < 1 ){  
        swal({
          title:"Error",
          text:"Asegurese de llenar todos los campos",
          icon:"error",
          button:"Aceptar"
        })
        return false;  
      } 
      else{
        $.ajax({
          type: "POST",
          url: "php/nuevo_usuario.php",
          data: {
            "Tipo": $("#tipo_de_usuario").val(),
            "Empresa": $("#numero_identificacion").val(),
            "NumIdentificacion": $("#numero_identificacion").val(),
            "Nombre": $("#Nombre_usuario").val(),
            "ApPat": $("#ApPaterno_usuario").val(),
            "ApMat": $("#ApMaterno_usuario").val(),
            "Email": $("#Correo_usuario").val(),
            "Contraseña": $("#Contraseña").val(),
            "Cp" : $("#CP_usuario").val(),
            "Telefono" : $("#Telefono_usuario").val(),
          },
          success: function (response) {
            if ( response == "Exito al registrar"){
              swal({
                title: "Gracias",
                text: "Verificaremos su informacion y enviaremos un correo de confirmacion",
                icon: "success",
                button: "Aceptar"
              }).then(function() {
              location.href="index.php";
              });
            }
            else if (response == "Fallo al registrar, usuario ya existe"){
              swal({
                title: "Error",
                text: "El correo electronico, ya ha sido registrado",
                icon: "error",
                button: "Aceptar"
              })
            }
          }
        });
      } 
    });
});
