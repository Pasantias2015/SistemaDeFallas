@extends('app')
@include('tools.sidebar')
@section('content')
<div class="container">
		<div class="col-md-12">
			<div class="panel panel-danger">
				<div class="panel-heading">Detalle de incidencia:01 marzo 2015 Y-001</div>

				<table class="table table-bordered table-striped">
					<tr>
						<th>Servicio</th>
						<th>Fecha</th>
						<th>Incidencia</th>
						<th>Categoria Falla</th>
						<th>Accion</th>

					</tr>
					<tr>
						<td> Linea 1 </td>
						<td>01 marzo 2015</td>
						<td> Daño De Bujias </td>
						<td> Falla Menor </td>
						<td><a href="" class="label label-success">Ver Detalles </a></td>
					</tr>
					<tr>
						<td> Linea 1 </td>
						<td>15 marzo 2015</td>
						<td> Recalentamiento </td>
						<td> Falla Mayor </td>
						<td><a href="" class="label label-success">Ver Detalles </a></td>
					</tr>
					<tr>
						<td> Linea 1 </td>
						<td>27 marzo 2015</td>
						<td> Manguera De Frenos Rota </td>
						<td> Falla Mayor </td>
						<td><a href="" class="label label-success">Ver Detalles </a></td>
					</tr>
					
				</table>

			</div>
		</div>
</div>
@endsection