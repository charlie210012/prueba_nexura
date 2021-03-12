@extends('layouts.app')

@section('content')
    @include('modals.modalCreateUser')
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-gradient-dark text">
                    <div class="card-header bg-white text-dark">
                        <h3 class="mb-0">Lista de empleados</h3>
                        <a onclick="createuser();" class="btn btn-sm btn-primary text-right"><i class="fas fa-user-plus"></i> Crear</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush" id="tableuser">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col"><i class="fa fa-user-tie"></i>  Nombre</th>
                                                <th scope="col"><i class="fas fa-at"></i>  Email</th>
                                                <th scope="col"><i class="fas fa-venus-mars"></i>  Sexo</th>
                                                <th scope="col"><i class="fas fa-briefcase"></i>  Area</th>
                                                <th scope="col"><i class="fas fa-envelope"></i>  Boletin</th>
                                                <th scope="col">Modificar</th>
                                                <th scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
<script>
	function createuser(){
		$('#createuser').modal('show');
	}
</script>
<script>
$(document).ready(function () {
    var debugs = $('#tableuser').DataTable({
        "serveSide": true,
        "processing": true,
        "responsive": true,
        "ajax": "{{ url('empleados_data') }}",
        "columns": [
            {"data": "nombre"},
            {"data": "email"},
            {"data": "sexo"},
            {"data": "area"},
            {"data": "boletin"},
            {"data": "modificar"},
            {"data": "eliminar"}
        ],
    });
});
</script>
<script>
$(document).on("click","#btnempleado",function(){
    var datos = $('#usercreate').serialize();
    $.ajax({
        type: "POST",
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        url:  "{{ url('empleados_data') }}",
        data: datos,
        success: function(r){
            if(r['message']=="error"){
                Swal.fire({        
                title: '¡Atención!',
                text: 'El empleado ya existe', 
                icon: 'error',
                });
            }else{
                Swal.fire({        
                title: '¡Felicidades!',
                text: 'Los datos fueron agregados con exito',
                icon: 'success',
                 });
                 $('#tableuser').DataTable().ajax.reload();
                 $('#createuser').modal('hide');
                 
                 
                 
            }
            
            
        }
        
    })
    return false
}); 
</script>
<script>
    function eliminar(id){
		Swal.fire({
		title: 'Esta seguro?',
		text: "¿Desea borrar este empleado?",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Si,borrar!',
		cancelButtonText: 'No, cancelar!',
		}).then((result) => {
			if (result["value"] == true){
				$.ajax({
					type: "DELETE",
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    },
					url:  "/empleados_data/" + id,
                    data: id,
					success: function(r){
						if (r['message']=="ok"){
								Swal.fire({
									title: 'Felicidades!',
									text:'Se ha borrado al empleado con exito',
									icon: 'success',
									confirmButtonText: 'OK!',
								}).then((res)=> {
									if (res["value"] == true){
										$('#tableuser').DataTable().ajax.reload();
									}
								})
							}
					}
				})
			}else{
					Swal.fire({
					title: 'Procesado!',
					text:'No se ha borrado esta empleado',
					icon: 'warning',
					});
				}
		});
	}
</script>

@endsection