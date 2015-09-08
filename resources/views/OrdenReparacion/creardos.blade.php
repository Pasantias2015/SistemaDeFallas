@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
	<div class="panel panel-danger">
		<div class="panel-heading">Ejecutar Orden de Reparación </div>
		<div class="panel-body">
        @include('tools.errors')
        {!! Form::open(['route'=>'reparaciones.store','method'=>'POST']) !!}
        <div class="col-md-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Trabajo Realizado Por:</div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="col-md-4"><span>Mecánico:</span></div>
                                    <div class="col-md-8">    
                                        {!! Form::text('mecanico',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                             </div>
                             <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="col-md-4"><span>Tec. Mecánico:</span></div>
                                    <div class="col-md-8">    
                                        {!! Form::text('tecmecanico',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                              </div>
                               <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="col-md-4 "><span>Ayud. Mecánico:</span></div>
                                    <div class="col-md-8">    
                                        {!! Form::text('ayudmecanico',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>


            <div class="col-md-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">Piezas y Equipos Utilizados pata la Reparación:</div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <span>Agregue las Piezas y Equipos utilizadas en la Reparación: </span>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pieza">Pieza</button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#herramienta">Equipo</button>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>Accion</th>
                                </tr>
                                @foreach($reparaciones as $reparacion)
                                <tr>                            
                                    <td>{{ $reparacion->codigo }}</td>
                                    <td>{{ $reparacion->descripcion }}</td>
                                    <td>{{ $reparacion->cantidad }}</td>
                                    <td>
                                        <a href="" class="btn btn-danger">Eliminar</a>
                                    </td>                           
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    <div class="form-group row">
                            <div class="col-md-6"><span>Descripción del Trabajo Realizado: </span></div>
                            <div class="col-md-6">{!! Form::text('descripcion2',null,['class'=>'form-control']) !!}</div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-6"><span>Hora de Inicio: </span></div>
                                <div class="col-md-6"> 
                                    <input name="horainicio" value="<?php  echo date("h:i:s", time()+27000);?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-6"><span>Hora de Culminación: </span></div>
                                <div class="col-md-6"> 
                                    <input name="horafin" value="<?php  echo date("h:i:s", time()+27000);?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-6"><span>Tiempo Total: </span></div>
                                <div class="col-md-6"> 
                                    {!! Form::text('tiempototal',null,['class'=>'form-control']) !!}   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <div class="col-md-4"><span>Diagnóstico Técnico: </span></div>
                                    <div class="col-md-8">                            
                                       <textarea name="diagnostico" id="diagnostico" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

            
            
    @include('tools.botones-registrar')
        </div>
    </div>

</div>
@endsection
<div class="modal fade" id="pieza" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content panel panel-danger">
        <div class="modal-header panel-heading">
           Ingresar Pieza al Almacen
        </div>
        <div class="modal-body">
        {!! Form::open(['route'=>'almacen.store','method'=>'POST']) !!} 
            <div class="form-group">
                <span>Modelo: </span> 
                <select name="modelos" class="form-control">
                    @foreach($modelos as $modelo)
                        <option value="{{ $modelo->id }}">{{ $modelo->codigo."-".$modelo->descripcion."-".$modelo->combustible."-".$modelo->transmision."-".$modelo->dimension }}</option>    
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <span>Sistema: </span>
                <select name="seccion" class="form-control">
                    @foreach($secciones as $seccion)
                        <option value="{{ $seccion->id }}">{{ $seccion->codigo."-".$seccion->descripcion }}</option>    
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <span>Grupo: </span> 
                <select name="grupo" class="form-control">
                @foreach($grupos as $grupo)
                    <option value="{{ $grupo->id }}">{{ $grupo->codigo."-".$grupo->descripcion }}</option>    
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <span>Pieza: </span>
                <select name="codigo" class="form-control">
                    @foreach($piezas as $pieza)
                        <option value="{{ $pieza->codigo." : ".$pieza->descripcion}}">{{ $pieza->codigo."-".$pieza->descripcion }}</option>    
                   @endforeach
                </select>
            </div>
            <div class="form-group">
                <span>Descripcion: </span>
                {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
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

   
<!-- Modal Equipo-->
<div class="modal fade" id="herramienta" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content panel panel-danger">
            <div class="modal-header panel-heading">
                Agregar Equipos utilizados
            </div>
            <div class="modal-body">
            {!! Form::open(['route'=>'almacen.store','method'=>'POST']) !!} 
                <div class="form-group">
                    <span>Herramientas: </span>
                    <select name="codigo" class="form-control">
                        @foreach($herramientas as $herramienta)
                            <option value="{{ $herramienta->codigo." : ".$herramienta->descripcion }}">{{ $herramienta->codigo."-".$herramienta->descripcion }}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <span>Descripcion: </span>
                    {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <span>Cantidad: </span>
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