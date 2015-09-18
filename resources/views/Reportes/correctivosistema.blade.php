@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
<div class="panel panel-danger">
	<div class="panel-heading">Reporte General de Mantenimiento Correctivo de Fallas por Sistema</div>
	@include('tools.errors')
	<div class="panel-body">
	    <div class="col-md-11">
        {!! Form::open(['route'=>'rc2.store','method'=>'POST']) !!}
			@include('tools.fecha')
				
<div class="col-md-2 col-md-offset-5">
                 <button id="registrar"type="submit" class="btn btn-success glyphicon glyphicon-stats">  Generar</button>
        </div>
		{!! Form::close() !!}
		</div>
		<div class="col-md-11"><input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
</div>
	</div>
</div>
</div>
@endsection