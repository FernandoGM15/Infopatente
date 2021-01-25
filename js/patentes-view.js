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
                    ` <div class="row">
                    <div class="col s12">
                        <button class="btnEditarP light-green col s12 btn btn-warning dropdown-toggle" type="button" id="dropdown-actions" data-toggle="dropdown">
                            Autorizar
                        </button>
                    </div>
                    <div class="col s12">
                        <button class="btnBorrarP light-blue lighten-1 col s12 btn btn-warning dropdown-toggle" type="button" id="dropdown-actions" data-toggle="dropdown">
                            Editar
                        </button>
                    </div>
                    <div class="col s12">
                        <button class="btnBorrarP  red lighten-1 col s12 btn btn-warning dropdown-toggle" type="button" id="dropdown-actions" data-toggle="dropdown">
                            Borrar
                        </button>
                    </div>
                    </div>
                    `
                }
        ]
    })
});