@extends('app')
@include('tools.sidebar')
@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-danger">
				@if(count($unidades) > 0)
				<div class="panel-heading">Listado De Unidades</div>
			
				<div style="overflow-x:scroll">

					<table class="table table-bordered table-hover">
						<tr>
							<th>ID</th>
							<th>Numero de Identificacion</th>
							<th>Numero VIN</th>
							<th>Serial de Carroceria</th>
							<th>Serial de Motor</th>
							<th>Modelo</th>
							<th>Año</th>
                            <th>Accion</th>
						</tr>
						@foreach($unidades as $unidad)
						<tr>
							<td>{{ $unidad->id}}</td>
							<td>{{ $unidad->nidentificacion}}</td>
							<td>{{ $unidad->vin}}</td>
							<td>{{ $unidad->serialcarroceria}}</td>
							<td>{{ $unidad->serialmotor}}</td>
							<td>{{ $unidad->modelo->codigo." - ".$unidad->modelo->descripcion}}</td>
							<td>{{ $unidad->year}}</td>
							
                            <td><a >Editar</a></td>
							
						</tr>
						@endforeach	
					</table>
					
				</div>	
							{!! $unidades->render() !!}
							<!--Total unidades-->
					<div>Unidades registradas: <label><?php echo $total=count($unidades)?></label> 
					@else
					<div class="panel-heading">Ninguna unidad registrada</div>
					@endif
			</div>
		</div>
	</div>
	

@endsection