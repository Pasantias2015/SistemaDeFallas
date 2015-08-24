@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-10">
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
                <div class="col-md-6"><span>Mecanico:</span></div>
                <div class="col-md-6">   
                    <input type="text" disabled value="{{ $solicitud->persona_id }}" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-md-5"><span>Usuario:</span></div>
                        <div class="col-md-6">
                            <input type="text" disabled value="{{$solicitud->usuario_id}}" class="form-control">
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-md-7"><span>Solicitud Nº:</span></div>
                        <div class="col-md-5">
                            <input type="text" disabled value="{{$solicitud->id}}" class="form-control">
                        </div>
                    </div>
                </div>
          </div>
                      <a href="{{ route('dsolicitud.show', $solicitud) }}" class="btn btn-success">Entregar</a>
         	<div class="panel panel-danger">
                <div class="panel-heading">Detalle de lo Solicitado</div>
                <div class="col-md-12">
                	<table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Solicitud Nº</th>
                            <th>Descripcion</th>
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
        </div>
        
	</div>
</div>
@endsection
