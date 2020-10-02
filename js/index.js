$(document).ready(function () {
    $('#login').submit(function (e) {
      user = $("#usuario").val();
      pass = $("#contra").val();
      e.preventDefault();
        if (!$('#contra').val() || !$('#usuario').val()) {
            swal({
                title:"Error",
                text:"Asegurese de llenar todos los campos",
                icon:"error",
                button:"Aceptar"
              });
        }
        else{
          $.ajax({
            url: 'php/login.php',
            type: 'POST',
            data: {
              user: user.toLowerCase(),
              pass: pass
            }
          })
          .done(function(response) {
            if (response != 0){
              location.reload();
            }
            else{
              swal({
                title:"Error",
                text:"Usuario y/o contraseña incorrectos",
                icon:"error",
                button:"Aceptar"
              });
              $('#contra').val("");
              $('#usuario').val("");
            }
          })
        }
    });
});
