@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-12">
  <div class="col-md-12">
    <div class="panel panel-danger">
      <div class="panel-heading">Reporte de Falla </div>
      <div class="panel-body">
       @include('tools.errors')
                  {!! Form::model($correctivo,['route'=>['correctivo.update',$correctivo],'method'=>'PUT']) !!}

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-danger">
              <div class="panel-heading">Datos</div>
              <div class="panel-body">
                <div class="col-md-2"><span>Supervisor:</span> </div>
                <div class="col-md-6">
                  <input type="text" disabled value="{{ $correctivo->supervisor }}" class="form-control">
                </div> 
                <div class="col-md-4">
                <div class="col-md-6"><span>Nº Reporte</span></div>
                <div class="col-md-6"> <input type="text" disabled value="{{ $correctivo->id }}" class="form-control"></div>
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
                    <input type="text" disabled value="{{ $correctivo->serviciounidadoperador->servicio->descripcion."-".$correctivo->serviciounidadoperador->unidad->nidentificacion."-".$correctivo->serviciounidadoperador->operador->persona->nombrecompleto }}" class="form-control">
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-md-9"><span>Kilometraje: </span></div>
                      <div class="col-md-12"> 
                       <input type="text" disabled value="{{ $correctivo->kilometraje }}" class="form-control"> 
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <div class="col-md-9"><span>Presión de Gas: </span></div>
                    <div class="col-md-12"> 
                       <input type="text" disabled value="{{ $correctivo->gas }}" class="form-control">                     
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
                  <input type="text" disabled value="{{ $correctivo->lugar }}" class="form-control"> 
                </div>
                <div class="col-md-3">
                  <span>Hora: </span>
                  <input type="text" disabled value="{{ $correctivo->hora }}" class="form-control"> 
                </div>
                <div class="col-md-3">
                  <span>Fecha: </span>
                  <input type="text" disabled value="{{ $correctivo->fecha }}" class="form-control"> 
                </div>
              </div>
            </div>
          </div>
        </div>

         <div class="row">
            <div class="col-md-12">
              <div class="panel panel-danger">
                <div class="panel-heading">Sección de la Falla</div>
                <div class="panel-body">
                    <div class="form-group">
                      <div class="col-md-5"><span>Sección de la Falla: </span> </div>
                      <div class="col-md-7">
                        <input type="text" disabled value="{{ $correctivo->seccion->descripcion }}" class="form-control"> 
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
                        <div class="col-md-12"><input type="text" disabled value="{{ $correctivo->ocurrencia }}" class="form-control"></div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-md-9"><span>Frecuencia: </span></div>
                        <div class="col-md-12"><input type="text" disabled value="{{ $correctivo->frecuencia }}" class="form-control"></div>
                      </div>
                      <div class="col-md-4">
                        <div class="col-md-12"><span>Condiciones Generales:</span></div>
                        <div class="col-md-12"><input type="text" disabled value="{{ $correctivo->condiciones }}" class="form-control"></div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                          <div class="col-md-9"><span>Hora de Aparición: </span></div>
                          <div class="col-md-12"><input type="text" disabled value="{{ $correctivo->aparicion }}" class="form-control"></div>
                        </div>
                        <div class="col-md-4">
                          <div class="col-md-9"><span>Horas de Servicio: </span></div>
                          <div class="col-md-12"><input type="text" disabled value="{{ $correctivo->hservicio }}" class="form-control"></div>
                        </div>
                        <div class="col-md-4">
                          <div class="col-md-9"><span>Otras Observaciones: </span></div>
                          <div class="col-md-12"><input type="text" disabled value="{{ $correctivo->otrasobs }}" class="form-control"></div>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6"><span> Descripción Detallada de la Falla Presentada: </span></div>
                      <div class="col-md-12">
                      <input type="textarea" disabled value="{{ $correctivo->detalle }}" class="form-control">
                      </div>
                    </div>
              </div>
          </div>
      </div>
    </div>

     <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-danger">
          <div class="panel-heading">Recibido y Revisado Por:</div>
            <div class="panel-body">
              <div class="col-md-5 col-md-offset-1"><span>Usuario:</span></div>
              <div class="col-md-5">
                <input type="text" disabled value="{{ Auth::user()->persona->nombrecompleto }}" class="form-control">  
                <input type="text" name="revisado"  value="{{ Auth::user()->persona->nombrecompleto }}" class="hidden">  
              </div>
            </div> 
          </div>
          <button id="registrar"type="submit" class="btn btn-success glyphicon glyphicon-menu-right"> Siguiente</button>
                         
        </div>
      </div>
    {!! Form::close() !!}      
  </div>

</div>
@endsection