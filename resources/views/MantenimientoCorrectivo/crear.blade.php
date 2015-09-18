@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-12">
  <div class="col-md-12">
    <div class="panel panel-danger">
      <div class="panel-heading">Reporte de Falla </div>
      <div class="panel-body">
       @include('tools.errors')
        {!! Form::open(['route'=>'correctivo.store','method'=>'POST']) !!}
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-danger">
              <div class="panel-heading">Datos del Supervisor</div>
              <div class="panel-body">
                <div class="col-md-6">
                  <input type="text" disabled value="{{ Auth::user()->persona->nombrecompleto }}" class="form-control">
                  <input type="text" name="supervisor" value="{{ Auth::user()->persona->nombrecompleto }}" class="hidden">
                  <input type="text" name="pendiente" value="Si" class="hidden">
                </div>
                <div class="col-md-6">
                  <input type="text" disabled value="{{ Auth::user()->persona->cedula }}" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-danger">
              <div class="panel-heading">Datos Unidad</div>
              <div class="panel-body">
                <div class="col-md-4">
                  <span>Servicio- Unidad- Operador </span>
                   <select name="serviciounidadoperador_id" class="form-control">
                      @foreach($servicios as $servicio)
                        <option value="{{ $servicio->id }}">{{ $servicio->servicio->descripcion."-".$servicio->unidad->nidentificacion."-".$servicio->operador->persona->nombrecompleto }}</option>    
                      @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-md-9"><span>Kilometraje: </span></div>
                      <div class="col-md-12"> 
                        {!! Form::number('kilometraje',null,['class'=>'form-control']) !!}   
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-md-9"><span>Presión de Gas: </span></div>
                    <div class="col-md-12"> 
                      {!! Form::number('gas',null,['class'=>'form-control']) !!}   
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-danger">
              <div class="panel-heading">Datos Básicos</div>
              <div class="panel-body">
                <div class="col-md-6">
                  <span>Lugar: </span>
                  {!! Form::text('lugar',null,['class'=>'form-control']) !!}
                </div>
                <div class="col-md-3">
                  <span>Hora: </span>
                  <div class="col-md-12"><input type="time" name="hora" id="hora" value="<?php  echo date("h:i:s", time()+27000);?>" class="form-control"></div>
                </div>
                <div class="col-md-3">
                  <span>Fecha: </span>
                  <input  type="date" name="fecha" class="form-control" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
                </div>
              </div>
            </div>
          </div>
        </div>

         <div class="row">
            <div class="col-md-12">
              <div class="panel panel-danger">
                <div class="panel-heading">Ubicaci&oacuten de la Falla</div>
                <div class="panel-body">
		   <div class="row">
                    <div class="form-group">
                      <div class="col-md-5"><span>Sistema de la Falla: </span> </div>
                      <div class="col-md-7">
                        <select name="seccion_id" class="form-control">
                          <option value="Sistema de Propulsores">Sistema de Propulsores</option>    
                          <option value="Sistema Neumatico">Sistema Neum&aacutetico</option>    
                          <option value="Sistema de Carroceria">Sistema de Carroceria</option>    
                          <option value="Sistema Electrico">Sistema Electrico</option>    
                          <option value="Sistema de Direccion">Sistema de Direcci&oacuten</option>    
                        </select>
                      </div>
                    </div>
		</div>         
               <div class="row">
        	<div class="form-group">
                      <div class="col-md-5"><span>Sección de la Falla: </span> </div>
                      <div class="col-md-7">
                        <select name="seccion_id" class="form-control">
                          @foreach($secciones as $seccion)
                          <option value="{{ $seccion->id }}">{{ $seccion->descripcion." - ".$seccion->modelo->descripcion }}</option>    
                         @endforeach
                        </select>
                      </div>
                    </div>
 		</div>   
                    </div>        
                </div>
              </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-danger">
                <div class="panel-heading">Datos de la Falla</div>
                  <div class="panel-body">
                    <div class="form-group">
                      <div class="col-md-4">
                        <div class="col-md-9"><span>Sitio de Ocurrencia: </span></div>
                        <div class="col-md-12">{!! Form::text('ocurrencia',null,['class'=>'form-control']) !!}</div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-md-9"><span>Frecuencia: </span></div>
                        <div class="col-md-12">{!! Form::text('frecuencia',null,['class'=>'form-control']) !!}</div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-md-12"><span>Condiciones Generales:</span></div>
                        <div class="col-md-12">{!! Form::text('condiciones',null,['class'=>'form-control']) !!}</div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                          <div class="col-md-9"><span>Hora de Aparición: </span></div>
                          <div class="col-md-12"><input type="time" name="aparicion" id="aparicion" value="<?php  echo date("h:i:s", time()+27000);?>" class="form-control"></div>
                        </div>
                        <div class="col-md-4">
                          <div class="col-md-9"><span>Horas de Servicio: </span></div>
                          <div class="col-md-12">{!! Form::number('hservicio',null,['class'=>'form-control']) !!} </div>
                        </div>
                        <div class="col-md-4">
                          <div class="col-md-9"><span>Otras Observaciones: </span></div>
                          <div class="col-md-12">{!! Form::text('otrasobs',null,['class'=>'form-control']) !!} </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6"><span> Descripción Detallada de la Falla Presentada: </span></div>
                      <div class="col-md-12">
                      <textarea name="detalle" id="detalle" class="form-control" rows="5"></textarea>
                      </div>
                    </div>
              </div>
          </div>
      </div>
    </div>
    @include('tools.botones-registrar')
  </div>

{!! Form::close() !!}
</div>
@endsection