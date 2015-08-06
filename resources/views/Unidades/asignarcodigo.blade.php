@extends('app')
@include('tools.sidebar')
@section('content')

	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-danger">
				@if(count($unidades) > 0)
				<div class="panel-heading">Codigo De Identificacion del Sistema</div>
				
				<div class="col-md-12" style="overflow-x:scroll">
					<table class="table table-bordered table-hover">
						<tr>
							<th>ID</th>
							<th>Nº Identificacion</th>
							<th>Modelo</th>
							<th>Año</th>
							<th>Codigo del Sistema</th>
                            <th>Accion</th>
						</tr>
						@foreach($unidades as $unidad)
						<tr>
							<td>{{ $unidad->id}}</td>
							<td>{{ $unidad->nidentificacion}}</td>
							<td>{{ $unidad->year}}</td><!-- no me quiere mostrar la descripcion -->
							<td>{{ $unidad->modelo->codigo}}</td><!-- no me quiere mostrar la descripcion -->
							<td>{{ $unidad->codigosistema}}</td> 

                            <td><a href="{{ route('asignar.edit',$unidad) }}">Asignar</a></td>
							
						</tr>
						@endforeach	
					</table>
					
				</div>	
							{!! $unidades->render() !!}
					@else
					<div class="panel-heading">Ninguna unidad registrada</div>
					@endif
			</div>
		</div>
	</div>
	

@endsection