@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
      <div class="panel panel-danger">
            <div class="panel-heading">Mantenimientos Preventivos Realizados</div>
            <div class="panel-body">
             @include('tools.errors')
            {!! Form::open() !!}
            	<div class="col-md-12">
				  <table class="table table-bordered table-striped">
				    <tr>
				      <th>ID</th>
				      <th>Fecha</th>
				      <th>Unidad</th>
				      <th>Mecanico</th>
				      <th>Observación</th>
				      <th>Acción</th>
				    </tr>
				    @foreach($preventivos as $preventivo)
				    <tr>                                
				      <td>{{ $preventivo->id }}</td>
				      <td>{{ $preventivo->fecha }}</td>
				      <td>{{ $preventivo->unidad->nidentificacion }}</td>
				      <td>{{ $preventivo->mecanico }}</td>
				      <td>{{ $preventivo->observaciones }}</td>
				      <td>   <a href="{{ route('preventivo.edit',$preventivo) }}" class="btn btn-info">Ver</a>     </td>                               
				    </tr>
				    @endforeach
				  </table>
				</div>
			<input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
			{!! Form::close() !!}
            </div>
      </div>
</div>
@endsection