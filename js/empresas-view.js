
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
            {"data": null,
                render:function (data) {
                    return `${data.direccion1_rl} ${data.direccion2_rl}`
                }
            },
            {"data":"email_rl"},
            {"data":"telefono_rl"},
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
                        <button class="btnEditarE light-green col s12 btn btn-warning dropdown-toggle" type="button" id="dropdown-actions" data-toggle="dropdown">
                            Autorizar
                        </button>
                    </div>
                    <div class="col s12">
                        <button class="btnBorrarE light-blue lighten-1 col s12 btn btn-warning dropdown-toggle" type="button" id="dropdown-actions" data-toggle="dropdown">
                            Editar
                        </button>
                    </div>
                    <div class="col s12">
                        <button class="btnBorrarE  red lighten-1 col s12 btn btn-warning dropdown-toggle" type="button" id="dropdown-actions" data-toggle="dropdown">
                            Borrar
                        </button>
                    </div>
                </div>
                    `
                }
        ]
    })
});