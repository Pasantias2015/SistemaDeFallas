@extends('app')
@include('tools.sidebar')
@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-danger">
				@if(count($unidades) > 0)
				<div class="panel-heading">Listado De Unidades</div>
				<div class="form-group">
                                <select name="modelo_id" class="form-control" style="display:none">
                                      @foreach($modelos as $modelo)
                                        <option value="{{ $modelo->id }}">{{ $modelo->descripcion." - ".$modelo->combustible." - ".$modelo->year." - ".$modelo->dimension." - ".$modelo->transmision }}</option>    
                                      @endforeach
                                </select>
                        </div>
				<div style="overflow-x:scroll">

					<table class="table table-bordered table-hover">
						<tr>
							<th>ID</th>
							<th>Numero de Identificacion</th>
							<th>Numero VIN</th>
							<th>Serial de Carroceria</th>
							<th>Serial de Motor</th>
							<th>Modelo</th>
                            <th>Accion</th>
						</tr>
						@foreach($unidades as $unidad)
						<tr>
							<td>{{ $unidad->id}}</td>
							<td>{{ $unidad->nidentificacion}}</td>
							<td>{{ $unidad->vin}}</td>
							<td>{{ $unidad->serialcarroceria}}</td>
							<td>{{ $unidad->serialmotor}}</td>
							
							<td>{{ $unidad->modelo_id}}</td> <!-- no me quiere mostrar la descripcion -->

                            <td><a href="{{ route('unidades.edit',$unidad) }}">Editar</a></td>
							
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