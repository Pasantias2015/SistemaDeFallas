@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Reportar de Falla</div>
        <div class="panel-body">
        @include('tools.errors')
          {!! Form::open(['route'=>'porfalla.store','method'=>'POST']) !!}
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-danger">
                    <div class="panel-heading">Datos Básicos</div>
                        <div class="panel-body">
                          <div class="form-group col-md-10 col-md-offset-1">
                                <div class="col-md-4"><span>Lugar: </span> </div>
                                <input type="text" disabled value="{{$porfalla->lugar}}" class="form-control">
                          </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="col-md-4"><span>Fecha:</span></div>
                                    <div class="col-md-7">
                                     <input type="text" disabled value="{{$porfalla->fecha}}" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                  <div class="col-md-4"><span>Hora:</span></div>
                                    <div class="col-md-7">
                                        <input type="text" disabled value="{{$porfalla->hora}}" class="form-control">

                                    </div>
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
                    <div class="panel-body">
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-3"><span>Unidad:</span></div>
                                <div class="col-md-9">   
                                    <input type="text" disabled value="{{$porfalla->unidad->nidentificacion}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-7"><span>Hora de Motor:</span></div>
                            <div class="col-md-5">
                                <input type="text" disabled value="{{$porfalla->horamotor}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-7"><span>Nivel Combustible:</span></div>
                            <div class="col-md-5">
                                <input type="text" disabled value="{{$porfalla->nivelcombus}}" class="form-control">
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
                    <div class="panel-heading">Datos de la Falla</div>
                    <div class="panel-body">
                        <div class="form-group col-md-offset-1 col-md-10">
                            <span>Falla Presentada: </span>
                            <input type="text" disabled value="{{$porfalla->falla->descripcion}}" class="form-control">
                        </div>
                        <div class="form-group col-md-offset-1 col-md-10">
                            <span>Causa Identificada: </span> 
                            <input type="text" disabled value="{{$porfalla->causa->causafalla}}" class="form-control">

                        </div>
                        <div class="form-group col-md-offset-1 col-md-10">
                            <span>Solucion Aplicada: </span>
                            <input type="text" disabled value="{{$porfalla->solucion->descripcion}}" class="form-control">
                        </div>
                    <div class="form-group row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="form-group">
                                <div class="col-md-12"><span>Frecuencia de Ocurrencia:</span></div>
                                <div class="col-md-12">
                                     <input type="text" disabled value="{{$porfalla->freocurrencia}}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-12"><span>Descripcion General de la Falla:</span></div>
                                <div class="col-md-12">
                                     <input type="text" disabled value="{{$porfalla->descripgeneral}}" class="form-control">
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
                    <div class="panel-heading">Piezas Reemplazadas</div>
                    <div class="panel-body">




                    </div>
                </div>
            </div>
        </div>

        <input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection

