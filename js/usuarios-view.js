
$(function () {
    //TABLA DE USUARIOS
    let tablaempresas = $('#tabla-usuarios').DataTable({
        "order": [[ 0, "desc" ]],
        "paging":false,
        "bLengthChange": false,
        "language":language,
        ajax: {
            url:`Controlador/UsuarioController.php`,
            data:{flag:1},
            method:"POST"
        },
        columns: [
            {"data":"id"},
            {"data":"tipo"},
            {"data":"empresa"},
            {"data":"num_identificacion"},
            {"data":null,
                render:function (data) {
                    return `${data.nombre} ${data.apellido_paterno} ${data.apellido_materno}`
                }
            },
            {"data":"email"},
            {"data":"telefono"},
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
                        <a onclick='BorrarU(${id})' class="btnBorrarP red btn-small tooltipped" data-position="bottom" data-tooltip="Borrar">
                            <i class="material-icons">delete</i>
                        </a>
                    </div>
                </div>`
                }
            }
        ]
    })

    //DATATABLE EDIT
    $('#tabla-usuarios').on('draw.dt', function(){
        $('#tabla-usuarios').Tabledit({
            url: 'Controlador/UsuarioController.php',
            editButton: false,
            deleteButton: false,
            hideIdentifier: true,
            columns: {
                identifier: [0, 'id'],
                editable: [[5, 'email'],[6,'telefono']]
            }
        });
    });
});