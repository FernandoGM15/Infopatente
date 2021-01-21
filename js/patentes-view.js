let language= {
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
}
$(function () {
    //TABLA DE PATENTES
    let tablaPatentes = $('#tabla-patentes').DataTable({
        "order": [[ 0, "desc" ]],
        "paging":false,
        "bLengthChange": false,
        "language":language,
        ajax: {
            url:`Controlador/PatenteController.php`,
            data:{flag:1},
            method:"POST"
        },
        columns: [
            {"data":"id"},
            {"data":"nombre"},
            {"data":"pais_presentacion"},
            {"data":"entidad_pequeña"},
            {"data":"tipo"},
            {"data":"aplicacion"},
            {"data":"autorizacion"},
            {"data":"fecha_mod",
                render: function(data){
                    let fecha = new Date(data);
                    let options = { year: 'numeric', month: 'long', day: 'numeric' };
                    return fecha.toLocaleDateString("es-ES", options)
                }
            },
            {defaultContent: 
                    `<div class="dropdown">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdown-actions" data-toggle="dropdown">
                                Acciones
                        </button>
                    </div>
                    `
                }
        ]
    })
});