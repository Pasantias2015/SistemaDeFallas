@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
	<div class="panel panel-danger">
		<div class="panel-heading">Ejecutar Reparaci&oacuten </div>
		<div class="panel-body">
            @include('tools.errors')
            {!! Form::model($reparacion,['route'=>['reparaciones.update',$reparacion],'method'=>'PUT']) !!}
            <div class="row" >
                <div class="form-group row">
                    <div class="col-md-4">
                        <div class="col-md-8"><span>Orden N&deg:</span></div>
                        <div class="col-md-4"><input type="text" disabled value="{{$reparacion->id}}" class="form-control"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-4"><span>Fecha Orden:</span></div>
                        <div class="col-md-8"><input type="text" disabled value="{{$reparacion->fecha}}" class="form-control"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-4"><span>Fecha:</span></div>
                        <div class="col-md-8"><input type="date" disabled value="<?php echo date("Y-m-d");?>" class="form-control"></div>
                        <input type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="hidden">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-danger">        
                    <div class="panel-heading">Datos de la Unidad:</div>       
                    <div class="panel-body">    
                        <div class="col-md-4">
                            <div class="form-group row">    
                                <div class="col-md-4"><span>Unidad:</span></div>    
                                <div class="col-md-8">    
                                <input type="text" disabled value="{{$reparacion->mantenimientocorrectivo->serviciounidadoperador->unidad->nidentificacion }}" class="form-control">
                                </div>
                            </div>
                        </div>    
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-4"><span>Combustible:</span></div>
                                <div class="col-md-8">    
                                <input type="text" disabled value="{{$reparacion->mantenimientocorrectivo->serviciounidadoperador->unidad->modelo->combustible }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-4 "><span>Marca:</span></div>
                                <div class="col-md-8">    
                                <input type="text" disabled value="{{$reparacion->mantenimientocorrectivo->serviciounidadoperador->unidad->modelo->marca->nombre }}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
<div class="col-md-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">Piezas y Equipos Utilizados pata la Reparaci&oacuten:</div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <span>Agregue las Piezas y Equipos utilizadas en la Reparaci&oacuten: </span>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pieza1">Pieza</button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#herramienta">Equipo</button>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripci&oacuten</th>
                                    <th>Cantidad</th>
                                    <th>Acci&oacuten</th>
                                </tr>
                                @foreach($piezasr as $piezass)
                                <tr>                            
                                    <td>{{ $piezass->id }}</td>
                                    <td>{{ $piezass->pieza->descripcion }}</td>
                                    <td>{{ $piezass->descripcion }}</td>
                                    <td>{{ $piezass->cantidad }}</td>
                                    <td>
                                        <a href="" class="btn btn-danger">Eliminar</a>
                                    </td>                           
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripci&oacuten</th>
                                    <th>Cantidad</th>
                                    <th>Acci&oacuten</th>
                                </tr>
                                @foreach($equiposr as $equiposs)
                                <tr>                            
                                    <td>{{ $equiposs->id }}</td>
                                    <td>{{ $equiposs->herramienta->descripcion }}</td>
                                    <td>{{ $equiposs->descripcion }}</td>
                                    <td>{{ $equiposs->cantidad }}</td>
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

            <div class="col-md-12">
                <div class="panel panel-danger">        
                    <div class="panel-heading">Datos de la Reparaci&oacuten:</div>       
                    <div class="panel-body">
			<div class="form-group row">
    				<div class="col-md-3"><span>Categoria de la Falla: </span></div>
        				<div class="col-md-3"><span>Leve:</span>{!! Form::radio('nivel', 'Leve', false) !!} </div> 
        				<div class="col-md-3"><span>Medio:</span>{!! Form::radio('nivel', 'Medio', false) !!}</div>
        				<div class="col-md-3"><span>Mayor:</span>{!! Form::radio('nivel', 'Mayor', false) !!}</div>
     				 </div>
                        
                        <div class="form-group row">
                            <div class="col-md-4"><span>Descripci&oacuten del Trabajo Realizado: </span></div>
                            <div class="col-md-8">                            
                                <textarea name="descripciondos" id="descripciondos" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <div class="col-md-4"><span>Diagn&oacutestico TÃ©cnico: </span></div>
                                    <div class="col-md-8">                            
                                       <textarea name="diagnostico" id="diagnostico" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-6"><span>Hora de Inicio: </span></div>
                                <div class="col-md-6"> 
                                    <input type="time" name="horainicio" value="<?php  echo date("h:i:s", time()+27000);?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-6"><span>Hora de Culminaci&oacuten: </span></div>
                                <div class="col-md-6"> 
                                    <input type="time" name="horafin" value="<?php  echo date("h:i:s", time()+27000);?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-6"><span>Tiempo Total: </span></div>
                                <div class="col-md-6"> 
                                    <input type="time" name="tiempototal" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>  
                        
