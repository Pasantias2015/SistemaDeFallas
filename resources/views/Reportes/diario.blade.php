@extends('app')
@include('tools.sidebar')
@section('content')
<div class="panel panel-danger">
	<div class="panel-heading">Reporte General de Mantenimiento Diario</div>
	@include('tools.errors')
	<div class="panel-body">
	    <div class="col-md-10 col-md-offset-1">
        {!! Form::open(['route'=>'reportes.store','method'=>'POST']) !!}
			@include('tools.fecha')
				<button id="registrar"type="submit" class="btn btn-success glyphicon glyphicon-saved"> Aceptar</button>
		{!! Form::close() !!}
		</div>
	</div>
	            @include('Mantenimiento_Diario.diarios')
</div>
@endsection