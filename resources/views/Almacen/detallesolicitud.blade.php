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
                <div class="col-md-4 col-md-offset-1"><span>Fecha:</span></div>
                <div class="col-md-7">
                  <input type="text" disabled value="" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col-md-6"><span>Mecanico:</span></div>
                <div class="col-md-6">   
                    <input type="text" disabled value="" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-md-5"><span>Usuario:</span></div>
                        <div class="col-md-6">
                            <input type="text" disabled value="" class="form-control">
                        </div>
                    </div>
                </div>
          </div>
         	<div class="panel panel-danger">
                <div class="panel-heading">¿Que Desea Solicitar al Almacen?:</div>
                <div class="col-md-10 col-md-offset-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pieza1">Pieza</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#herramienta">Herramienta</button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#articulo">Articulo</button>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#fluidos">Fluidos</button>
                </div>
                <div class="col-md-10 col-md-offset-1">
                	<table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Tipo</th>
                            <th>Accion</th>
                        </tr>
                        @foreach($detalles as $detalle)
                        <tr>                            
                            <td>{{ $detalle->id }}</td>
                            <td>{{ $detalle->codigo }}</td>
                            <td>{{ $detalle->descripcion }}</td>
                            <td>{{ $detalle->cantidad }}</td>
                            <td>{{ $detalle->tipo }}</td>
                            <td>
                                <a href="" class="btn btn-info">Modificar</a>
                                <a href="" class="btn btn-danger">Eliminar</a>
                            </td>                           
                        </tr>
                        @endforeach
                    </table>
                    
                </div>
            </div>

        </div>
 		{!! Form::close() !!}
	</div>
</div>
{!! Html::script('js/selectmultiples.js') !!} 
@endsection