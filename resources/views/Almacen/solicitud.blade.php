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
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-md-4"><span>Fecha:</span></div>
                        <div class="col-md-8">    
                        <input type="date" disabled value="<?php echo date("Y-m-d");?>" class="form-control">
                        <input class="hidden" type="date" id="fecha" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control">
                        <input class="hidden" type="text" id="estado" name="estado" value="Pendiente" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-md-4"><span>Hora:</span></div>
                        <div class="col-md-8">    
                        <input disabled value="<?php  echo date("h:i:s", time()+27000);?>" class="form-control">
                        <input type="time" name="hora" id="hora" value="<?php  echo date("h:i:s", time()+27000);?>" class="hidden">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group row">
                        <div class="col-md-4"><span>Usuario:</span></div>
                        <div class="col-md-8"> 
                            <input type="text" disabled value="{{ Auth::user()->persona->nombrecompleto }}" class="form-control">
                            <input class="hidden" type="text" id="usuario_id" name="usuario_id" value="{{ Auth::user()->id }}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="panel panel-danger">
                    <div class="panel-heading">Recibe</div>
                        <div class="col-md-6">
                            <br></br>
                            <div class="col-md-3"><span>Mecánico:</span></div>
                            <div class="col-md-9">
                                <select name="persona_id" id="mecanico" class="form-control">
                                    <option>Seleccione un Mecanico</option>    
                                    @foreach($mecanicos as $mecanico)
                                    <option value="{{ $mecanico->id}}">{{ $mecanico->nombrecompleto  }}</option>    
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