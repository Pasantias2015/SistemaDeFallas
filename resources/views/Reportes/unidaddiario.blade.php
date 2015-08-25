@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
<div class="panel panel-danger">
	<div class="panel-heading">Reporte General de Mantenimiento Diario De Una Unidad</div>
	@include('tools.errors')
	<div class="panel-body">
	    <div class="col-md-11">
        {!! Form::open(['route'=>'rdiario5.store','method'=>'POST']) !!}
			@include('tools.fecha')
				<div class="col-md-8 col-md-offset-1">
                    <div class="form-group row">
                        <div class="col-md-3"><span>Unidad:</span></div>
                        <div class="col-md-9">   
                            <select name="unidad_id" class="form-control">
                                @foreach($unidades as $unidad)
                                    <option value="{{ $unidad->id }}">{{$unidad->nidentificacion}}</option>    
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                 <button id="registrar"type="submit" class="btn btn-success glyphicon glyphicon-stats">  Generar</button>
		{!! Form::close() !!}
		</div>
		<div class="col-md-11"><input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
</div>
	</div>
</div>
</div>
@endsection