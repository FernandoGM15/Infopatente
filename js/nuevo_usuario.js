$(document).ready(function() {
    $('#tipo_de_usuario').change(function(event) {
      let html;
      $("#numero_identificacion").val("");
      switch ($('#tipo_de_usuario').val()) {
        case "Alumno":
        case "Profesor":
        case "Empleado":
          $('#registro_folio').fadeIn(800);
          $('#registro_no_folio').fadeOut(200);
          $.ajax({
            type: "POST",
            url: "Controlador/EmpresaController.php",
            data:{flag:1},
            dataType: "JSON",
            success: function (response) {
              html = '<option disabled selected> Seleccione Universidad </option>'
              response.data.forEach(element => {
                html += `<option value = '${element.nombre}'>${element.nombre}</option>`
              });
              document.getElementById("nombre_empresa").innerHTML = html;
            }
          });
          break
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
      if($("#Contraseña").val() != $("#validarContraseña").val()){
        $("#Contraseña").val("");
        $("#validarContraseña").val("");
        swal({
          title:"Error",
          text:"El campo de contraseñas no coincide",
          icon:"error",
          button:"Aceptar"
        })
        return false;  
      }
      else if(
        $("#Nombre_usuario").val().length < 1  ||
        $("#ApPaterno_usuario").val().length < 1 ||
        $("#ApMaterno_usuario").val().length < 1 ||
        $("#Correo_usuario").val().length < 1    ||
        $("#Contraseña").val().length < 1 ||
        $("#validarContraseña").val().length < 1 ||
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
          url: "Controlador/UsuarioController.php",
          data: {
            "flag":4,
            "tipo": $("#tipo_de_usuario").val().toUpperCase(),
            "empresa": $("#nombre_empresa").val().toUpperCase(),
            "num_identificacion": $("#numero_identificacion").val(),
            "nombre": $("#Nombre_usuario").val().toUpperCase(),
            "apellido_paterno": $("#ApPaterno_usuario").val().toUpperCase(),
            "apellido_materno": $("#ApMaterno_usuario").val().toUpperCase(),
            "email": $("#Correo_usuario").val().toLowerCase(),
            "contraseña": $("#Contraseña").val(),
            "cp" : $("#CP_usuario").val(),
            "telefono" : $("#Telefono_usuario").val(),
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
                text: response,
                icon: "error",
                button: "Aceptar"
              })
              document.getElementById("form_registro").reset();
            }
          }
        });
      } 
    });
});
