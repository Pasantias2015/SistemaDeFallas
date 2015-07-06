@extends('app')
@include('tools.sidebar')
@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-danger">
				<div class="panel-heading">Listado De Unidades</div>
				<div style="overflow:scroll">
					
					<table class="table table-bordered table-striped ">
						<tr>
							<th>ID</th>
							<th>VIM</th>
							<th>Serial de Carroceria</th>
							<th>Serial del MotorVim</th>
							<th>Potencia</th>
							<th>Kilometrje</th>
							<th>Cant. Personas</th>
							<th>Peso Maximo</th>
							<th>Fabricante</th>
							<th>Fecha de Frabri.</th>
							<th>Longitud</th>
							<th>Combustible</th>
							<th>Fecha de Registrado</th>
							<th>Ultima Actualizacion</th>
														
						</tr>
						@foreach($unidades as $unidad)
						<tr>
							<td><a href="">{{ $unidad->id}}</a></td>
							<td>{{ $unidad->vin}}</td>
							<td>{{ $unidad->serial }}</td>
							<td>{{ $unidad->serialmotor }}</td>
							<td>{{ $unidad->potenciamotor }}</td>
							<td>{{ $unidad->kilometraje }}</td>
							<td>{{ $unidad->cantpersona }}</td>
							<td>{{ $unidad->pesomax }}</td>
							<td>{{ $unidad->fabricante }}</td>
							<td>{{ $unidad->ffabricacion }}</td>
							<td>{{ $unidad->longitud }}</td>
							<td>{{ $unidad->combustible }}</td>
							
							<td>{{ $unidad->created_at }}</td>
							<td>{{ $unidad->Update_at }}</td>
												
							
						</tr>
						@endforeach	
					</table>
				</div>

				
			</div>
			<div class="panel panel-default"><p>Hay {{ $unidades->total() }} Unidades</p></div>
		</div>
	</div>
	

@endsection