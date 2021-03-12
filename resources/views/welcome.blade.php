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

@endsection