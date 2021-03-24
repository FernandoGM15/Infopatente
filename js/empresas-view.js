
$(function () {
    //TABLA DE EMPRESAS
    let tablaempresas = $('#tabla-empresas').DataTable({
        "order": [[ 0, "desc" ]],
        "paging":false,
        "bLengthChange": false,
        "language":language,
        ajax: {
            url:`Controlador/EmpresaController.php`,
            data:{flag:1},
            method:"POST"
        },
        columns: [
            {"data":"id"},
            {"data":"nombre"},
            {"data":"nombre_rl"},
            {"data": "direccion1_rl"},
            {"data":"direccion2_rl"},
            {"data":"email_rl"},
            {"data":"telefono_rl"},
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
                            <a onclick='BorrarE(${id})' class="btnBorrarP red btn-small tooltipped" data-position="bottom" data-tooltip="Borrar">
                                <i class="material-icons">delete</i>
                            </a>
                        </div>
                    </div>`
                }
            }
        ]
    })

    //DATATABLE EDIT
    $('#tabla-empresas').on('draw.dt', function(){
        $('#tabla-empresas').Tabledit({
            url: 'Controlador/EmpresaController.php',
            editButton: false,
            deleteButton: false,
            hideIdentifier: true,
            columns: {
                identifier: [0, 'id'],
                editable: [[2,'nombre_rl'],[3,"direccion1_rl"],[4,"direccion2_rl"],[5,"email_rl"],[6,"telefono_rl"]]
            }
        });
    });
});