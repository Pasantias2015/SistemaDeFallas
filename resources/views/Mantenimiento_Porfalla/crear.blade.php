@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Reporte de Falla</div>
        <div class="panel-body">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-danger">
                    <div class="panel-heading">Datos Básicos</div>
                          <div class="form-group">
                                <span>Lugar: </span>
                                {!! Form::text('lugar',null,['class'=>'form-control']) !!}
                          </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-4"><span>Fecha:</span></div>
                                <div class="col-md-7">
                                    <input type="date" disabled value="<?php echo date("Y-m-d");?>" class="form-control">
                                    <input class="hidden" type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control">
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
                    <div class="panel-heading">Datos de la Unidad</div>
                    
                    <div class="form-group row">
                        <div class="col-md-4">
                        <div class="col-md-5"><span>Codigo:</span></div>   
                            <div class="col-md-7">
                                <select name="serviciounidadoperador_id" id="unidad" class="form-control">
                                 @foreach($unidades as $unidad)
                                 <option value="{{ $unidad->id }}">{{$unidad->unidad->nidentificacion}}</option>    
                                 @endforeach </select>
                            </div>
                           
                        </div>
                    
                        <div class="col-md-4">
                                <div class="col-md-7"><span>Hora actual de motor:</span></div>
                                 <div class="col-md-5">
                                  {!! Form::text('horamotor',null,['class'=>'form-control']) !!}
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


                        <div class="form-group">
                            <span>Falla Presentada: </span>
                            <select name="falla" class="form-control">
                                <option default>Seleccione</option> 
                                @foreach($fallas as $falla)
                                <option value="{{ $falla->id }}">{{ $falla->descripcion }}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <span>Causa Identificada: </span> 
                            <select name="causa" class="form-control">
                                <option default>Seleccione</option>    
                            </select>
                        </div>
                        <div class="form-group">
                            <span>Solucion Aplicada: </span>
                            <select name="solucion" class="form-control">
                                <option default>Seleccione</option>
                            </select>
                        </div>


                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-7"><span>Frecuencia de Ocurrencia:</span></div>
                                <div class="col-md-8">
                                    {!! Form::text('Freocurrencia',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                                <div class="col-md-7"><span>Descripcion General:</span></div>
                                <div class="col-md-8">
                                    {!! Form::text('descripgeneral',null,['class'=>'form-control']) !!}
                                </div>
                        </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger">
                    <div class="panel-heading">Piezas Remplazadas</div>





                </div>
            </div>
        </div>


        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#falla').on('change',function(e){
        
            var marca_id = e.target.value;
            $.get('/ajax-causa?falla_id='+falla_id,function(data){
                $('#causa').empty();
                $.each(data,function(index,causaObj){
                    $('#causa').append('<option value="'+causaObj.id+'">'+causaObj.descripcion+'</option>');
                });
            });
            console.log(e);
        });
 });
</script>
  
@endsection

