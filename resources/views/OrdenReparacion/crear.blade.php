@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-10 ">
	<div class="panel panel-danger">
		<div class="panel-heading">Orden de Reparacion </div>
		<div class="panel-body">
         @include('tools.errors')
            {!! Form::open(['route'=>'reparaciones.store','method'=>'POST']) !!}
             {!! Form::open() !!}
            <div class="row">
               <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger">
                    <div class="panel-heading">Datos de la Unidad</div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-5"><span>VIN:</span></div>
                            <div class="col-md-6">    
                                <input type="text" disabled value="" class="form-control">
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-5"><span>Kilometraje:</span></div>
                            <div class="col-md-6">    
                                <input type="text" disabled value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-5"><span>Combustible Gas/Disel: </span></div>
                            <div class="col-md-6"> 
                             
                                {!! Form::text('combustible',null,['class'=>'form-control']) !!}   
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group row">
                       <div class="col-md-6 col-md-offset-1"><span>Refrigerante</span></div>
                       <div class="col-md-4">    
                           <span>Si:</span>{!! Form::radio('airene', 'Si') !!} 
                           <span>No:</span>{!! Form::radio('airene', 'No') !!} 
                       </div>
                   </div>
                    </div>  
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group row">
                       <div class="col-md-6 col-md-offset-1"><span>Aceite de Motor</span></div>
                       <div class="col-md-4">    
                           <span>Si:</span>{!! Form::radio('airene', 'Si') !!} 
                           <span>No:</span>{!! Form::radio('airene', 'No') !!} 
                       </div>
                   </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                       <div class="col-md-6 col-md-offset-1"><span>Aceite de Caja</span></div>
                       <div class="col-md-4">    
                           <span>Si:</span>{!! Form::radio('airene', 'Si') !!} 
                           <span>No:</span>{!! Form::radio('airene', 'No') !!} 
                       </div>
                   </div>
                    </div>  
                    </div>

                </div>

                </div>
            </div>

            <div class="row">
               <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger">
                    <div class="panel-heading">Datos sobre la Falla</div>
                      
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-5"><span>Seccion de la fallas: </span></div>
                            <div class="col-md-6"> 
                             
                                <input type="text" disabled value="" class="form-control">   
                            </div>
                        </div>
                    </div>             
                        <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-5"><span>Descripcion del Trabajo a Realizar: </span></div>
                            <div class="col-md-6"> 
                             
                                {!! Form::text('descipcionuno',null,['class'=>'form-control']) !!}   
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-5"><span>Descripcon del Trabajo Realizado: </span></div>
                            <div class="col-md-6"> 
                             
                                {!! Form::text('descripcion2',null,['class'=>'form-control']) !!}   
                            </div>
                        </div>
                    </div>


                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        <div class="form-group row">
                            <div class="col-md-5"><span>Hora de Inicio: </span></div>
                            <div class="col-md-6"> 
                             
                                {!! Form::text('horainicio',null,['class'=>'form-control']) !!}   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <div class="col-md-5"><span>Hora de Culminacion: </span></div>
                            <div class="col-md-6"> 
                             
                                {!! Form::text('horafin',null,['class'=>'form-control']) !!}   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <div class="col-md-5"><span>Tiempo Total: </span></div>
                            <div class="col-md-6"> 
                             
                                {!! Form::text('tiempototal',null,['class'=>'form-control']) !!}   
                            </div>
                        </div>
                    </div>  
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-5"><span>Diagnostico Tecnico: </span></div>
                            <div class="col-md-6"> 
                             
                                {!! Form::text('diagnostico',null,['class'=>'form-control']) !!}   
                            </div>
                        </div>
                    </div>
                      
                    </div>

                </div>

                
                </div>
            </div>


            <div class="row">
               <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger">
                    <div class="panel-heading">Piezas y Equipos Utilizados pata la Reparacion: </div>
                    
                 <div class="col-md-12">
                            <span>Agregue las Piezas y Equipos utilizadas en la reparacion: </span>
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

        <div class="row">
                <div class="col-md-1No">
                        <div class="col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Trabajo Realizado Por:</div>
                                <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Mecanico:</span></div>
                                    <div class="col-md-6">    
                                        {!! Form::text('mecanico',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Tec. Mecanico:</span></div>
                                    <div class="col-md-6">    
                                        {!! Form::text('tecmecanico',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Ayud. Mecanico:</span></div>
                                    <div class="col-md-6">    
                                        {!! Form::text('ayudmecanico',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Recibido y Revisado Por:</div>
                                {!! Form::text('recibido',null,['class'=>'form-control']) !!}
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
                </div>
            </div>

    </div>
               @include('tools.botones-registrar')

</div>
@endsection

<!-- Modal Pieza-->
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
                {!! Form::text('cantidad',null,['class'=>'form-control']) !!}
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
                    {!! Form::text('cantidad',null,['class'=>'form-control']) !!}
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

