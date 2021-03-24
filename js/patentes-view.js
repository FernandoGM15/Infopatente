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
            {"data":"id",
                render:function(id){
                   return `
                    <div class="row">
                        <div class="col s6">
                            <a onclick='ActualizarP(${id})' class="btnAutorizarP light-green  btn-small tooltipped" data-position="bottom" data-tooltip="Autorizar">
                                <i class="material-icons">check</i>
                            </a>
                        </div>
                        <div class="col s6">
                            <a onclick='BorrarP(${id})' class="btnBorrarP red btn-small tooltipped" data-position="bottom" data-tooltip="Borrar">
                                <i class="material-icons">delete</i>
                            </a>
                        </div>
                    </div>`
                }
            }
            
        ]
    })

    //DATATABLE EDIT
    $('#tabla-patentes').on('draw.dt', function(){
        $('#tabla-patentes').Tabledit({
            url: 'Controlador/PatenteController.php',
            editButton: false,
            deleteButton: false,
            hideIdentifier: true,
            columns: {
                identifier: [0, 'id'],
                editable: [[1, 'nombre'],[2,'pais_presentacion']]
            }
        });
    });

    //FUNCIONES AUTORIZAR Y BORRAR REGISTRO
});