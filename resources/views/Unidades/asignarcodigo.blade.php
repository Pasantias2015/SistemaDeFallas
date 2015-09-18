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
							<th>N&deg Identificaci&oacuten</th>
							<th>A&ntildeo</th>
							<th>Modelo</th>
							<th>C&oacutedigo del Sistema</th>
							<th>IMEI SIM CARD</th>
							<th>ISP</th>
							

                            				<th>Acci&oacuten</th>
						</tr>
						@foreach($unidades as $unidad)
						<tr>
							<td>{{ $unidad->id}}</td>
							<td>{{ $unidad->nidentificacion}}</td>
							<td>{{ $unidad->year}}</td>
							<td>{{ $unidad->modelo->codigo." ".$unidad->modelo->marca->nombre}}</td>
							<td>{{ $unidad->codigosistema}}</td>
							<td>{{ $unidad->imei}}</td> 
							<td>{{ $unidad->isp}}</td> 



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