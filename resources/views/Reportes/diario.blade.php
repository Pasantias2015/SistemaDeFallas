@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
		<div class="panel panel-danger">
			<div class="panel-heading">Reporte General de Mantenimiento Diario</div>
			 @include('tools.errors')
            {!! Form::open(['route'=>'rdiario.store','method'=>'POST']) !!}
				@include('tools.fecha')
						<button id="registrar"type="submit" class="btn btn-success glyphicon glyphicon-saved"> Aceptar</button>
			{!! Form::close() !!}
			<div class="col-md-9 col-md-offset-1">
				<div class="panel panel-danger">
					<div class="panel-heading">Mantenimientos Diarios Realizados</div>
						<table class="table table-bordered table-striped">
		                      <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Servicio - Unidad - Operador</th>
                                    <th>Accion</th>
                              </tr>
                              @foreach($diarios as $diario)
                              <tr>                                
                                <td>{{ $diario->id }}</td>
                                <td>{{ $diario->fecha }}</td>
                                <td>{{ $diario->serviciounidadoperador->servicio->descripcion." - ".$diario->serviciounidadoperador->unidad->nidentificacion." - ".$diario->serviciounidadoperador->operador->persona->pnombre }}</td>
                                <td>
                                  <a href="{{ route('diario.edit',$diario) }}" class="btn btn-info">Ver</a>
                                </td>                               
                              </tr>
                              @endforeach
                        </table>
                        {!! $diarios->render() !!}
						
					</div>
				</div>
		</div>
</div>
@endsection