
$(function () {
    //TABLA DE empresas
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
            {"data":"direccion1_rl"},
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