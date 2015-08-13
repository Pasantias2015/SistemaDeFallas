@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Ver Mantenimiento : {{ $diario->fecha }}</div>
        <div class="panel-body">
        @include('tools.errors')
        {!! Form::model($diario) !!}                  
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col-md-5"><span>Fecha:</span></div>
                <div class="col-md-6">
                  <input type="text" disabled value="{{$diario->fecha}}" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col-md-5"><span>Unidad:</span></div>
                <div class="col-md-6">   
                    <input type="text" disabled value="{{$diario->serviciounidadoperador_id}}" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger">
                    <div class="panel-heading">Parametros a Revisar</div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Item:</span></div>
                        <div class="col-md-3"><span>Buen estado:</span></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo Nivel de aceite del motor</span></div>
                        <div class="col-md-3"> 
                            <input type="text" disabled value="{{$diario->cnaceitem}}" class="form-control">   
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo Nivel de agua refrigerante</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->cnarefrigerante}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Aire de los neumáticos</span></div>
                        <div class="col-md-3"> 
                            <input type="text" disabled value="{{$diario->airene}}" class="form-control">   
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Nivel de combustible</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->cncomb}}" class="form-control">    
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Estado Interior de la Unidad: Asientos</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->ceiasientos}}" class="form-control">    
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Estado Exterior de la Unidad: Carroceria</span></div>
                        <div class="col-md-3">   
                            <input type="text" disabled value="{{$diario->ceicarroceria}}" class="form-control"> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Estado Exterior de la Unidad: Vidrios</span></div>
                        <div class="col-md-3">   
                            <input type="text" disabled value="{{$diario->ceeunidad}}" class="form-control"> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo de Frenos y embrague</span></div>
                        <div class="col-md-3"> 
                            <input type="text" disabled value="{{$diario->cfrenos}}" class="form-control">   
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo de Correas</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->ccorrea}}" class="form-control">    
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo de Radiador</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->cradiador}}" class="form-control">    
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Equipo de seguridad y herramientas (gato, triángulo, extintor, conos).</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->ceseguridad}}" class="form-control">    
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo de los Bornes</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->cbornes}}" class="form-control">    
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Estado Fisico de las Luces</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->cefluces}}" class="form-control">     
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Encendido de las Luces de Cruce</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->celuces}}" class="form-control">     
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Encendido de las Luces de Emergencia</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->celucesem}}" class="form-control">     
                        </div>
                    </div>

                </div>
            </div>
            </div>
       {!! Form::close() !!}
    </div>
    <input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
</div>
@endsection
