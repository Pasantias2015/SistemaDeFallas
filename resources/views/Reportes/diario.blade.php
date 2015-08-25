@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
<div class="panel panel-danger">
	<div class="panel-heading">Reporte General de Mantenimiento Diario</div>
	@include('tools.errors')
	<div class="panel-body ">
        {!! Form::open(['route'=>'reportes.store','method'=>'POST']) !!}
		 <div class="col-md-12">
           @include('tools.fecha')
        </div>
        <div class="col-md-2 col-md-offset-5">
                 <button id="registrar"type="submit" class="btn btn-success glyphicon glyphicon-stats">  Generar</button>
        </div>
		{!! Form::close() !!}
	</div>
	 @include('Mantenimiento_Diario.diarios')
</div>
</div>
@endsection