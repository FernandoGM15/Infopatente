$(document).ready(function() {
  $('#registro_folio').hide();
  $('#registro_no_folio').hide();

    $('#tipo_de_usuario').change(function(event) {
      if($('#tipo_de_usuario').val()=="Alumno"||$('#tipo_de_usuario').val()=="Profesor"||$('#tipo_de_usuario').val()=="Empleado"){
        $('#registro_folio').fadeIn(800);
        $('#registro_no_folio').fadeOut(200);

      }
      else{
        $('#registro_no_folio').fadeIn(800);
        $('#registro_folio').fadeOut(400);

      }
    });
});
