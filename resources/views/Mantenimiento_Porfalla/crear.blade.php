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
                    </br>
                          <div class="form-group col-md-10 col-md-offset-1">
                                <div class="col-md-4"><span>Lugar: </span> </div>
                                <div class="col-md-8">{!! Form::text('lugar',null,['class'=>'form-control']) !!} </div>
                                
                          </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-4 col-md-offset-1"><span>Fecha:</span></div>
                                <div class="col-md-7">
                                    <input type="text" name="usuario_id" class="hidden" value="{{ Auth::user()->id }}">
                                    <input type="date" disabled value="<?php echo date("Y-m-d");?>" class="form-control">
                                    <input class="hidden" type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control">
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                           <div class="form-group row">
                            <div class="col-md-5"><span>Hora: </span></div>
                            <div class="col-md-6"> 
                                <input class="form-control" type="time" name="hora" id="hora" value="<?php  echo date("h:i:s", time()+27000);?>">
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
                    
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class="col-md-5"><span>Código:</span></div>   
                            <div class="col-md-7">
                                <select name="serviciounidadoperador_id" id="unidad" class="form-control">
                                 @foreach($unidades as $unidad)
                                 <option value="{{ $unidad->id }}">{{$unidad->unidad->nidentificacion}}</option>    
                                 @endforeach </select>
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="col-md-7"><span>Hora de Motor:</span></div>
                            <div class="col-md-5">
                                <input type="number" name="horamotor" id="litrosa" default="0" min="0" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-7"><span>Nivel Combustible:</span></div>
                            <div class="col-md-5">
                                {!! Form::text('nivelcombus',null,['class'=>'form-control']) !!}
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


                        <div class="form-group col-md-offset-1 col-md-10">
                            <span>Falla Presentada: </span>
                            <select name="falla_id" id="falla" class="form-control">
                                <option default>Seleccione</option> 
                                @foreach($fallas as $falla)
                                <option value="{{ $falla->id }}">{{ $falla->descripcion }}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-offset-1 col-md-10">
                            <span>Causa Identificada: </span> 
                            <select name="causa" id="causa" class="form-control">
                                <option default>Seleccione</option>    
                            </select>
                        </div>
                        <div class="form-group col-md-offset-1 col-md-10">
                            <span>Solucion Aplicada: </span>
                            <select name="solucion" id="solucion" class="form-control">
                                <option default>Seleccione</option>
                            </select>
                        </div>

                    <div class="form-group row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="form-group">
                                <div class="col-md-12"><span>Frecuencia de Ocurrencia:</span></div>
                                <div class="col-md-12">
                                    {!! Form::text('Freocurrencia',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-12"><span>Descripción General:</span></div>
                                <div class="col-md-12">
                                    <textarea name="descripgeneral" id="descripgeneral" class="form-control" rows="5"></textarea>
                                </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>¿Realizó el Cambio de alguna pieza?</span></div>   
                                <div class="col-md-3">
                                    <span>Si:</span>{!! Form::radio('cambio', 'Si', false) !!}
                                    <span>No:</span>{!! Form::radio('cambio', 'No', false) !!}
                                </div>
                        </div>
                    </div>
                    </div>

            </div> <button type="submit" class="btn btn-success">Aceptar</button>
        </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#falla').on('change',function(e){
        
        var falla_id = e.target.value;
            $.get('/ajax-causa?falla_id='+falla_id,function(data){
                // $('#causa').empty();
                $.each(data,function(index,causaObj){
                    $('#causa').append('<option value="'+causaObj.id+'">'+causaObj.causafalla+'</option>');
                });
            });
            console.log(e);
        });

        $('#causa').on('change',function(e){
        var causa_id = e.target.value;
            $.get('/ajax-solucion?causa_id='+causa_id,function(data){
                // $('#solucion').empty();
                $.each(data,function(index,solucionObj){
                    $('#solucion').append('<option value="'+solucionObj.id+'">'+solucionObj.descripcion+'</option>');
                });
            });
            console.log(e);
        });

 });
</script>
@endsection
