@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
		<div class="panel panel-danger">
			<div class="panel-heading">Reporte Mantenimiento Diario - Estado Fisico de las Unidades</div>
			<div class="col-md-10 col-md-offset-1">
        {!! Form::open(['route'=>'rdiario4.store','method'=>'POST']) !!}
        @include('tools.fecha')
          <button id="registrar"type="submit" class="btn btn-success glyphicon glyphicon-saved"> Aceptar</button>
        {!! Form::close() !!}
        </div>
			<div class="col-md-9 col-md-offset-1">
				            @include('Mantenimiento_Diario.diarios')
				</div>
		</div>
</div>
		
@endsection