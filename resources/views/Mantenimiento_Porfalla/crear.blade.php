@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Reportar de Falla</div>
        <div class="panel-body">
        @include('tools.errors')
          {!! Form::open(['route'=>'porfalla.store','method'=>'POST']) !!}
             <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger">
                    <div class="panel-heading">Datos Básicos</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group col-md-10 col-md-offset-1">
                            <div class="col-md-2"><span>Lugar: </span> </div>
                            <div class="col-md-8">{!! Form::text('lugar',null,['class'=>'form-control']) !!} </div> 
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-6 col-md-offset-1">
                                <div class="form-group row">
                                    <div class="col-md-2 col-md-offset-1"><span>Fecha:</span></div>
                                    <div class="col-md-7">
                                        <input type="text" name="usuario_id" class="hidden" value="{{ Auth::user()->id }}">
                                        <input type="date" disabled value="<?php echo date("Y-m-d");?>" class="form-control">
                                        <input class="hidden" type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="col-md-2"><span>Hora:</span></div>
                                    <div class="col-md-6">    
                                        <input disabled value="<?php  echo date("h:i:s", time()+27000);?>" class="form-control">
                                        <input type="time" name="hora" id="hora" value="<?php  echo date("h:i:s", time()+27000);?>" class="hidden">
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
                                                <select name="unidad_id" id="unidad" class="form-control">
                                                <option default>Seleccione</option> 
                                                    @foreach($unidades as $unidad)
                                                        <option value="{{ $unidad->id }}">{{$unidad->nidentificacion}}</option>    
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-md-5"><span> Hora de Motor:</span></div>
                                        <div class="col-md-6">
                                        <input type="number" name="horamotor" id="horamotor" default="0" min="0" class="form-control"/></div>

                                        </div>
                                    

                                    <div class="col-md-4">
                                        <div class="col-md-6"><span>Nivel Combustible:</span></div>
                                        <div class="col-md-6">
                                            <input type="number" name="nivelcombus" id="nivelcombus" default="0" min="0" class="form-control"/></div>
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
                                        <select name="falla_id" id="falla_id" class="form-control">
                                            <option default>Seleccione</option> 
                                            @foreach($fallas as $falla)
                                            <option value="{{ $falla->id }}">{{ $falla->descripcion }}</option>    
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-offset-1 col-md-10">
                                        <span>Causa Identificada: </span> 
                                        <select name="causa_id" id="causa_id" class="form-control">
                                            <option default>Seleccione</option>    
                                        </select>
                                    </div>
                                    <div class="form-group col-md-offset-1 col-md-10">
                                        <span>Solución Aplicada: </span>
                                        <select name="solucion_id" id="solucion_id" class="form-control">
                                            <option default>Seleccione</option>
                                        </select>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="form-group">
                                            <div class="col-md-12"><span>Frecuencia de Ocurrencia:</span></div>
                                            <div class="col-md-12">
                                                {!! Form::text('freocurrencia',null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-md-10 col-md-offset-1">
                                            <div class="col-md-12"><span>Descripción General de la Falla:</span></div>
                                            <div class="col-md-12">
                                                <textarea name="descripgeneral" id="descripgeneral" class="form-control" rows="5"></textarea>
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





                            </div>
                        </div>
                    </div>
            </div>

        </div>
        @include('tools.botones-registrar')
    </div>
        {!! Form::close() !!}
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#falla_id').on('change',function(e){
        
        var falla_id = e.target.value;
            $.get('/ajax-causa?falla_id='+falla_id,function(data){
                // $('#causa').empty();
                $.each(data,function(index,causaObj){
                    $('#causa_id').append('<option value="'+causaObj.id+'">'+causaObj.causafalla+'</option>');
                });
            });
            console.log(e);
        });

        $('#causa_id').on('change',function(e){
        var causa_id = e.target.value;
            $.get('/ajax-solucion?causa_id='+causa_id,function(data){
                // $('#solucion').empty();
                $.each(data,function(index,solucionObj){
                    $('#solucion_id').append('<option value="'+solucionObj.id+'">'+solucionObj.descripcion+'</option>');
                });
            });
            console.log(e);
        });

 });
</script>
@endsection