@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-10 ">
    <div class="panel panel-danger">
      <div class="panel-heading">Reporte de Falla </div>
      <div class="panel-body">
         @include('tools.errors')
         {!! Form::open(['route'=>'reparaciones.store','method'=>'POST']) !!}
         {!! Form::open() !!}

          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-danger">
                    <div class="panel-heading">Datos Basicos</div>
                          <div class="form-group">
                                <span>Lugar: </span>
                                {!! Form::text('lugar',null,['class'=>'form-control']) !!}
                          </div>

                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group row">
                            <div class="col-md-5"><span>Fecha: </span></div>
                            <div class="col-md-6"> 
                                {!! Form::text('fecha',null,['class'=>'form-control']) !!}   
                            </div>
                          </div>
                          </div>
                          <div class="col-md-6">
                           <div class="form-group row">
                            <div class="col-md-5"><span>Hora: </span></div>
                            <div class="col-md-6"> 
                             
                                {!! Form::text('hora',null,['class'=>'form-control']) !!}   
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
                    <div class="panel-heading">Datos del Operador</div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group row">
                            <div class="col-md-7"><span>Cedula: </span></div>
                            <div class="col-md-7"> 
                                {!! Form::text('fecha',null,['class'=>'form-control']) !!}   
                            </div>
                          </div>
                          </div>
                          <div class="col-md-6">
                           <div class="form-group row">
                            <div class="col-md-7"><span>Nombre y Apellido: </span></div>
                            <div class="col-md-12"> 
                             
                                {!! Form::text('hora',null,['class'=>'form-control']) !!}   
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
                    <div class="panel-heading">Datos del Supervisor de Operaciones</div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group row">
                            <div class="col-md-7"><span>Cedula: </span></div>
                            <div class="col-md-7"> 
                                {!! Form::text('fecha',null,['class'=>'form-control']) !!}   
                            </div>
                          </div>
                          </div>
                          <div class="col-md-6">
                           <div class="form-group row">
                            <div class="col-md-7"><span>Nombre y Apellido: </span></div>
                            <div class="col-md-12"> 
                             
                                {!! Form::text('hora',null,['class'=>'form-control']) !!}   
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
                    <div class="panel-heading">Datos de la Unidad</div>
                        <div class="row">
                          <div class="col-md-4">
                          <div class="form-group row">
                            <div class="col-md-9"><span>Codigo: </span></div>
                            <div class="col-md-9"> 
                                {!! Form::text('fecha',null,['class'=>'form-control']) !!}   
                            </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group row">
                            <div class="col-md-9"><span>Kilometraje: </span></div>
                            <div class="col-md-9"> 
                                {!! Form::text('fecha',null,['class'=>'form-control']) !!}   
                            </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                           <div class="form-group row">
                            <div class="col-md-9"><span>Presion de Gas: </span></div>
                            <div class="col-md-9"> 
                             
                                {!! Form::text('hora',null,['class'=>'form-control']) !!}   
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
                    <div class="panel-heading">Seccion de la Falla</div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <span>Seccion de la Fallas: </span>
                                    <select name="seccion_id" class="form-control">
                                      @foreach($secciones as $seccion)
                                      <option value="{{ $seccion->id }}">{{ $seccion->descripcion }}</option>    
                                      @endforeach
                                    </select>
                                </div>
                            </div>             
                        
                         </div>

                    </div>
              </div>
          </div>


          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-danger">
                    <div class="panel-heading">Datos de la Falla</div>
                        <div class="row">
                          <div class="col-md-4">
                          <div class="form-group row">
                            <div class="col-md-9"><span>Sitio de Ocurrencia: </span></div>
                            <div class="col-md-9"> 
                                {!! Form::text('fecha',null,['class'=>'form-control']) !!}   
                            </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group row">
                            <div class="col-md-9"><span>Frecuncia: </span></div>
                            <div class="col-md-9"> 
                                {!! Form::text('fecha',null,['class'=>'form-control']) !!}   
                            </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                           <div class="form-group row">
                            <div class="col-md-11"><span>Condiciones generales: </span></div>
                            <div class="col-md-9"> 
                             
                                {!! Form::text('hora',null,['class'=>'form-control']) !!}   
                            </div>
                              </div>
                            </div>  
                        </div>

                                                <div class="row">
                          <div class="col-md-4">
                          <div class="form-group row">
                            <div class="col-md-9"><span>Hora de Aparicion: </span></div>
                            <div class="col-md-9"> 
                                {!! Form::text('fecha',null,['class'=>'form-control']) !!}   
                            </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group row">
                            <div class="col-md-9"><span>Hora de Servicio: </span></div>
                            <div class="col-md-9"> 
                                {!! Form::text('fecha',null,['class'=>'form-control']) !!}   
                            </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                           <div class="form-group row">
                            <div class="col-md-9"><span>Ruta Asignada: </span></div>
                            <div class="col-md-9"> 
                             
                                {!! Form::text('hora',null,['class'=>'form-control']) !!}   
                            </div>
                              </div>
                            </div>  
                        </div>

                          <div class="form-group">
                                <span>Descripcion detallada de la falla Presentada: </span>
                                {!! Form::text('lugar',null,['class'=>'form-control']) !!}
                          </div>

                    </div>
              </div>
          </div>


           <div class="row">
                    <div class="col-md-10 col-md-offset-1">
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
</div>
@include('tools.botones-registrar')
@endsection