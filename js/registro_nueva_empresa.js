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
                text:"Asegurese de llenar todos los campos",
                icon:"error",
                button:"Aceptar"
              })
        }
    });

});