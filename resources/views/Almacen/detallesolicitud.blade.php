@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-10">
	<div class="panel panel-danger">
		<div class="panel-heading">Detalle de Solicitud Al Almacen </div> <!-- faltan los filtros -->
		<div class="panel-body">
			@include('tools.errors')
         	<div class="panel panel-danger">
                <div class="panel-heading">¿Que Desea Solicitar al Almacen?:</div>
                <div class="col-md-10 col-md-offset-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pieza1">Pieza</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#herramienta">Herramienta</button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#articulo">Articulo</button>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#fluidos">Fluidos</button>
                </div>
                <div class="col-md-10 col-md-offset-2">
                	<table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Tipo</th>
                            <th>Accion</th>
                        </tr>
                        @foreach($solicitudes as $solicitud)
                        <tr>                            
                            <td>{{ $solicitud->id }}</td>
                            <td>{{ $solicitud->codigo }}</td>
                            <td>{{ $solicitud->descripcion }}</td>
                            <td>{{ $solicitud->cantidad }}</td>
                            <td>{{ $solicitud->tipo }}</td>
                            <td>
                                <a href="" class="btn btn-info">Modificar</a>
                                <a href="" class="btn btn-danger">Eliminar</a>
                            </td>                           
                        </tr>
                        @endforeach
                    </table>
                    {!! $solicitudes->render() !!}
                </div>
            </div>

        </div>
 		{!! Form::close() !!}
	</div>
</div>
{!! Html::script('js/selectmultiples.js') !!} 
@endsection