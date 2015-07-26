@extends('app')
@include('tools.sidebar')
@section('content')
		<div class="row">
			<div class="panel panel-danger">
				<div class="panel-heading">Reporte De Incidencias</div>

				<table class="table table-bordered table-striped">
					<tr>
						<th>Servicio</th>
						<th>Unidad</th>
						<th>Incidencias</th>
						<th>Cantidad</th>
						<th>Accion</th>

					</tr>
					<tr>
						<td> Linea 1 </td>
						<td> Y-001 </td>
						<td> Si </td>
						<td>3</td>
						<td><a href="{{ url('incidenciaunidad')}}"><button type="button" class="btn btn-success" >Ver Listado</button></a>
						
					</tr>

				</table>

			</div>
		</div>
@endsection