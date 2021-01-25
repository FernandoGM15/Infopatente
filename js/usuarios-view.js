
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
            {defaultContent: 
                    `
                    <div class="row">
                        <div class="col s12">
                            <button class="btnEditarU light-green col s12 btn btn-warning dropdown-toggle" type="button" id="dropdown-actions" data-toggle="dropdown">
                                Autorizar
                            </button>
                        </div>
                        <div class="col s12">
                            <button class="btnBorrarU light-blue lighten-1 col s12 btn btn-warning dropdown-toggle" type="button" id="dropdown-actions" data-toggle="dropdown">
                                Editar
                            </button>
                        </div>
                        <div class="col s12">
                            <button class="btnBorrarU  red lighten-1 col s12 btn btn-warning dropdown-toggle" type="button" id="dropdown-actions" data-toggle="dropdown">
                                Borrar
                            </button>
                        </div>
                    </div>
                    `
                }
        ]
    })
});