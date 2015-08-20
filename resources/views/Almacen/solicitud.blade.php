@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-10">
	<div class="panel panel-danger">
		<div class="panel-heading">Solicitud Al Almacen </div> <!-- faltan los filtros -->
		<div class="panel-body">
		 @include('tools.errors')
         {!! Form::open(['route'=>'solicitud.store','method'=>'POST']) !!}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-5"><span>Fecha:</span></div>
                        <div class="col-md-6">    
                        {!! Form::date('fecha','Fecha',['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-5"><span>Usuario:</span></div>
                        <div class="col-md-6">   
                            <select name="usuario_id" class="form-control">
                                @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->usuario }}</option>    
                                 @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="panel panel-danger">
                    <div class="panel-heading">Recibe</div>
                        <div class="col-md-6">
                            <br></br>
                            <div class="col-md-3"><span>Mecanico:</span></div>
                            <div class="col-md-9">
                                <select name="persona_id" id="mecanico" class="form-control">
                                @foreach($mecanicos as $mecanico)
                                <option value="{{ $mecanico->persona_id }}">{{ $mecanico->persona->pnombre." ".$mecanico->persona->snombre." ".$mecanico->persona->papellido." ".$mecanico->persona->sapellido  }}</option>    
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <br></br>
                            <div class="col-md-3"><span>Cedula:</span></div>
                            <div class="col-md-9">
                                <select name="cedula" id="cedula" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>    
                    </div>
            </div>
            <div class="row col-md-offset-10">
                <br></br>
                <button type="submit" class="btn btn-success">Detalle de Solicitud</button>
            </div>
        </div>
 		{!! Form::close() !!}
	</div>
</div>
{!! Html::script('js/selectmultiples.js') !!} 
@endsection