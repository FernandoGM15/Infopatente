$(document).ready(function () {
    $.validator.messages.required = '';
    $('#form_empresas').validate({
        rules:{
            nombre_empresa: "required",
            nombre_responsable_legal: "required",
            direccion1_responsable_legal: "required",
            direccion2_responsable_legal:"required",
            email_responsable_legal:"required",
            tel_responsable_legal:"required",
            nombre_solicitante:"required",
            email_solicitante:"required",
            tel_solicitante:"required"
        }
    });
    $('#form_empresas').submit(function (e) { 
        e.preventDefault();
        if($(this).valid()){
            $.ajax({
                type: "POST",
                url: "php/registro_nueva_empresa.php",
                data: {
                    "Nombre":$("#nombre_empresa").val(),
                    "NombreRL": $("#nombre_responsable_legal").val(),
                    "Direccion1RL": $("#direccion1_responsable_legal").val(),
                    "Direccion2RL": $("#direccion2_responsable_legal").val(),
                    "EmailRL": $("#email_responsable_legal").val(),
                    "TelefonoRL": $("#tel_responsable_legal").val(),
                    "NombreSol":$("#nombre_solicitante").val(),
                    "EmailSol": $("#email_solicitante").val(),
                    "TelefonoSol":$("#tel_solicitante").val()
                },
                success: function (response) {
                    if(response == "Exito al registrar"){
                        swal({
                            title:"Gracias",
                            text:"Verificaremos la informacion y enviaremos un mensaje a su representante legal con el contrato para firmar",
                            icon:"success",
                            button:"Aceptar"
                            }).then(function() {
                            location.href="index.php"
                       })
                    }
                    else{
                        swal({
                            title:"Error",
                            text:"La empresa solicitada ya ha sido registrada",
                            icon:"error",
                            button:"Aceptar"
                            }).then(function() {
                           document.getElementById("form_empresas").reset();
                       })
                    }
                }
            });

        }
        else{
            swal({
                title:"Error",
                text:"Asegurese de llenar todos los campos",
                icon:"error",
                button:"Aceptar"
              })
        }
    });

});