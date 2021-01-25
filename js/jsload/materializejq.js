var language= {
   "sProcessing": "Procesando ...",
   "sLengthMenu": "",
   "sZeroRecords": "Ningun resultado encontrado",
   "sEmptyTable": "No hay datos en la tabla",
   "sInfo": "Líneas _START_ a _END_ de _TOTAL_ Registros",
   "sInfoEmpty": "No se muestra ninguna línea",
   "sInfoFiltered": "(Filtrar maximo _MAX_)",
   "sInfoPostFix": "",
   "sSearch": "Buscar",
   "sUrl": "",
   "sInfoThousands": ",",
   "sLoadingRecords": "Cargando...",
   "oPaginate": {
   "sFirst": "Primero", "sLast": "Ultimo", "sNext": "Siguiente", "sPrevious": "Previo"
   }
};
$(document).ready(function() {
   $('.dropdown-trigger').dropdown();
   $("#slide-out").sidenav();
   $('select').formSelect();
   M.updateTextFields();
   $('.tooltipped').tooltip();
   $('.tabs').tabs();
});
