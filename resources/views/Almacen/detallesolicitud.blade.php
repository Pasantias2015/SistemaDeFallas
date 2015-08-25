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
                <div class="panel-heading">¿Que Desea Solicitar al Almacen?:</div>
                <div class="col-md-8 col-md-offset-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pieza1">Pieza</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#herramienta">Herramienta</button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#articulo">Articulo</button>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#fluidos">Fluidos</button>
                </div>
                <div class="col-md-12">
                	<table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Solicitud Nº</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Tipo</th>
                            <th>Accion</th>
                        </tr>
                        @foreach($detalles as $detalle)
                        <tr>                            
                            <td>{{ $detalle->id }}</td>
                            <td>{{ $detalle->solicitud_id }}</td>
                            <td>{{ $detalle->almacen->codigo." - ".$detalle->almacen->descripcion }}</td>
                            <td>{{ $detalle->cantidad }}</td>
                            <td>{{ $detalle->almacen->tipo }}</td>
                            <td>
                                <a href="" class="btn btn-danger">Eliminar</a>
                            </td>                           
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <a action="action" href="{{ url('/home') }}" value="" class="btn btn-danger">Terminar</a>
        </div>
	</div>
</div>
{!! Html::script('js/selectmultiples.js') !!} 
@endsection

<!-- Modal Herramienta-->
<div class="modal fade" id="herramienta" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content panel panel-danger">
            <div class="modal-header panel-heading">
                Solicitar Herramienta al Almacen
            </div>
            <div class="modal-body">
            {!! Form::open(['route'=>'dsolicitud.store',$solicitud,'method'=>'POST']) !!} 
                <div class="form-group row">
                    <div class="col-md-7"><span>Solicitud Nº:</span></div>
                    <div class="col-md-5">
                        <input type="text" disabled value="{{$solicitud->id}}" class="form-control">
                        <input type="hidden" name="solicitud_id" value="{{$solicitud->id}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <span>Herramientas: </span>
                    <select name="almacen_id" class="form-control">
                        @foreach($herramientas as $herramienta)
                            <option value="{{ $herramienta->id}}">{{ $herramienta->codigo."-".$herramienta->descripcion." -Cant Disp.:".$herramienta->cantidad }}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <span>Cantidad Solicitada: </span>
                    {!! Form::number('cantidad',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                        <input type="hidden" name="tipo" value="Herramienta">
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Registrar</button>
              <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
            </div>
            {!! Form::close() !!}
      </div>
    </div>
</div>
<!-- Modal Articulo -->
<div class="modal fade" id="articulo" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content panel panel-danger">
            <div class="modal-header panel-heading">
                Solicitar Articulo al Almacen
            </div>
            <div class="modal-body">
            {!! Form::open(['route'=>'dsolicitud.store',$solicitud,'method'=>'POST']) !!} 
                    <div class="form-group row">
                        <div class="col-md-7"><span>Solicitud Nº:</span></div>
                        <div class="col-md-5">
                            <input type="text" disabled value="{{$solicitud->id}}" class="form-control">
                            <input type="hidden" name="solicitud_id" value="{{$solicitud->id}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <span>Articulo: </span>
                        <select name="almacen_id" class="form-control">
                            @foreach($articulos as $articulo)
                                <option value="{{ $articulo->id}}">{{ $articulo->codigo."-".$articulo->descripcion." -Cant Disp.:".$articulo->cantidad }}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Cantidad: </span>
                         {!! Form::number('cantidad',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="tipo" value="Articulo">
                    </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-warning">Registrar</button>
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
 <!-- Modal Fluidos -->
<div class="modal fade" id="fluidos" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content panel panel-danger">
            <div class="modal-header panel-heading">
                Ingresar Fluidos al Almacen
            </div>
            <div class="modal-body">
            {!! Form::open(['route'=>'dsolicitud.store',$solicitud,'method'=>'POST']) !!} 
                   <div class="form-group row">
                        <div class="col-md-7"><span>Solicitud Nº:</span></div>
                        <div class="col-md-5">
                            <input type="text" disabled value="{{$solicitud->id}}" class="form-control">
                            <input type="hidden" name="solicitud_id" value="{{$solicitud->id}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <span>Fluidos: </span>
                        <select name="almacen_id" class="form-control">
                            @foreach($fluidos as $fluido)
                                <option value="{{ $fluido->id}}">{{ $fluido->codigo."-".$fluido->descripcion." -Cant Disp.:".$fluido->cantidad }}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                         <span>Cantidad(Lts): </span>{!! Form::number('cantidad',null,['class'=>'form-control']) !!} 
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="tipo" value="Fluidos">
                    </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-info">Registrar</button>
              <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- Modal Pieza-->
<div class="modal fade" id="pieza1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      
      <div class="modal-content panel panel-danger">
        <div class="modal-header panel-heading">
           Ingresar Pieza al Almacen
        </div>
        <div class="modal-body">
            {!! Form::open(['route'=>'dsolicitud.store',$solicitud,'method'=>'POST']) !!} 
             <div class="form-group row">
                        <div class="col-md-7"><span>Solicitud Nº:</span></div>
                        <div class="col-md-5">
                            <input type="text" disabled value="{{$solicitud->id}}" class="form-control">
                            <input type="hidden" name="solicitud_id" value="{{$solicitud->id}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <span>Piezas: </span>
                        <select name="almacen_id" class="form-control">
                            @foreach($piezas as $pieza)
                                <option value="{{ $pieza->id}}">{{ $pieza->codigo."-".$pieza->descripcion." -Cant Disp.:".$pieza->cantidad }}</option>    
                            @endforeach
                        </select>
                    </div>
            <div class="form-group">
                <span>Cantidad: </span>
                {!! Form::number('cantidad',null,['class'=>'form-control']) !!}
            </div> 
            <div class="form-group">
                    <input type="hidden" name="tipo" value="Pieza">
            </div>       
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
      {!! Form::close() !!}
      </div>
    </div>
</div>