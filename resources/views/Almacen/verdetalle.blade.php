@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
	<div class="panel panel-danger">
		<div class="panel-heading">Detalle de Solicitud Al Almacen </div> 
		<div class="panel-body">
			@include('tools.errors')
            <div class="row">
            <div class="col-md-3">
              <div class="form-group row">
                <div class="col-md-4"><span>Fecha:</span></div>
                <div class="col-md-8">
                  <input type="text" disabled value="{{ $solicitud->fecha }}" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group row">
                <div class="col-md-4"><span>Mecanico:</span></div>
                <div class="col-md-8">   
                    <input type="text" disabled value="{{ $solicitud->persona->pnombre." ".$solicitud->persona->papellido }}" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-md-4"><span>Usuario:</span></div>
                        <div class="col-md-8">
                            <input type="text" disabled value="{{$solicitud->usuario->persona->pnombre}}" class="form-control">
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-md-8"><span>Solicitud Nº:</span></div>
                        <div class="col-md-4">
                            <input type="text" disabled value="{{$solicitud->id}}" class="form-control">
                        </div>
                    </div>
                </div>
          </div>
         	<div class="panel panel-danger">
                <div class="panel-heading">Detalle de lo Solicitado</div>
                <div class="col-md-12">
                	<table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Solicitud Nº</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Tipo</th>
                        </tr>
                        @foreach($detalles as $detalle)
                        <tr>                            
                            <td>{{ $detalle->id }}</td>
                            <td>{{ $detalle->solicitud_id }}</td>
                            <td>{{ $detalle->almacen->codigo." - ".$detalle->almacen->descripcion }}</td>
                            <td>{{ $detalle->cantidad }}</td>
                            <td>{{ $detalle->almacen->tipo }}</td>                          
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-danger">
                <div class="panel-heading">Responsable de la Entrega</div>
                <div class="panel-body">
                {!! Form::open(['route'=>'entregado.store','method'=>'POST']) !!}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-3"><span>Fecha:</span></div>
                                <div class="col-md-9">
                                    <input type="date" disabled value="<?php echo date("Y-m-d");?>" class="form-control">
                                    <input class="hidden" type="date" id="fecha" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control">
                                    <input type="text" id="solicitud_id" name="solicitud_id" value="{{$solicitud->id}}" class="hidden">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-3"><span>Hora:</span></div>
                                <div class="col-md-9">
                                    <input type="text" disabled value="<?php  echo date("h:i:s", time()+27000);?>" class="form-control">
                                    <input class="hidden" type="text" id="hora" name="hora" value="<?php  echo date("h:i:s", time()+27000);?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-3"><span>Nombre:</span></div>
                                <div class="col-md-9">
                                    <input type="text" disabled value="{{ Auth::user()->persona->nombrecompleto }}" class="form-control">
                                    <input class="hidden" type="text" id="usuario_id" name="usuario_id" value="{{ Auth::user()->id }}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-4">
                            <button id="entregar"type="submit" class="btn btn-success glyphicon glyphicon-saved">Entregar</button>
                            <input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
                </div>
                {!! Form::close() !!}

                </div>
            </div>

        </div>
	</div>
</div>
@endsection