<div class="col-md-12">
                <div class="panel panel-danger">        
                    <div class="panel-heading">Trabajo Realizado Por:</div>       
                    <div class="panel-body">    
                        <div class="col-md-4">
                            <div class="form-group row">    
                                <div class="col-md-4"><span>Mec&aacutenico:</span></div>    
                                <div class="col-md-8">    
                                    <select name="mecanico" id="mecanico" class="form-control">
                                @foreach($mecanicos as $mecanico)
                                    <option value="{{ $mecanico->nombrecompleto }}">{{$mecanico->nombrecompleto}}</option>    
                                @endforeach
                            </select>   
                                </div>
                            </div>
                        </div>    
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-4"><span>T&eacutecnico Mec&aacutenico:</span></div>
                                <div class="col-md-8">    
                                    <select name="tecmecanico" id="tecmecanico" class="form-control">
                                @foreach($tecmecanicos as $tecmecanico)
                                    <option value="{{ $tecmecanico->nombrecompleto }}">{{$tecmecanico->nombrecompleto}}</option>    
                                @endforeach
                            </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-4 "><span>Ayudante Mec&aacutenico:</span></div>
                                <div class="col-md-8">    
                                    <select name="ayudmecanico" id="ayudmecanico" class="form-control">
                                @foreach($ayudmecanicos as $ayudmecanico)
                                    <option value="{{ $ayudmecanico->nombrecompleto }}">{{$ayudmecanico->nombrecompleto}}</option>    
                                @endforeach
                            </select> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           {!! Html::script('js/selectmultiples.js') !!} 

    @include('tools.botones-registrar')
        </div>
    </div>

</div>
@endsection

<!-- Modal Equipo-->
<div class="modal fade" id="herramienta" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content panel panel-danger">
            <div class="modal-header panel-heading">
                Agregar Equipos utilizados
            </div>
            <div class="modal-body">
            {!! Form::open(['route'=>'detallee.store',$reparacion,'method'=>'POST']) !!} 
                <div class="form-group">
                    <div class="col-md-8"><span>Orden N&deg:</span></div>
                    <div class="col-md-4"><input type="text" disabled value="{{$reparacion->id}}" class="form-control"></div>
                    <input type="text" name="orden_id" value="{{$reparacion->id}}" class="hidden">
                </div>
                <div class="form-group">
                    <span>Herramientas: </span>
                    <select name="herramienta_id" class="form-control">
                        @foreach($herramientas as $herramienta)
                            <option value="{{ $herramienta->id }}">{{ $herramienta->codigo."-".$herramienta->descripcion }}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <span>Descripci&oacuten: </span>
                    {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <span>Cantidad: </span>
                    <input type="number" name="cantidad" value=1 class="form-control" min=1 >
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


<!-- Modal Pieza-->
<div class="modal fade" id="pieza1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      
      <div class="modal-content panel panel-danger">
        <div class="modal-header panel-heading">
           Ingresar Pieza Yutong al Almacen
        </div>
        <div class="modal-body">
            {!! Form::open(['route'=>'detallep.store',$reparacion,'method'=>'POST']) !!} 
            <div class="form-group">
                    <div class="col-md-8"><span>Orden Nº:</span></div>
                    <div class="col-md-4"><input type="text" disabled value="{{$reparacion->id}}" class="form-control"></div>
                    <input type="text" name="orden_id" value="{{$reparacion->id}}" class="hidden">
                </div>
            <div class="form-group">
                <span>Marca: </span>
                <select name="marca" id="marca" class="form-control">
                    <option default>Seleccione</option>
                        @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>    
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <span>Modelo: </span>
                <select name="modelo" id="modelo" class="form-control">
                    <option default>Seleccione</option>
                </select>
            </div>
            <div class="form-group">
                <span>Sistema: </span>
                <select name="seccion" id="seccion" class="form-control">
                    <option default>Seleccione</option>
                  </select>
            </div>
            <div class="form-group">
                <span>Grupo: </span>
                <select name="grupo" id="grupo" class="form-control">
                    <option default>Seleccione</option>
                  </select>
            </div>
            <div class="form-group">
                <span>Pieza: </span>
                <select name="pieza_id" id="pieza" class="form-control">
                    <option default>Seleccione</option>
                  </select>
            </div>
            <div class="form-group">
                <span>Descripción: </span>
                {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <span>Cantidad: </span>
                <input type="number" name="cantidad"  value=1 class="form-control" min=1>
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