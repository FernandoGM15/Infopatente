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
      if($("#Nombre_usuario").val().length < 1  ||
       $("#ApPaterno_usuario").val().length < 1 ||
       $("#ApMaterno_usuario").val().length < 1 ||
       $("#Correo_usuario").val().length < 1    ||
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
          url: "php/registro.php",
          data: {CorreoUsuario:$('#Correo_usuario').val()},
          success: function (response) {
            console.log(response);
          }
        });
        swal({
          title: "Gracias",
          text: "Verificaremos su informacion y enviaremos un correo de confirmacion",
          icon: "success",
          button: "Aceptar"
      }).then(function() {
        location.href="index.php";
      });
      } 
    });
});
