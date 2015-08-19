@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Mantenimiento Diario</div>
        <div class="panel-body">
         @include('tools.errors')
            {!! Form::open(['route'=>'diario.store','method'=>'POST']) !!}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-md-4"><span>Fecha:</span></div>
                        <div class="col-md-7">
                        {!! Form::date('fecha','Fecha',['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-md-3"><span>Unidad:</span></div>
                        <div class="col-md-9">   
                            <select name="unidad_id" id="unidad" class="form-control">
                                @foreach($unidades as $unidad)
                                    <option value="{{ $unidad->id }}">{{$unidad->unidad->nidentificacion}}</option>    
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-md-5"><span>Kilometraje Actual:</span></div>
                        <div class="col-md-6">
                            {!! Form::text('kilometrajeactual',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4">
                            <input type="hidden" name="kilometrajebase" value="" class="form-control">
                        </div>
                    </div>
                </div>  
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">Parametros a Revisar</div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo Nivel de Aceite del Motor.</span><strong>¿Buen Nivel?</strong></div>
                        <div class="col-md-2">
                            <select name="cnaceitem" id="cnaceitem" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>    
                        </div>
                    </div>
                        <div class="form-group row aceite">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                            <div class="col-md-2">{!! Form::number('litrosa',0,['class'=>'form-control']) !!}</div>
                            <div class="col-md-2"><span>Lts</span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo Nivel de Refrigerante.</span><strong>¿Buen Nivel?</strong></div>
                        <div class="col-md-2">
                            <select name="cnrefrigerante" id="cnrefrigerante" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>    
                        </div>
                    </div>
                        <div class="form-group row refrigerante">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                            <div class="col-md-2">{!! Form::number('litrosr',0,['class'=>'form-control']) !!}</div>
                            <div class="col-md-2"><span>Lts</span></div>
                        </div>
                    <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>¿Presenta Fuga de Refrigerante?</span></div>
                        <div class="col-md-2">
                            <select name="frefrigerante" id="frefrigerante" class="form-control">
                                <option value="No">No</option>
                                <option value="Si">Si</option>              
                            </select>    
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo de la Presión de Aire de los Neumáticos.</span><strong>¿Presión Aceptable?</strong></div>
                        <div class="col-md-2">    
                            <select name="airene" id="airene" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group row neumaticos">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuanto Aire(psi/bar) Completó?</strong></div>
                            <div class="col-md-2">{!! Form::number('aire',0,['class'=>'form-control']) !!}</div>
                            <div class="col-md-2"><span>(psi/bar)</span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Nivel de Combustible.</span><strong>¿Buen Nivel?</strong></div>
                        <div class="col-md-2">    
                            <select name="cncomb" id="cncomb" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group row combustible">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuanto Combustible Completó?</strong></div>
                            <div class="col-md-2">{!! Form::number('combust',0,['class'=>'form-control']) !!}</div>
                            <div class="col-md-2"><span>lts</span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Estado Interior de la Unidad: Asientos.</span><strong>¿Buen Estado?</strong></div>
                        <div class="col-md-2">    
                            <select name="ceiasientos" id="ceiasientos" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group row asientos">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Asientos En mal estado?</strong></div>
                            <div class="col-md-2">{!! Form::number('asientosmal',0,['class'=>'form-control']) !!}</div>
                            <div class="col-md-2"><span></span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Estado Exterior de la Unidad: Carroceria y Vidrios.</span><strong>¿Buen Estado?</strong></div>
                         <div class="col-md-2">    
                            <select name="ceecarroceria" id="ceecarroceria" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group row carroceria">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Rayones/golpes detectó?</strong></div>
                            <div class="col-md-2">{!! Form::number('rayones',0,['class'=>'form-control']) !!}</div>
                            <div class="col-md-2"><span></span></div>
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Vidrios Rotos detectó?</strong></div>
                            <div class="col-md-2">{!! Form::number('vidrios',0,['class'=>'form-control']) !!}</div>
                            <div class="col-md-2"><span></span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Estado de las Correas(tensión, estado fisico)</span><strong>¿Buen Estado?</strong></div>
                        <div class="col-md-2">    
                            <select name="ccorrea" id="ccorrea" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group row correa">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Ajustó las Correas?</strong></div>
                            <div class="col-md-2">
                                <span>Si:</span>{!! Form::radio('acorrea', 'Si') !!} 
                                <span>No:</span>{!! Form::radio('acorrea', 'No') !!} </div>
                            <div class="col-md-2"><span></span></div>
                            <div class="col-md-7 col-md-offset-1"><strong>¿Necesita Cambio de Correa?</strong></div>
                            <div class="col-md-2">
                                <span>Si:</span>{!! Form::radio('camcorrea', 'Si') !!} 
                                <span>No:</span>{!! Form::radio('camcorrea', 'No') !!} </div>
                            <div class="col-md-2"><span></span></div>
                        </div>

                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Equipo de Seguridad (triángulo, extintor, conos).</span><strong>¿Completo?</strong></div>
                        <div class="col-md-2">    
                            <select name="ceseguridad" id="ceseguridad" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group row equipo">
                            <div class="col-md-5 col-md-offset-1"><strong>¿Que Falta?</strong></div>
                            <div class="col-md-6 ">
                                <span>Triangulo:</span>{!! Form::radio('triangulo', 'falta') !!} 
                                <span>Extintor:</span>{!! Form::radio('extintor', 'falta') !!} 
                                <span>Conos:</span>{!! Form::radio('conos', 'falta') !!} 
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Estado Fisico de las Luces Internas</span><strong>¿En Buen Estado Todas?</strong></div>
                        <div class="col-md-2">    
                            <select name="ceflucesi" id="ceflucesi" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group row lucesinternas">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuantas Luces Internas en Mal Estado?</strong></div>
                            <div class="col-md-2">{!! Form::number('lucesimal',0,['class'=>'form-control']) !!}</div>
                            <div class="col-md-2"><span></span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Encendido de las Luces Internas</span><strong>¿Encienden Todas?</strong> </div>
                          <div class="col-md-2">    
                            <select name="celucesi" id="celucesi" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group row elucesinternas">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuantas Luces Internas No Encienden?</strong></div>
                            <div class="col-md-2">{!! Form::number('elucesimal',0,['class'=>'form-control']) !!}</div>
                            <div class="col-md-2"><span></span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Estado Fisico de las Luces Externas</span><strong>¿En Buen Estado Todas?</strong></div>
                        <div class="col-md-2">    
                            <select name="celucese" id="celucese" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group row lucesexternas">
                            <div class="col-md-5 col-md-offset-1"><strong>¿Cuales Luces Externas en Mal estado?</strong></div>
                            <div class="col-md-6 ">
                                <div class="col-md-6 "><span>Delantero Derecho:</span>{!! Form::radio('ddere', '*') !!}</div>
                                <div class="col-md-6 "><span>Delantero Izquierdo:</span>{!! Form::radio('dizqe', '*') !!}</div> 
                                <div class="col-md-6 "><span>Trasero Derecho:</span>{!! Form::radio('tdere', '*') !!} </div> 
                                <div class="col-md-6 "><span>Trasero Izquierdo:</span>{!! Form::radio('tizqe', '*') !!} </div> 
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Encendido de las Luces de Cruce</span><strong>¿Encienden Todas?</strong></div>
                         <div class="col-md-2">    
                            <select name="celucesc" id="celucesc" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group row elucesexternas">
                            <div class="col-md-5 col-md-offset-1"><strong>¿Cuales Luces Externas no Encienden?</strong></div>
                            <div class="col-md-6 ">
                                <div class="col-md-6 "><span>Delantero Derecho:</span>{!! Form::radio('dderc', '*') !!}</div>
                                <div class="col-md-6 "><span>Delantero Izquierdo:</span>{!! Form::radio('dizqc', '*') !!}</div> 
                                <div class="col-md-6 "><span>Trasero Derecho:</span>{!! Form::radio('tderc', '*') !!} </div> 
                                <div class="col-md-6 "><span>Trasero Izquierdo:</span>{!! Form::radio('tizqc', '*') !!} </div> 
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Encendido de las Luces de Emergencia</span><strong>¿Encienden Todas?</strong></div>
                        <div class="col-md-2">    
                            <select name="celucesem" id="celucesem" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group row elucesemexternas">
                            <div class="col-md-5 col-md-offset-1"><strong>¿Cuales Luces Emergencia no Enciende?</strong></div>
                            <div class="col-md-6 ">
                                <div class="col-md-6 "><span>Delantero Derecho:</span>{!! Form::radio('dderem', '*') !!}</div>
                                <div class="col-md-6 "><span>Delantero Izquierdo:</span>{!! Form::radio('dizqem', '*') !!}</div> 
                                <div class="col-md-6 "><span>Trasero Derecho:</span>{!! Form::radio('tderem', '*') !!} </div> 
                                <div class="col-md-6 "><span>Trasero Izquierdo:</span>{!! Form::radio('tizqem', '*') !!} </div> 
                            </div>
                        </div>
                        <div class="col-md-6">   
                            <select name="usuario_id" class="hidden">
                                <option value=1></option>    
                            </select>
                        </div>
                </div>
                @include('tools.botones-registrar')
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script>

    $(document).ready(function(){
        $(".aceite").toggle();
        $(".refrigerante").toggle();
        $(".neumaticos").toggle();
        $(".combustible").toggle();
        $(".asientos").toggle();
        $(".carroceria").toggle();
        $(".correa").toggle();
        $(".equipo").toggle();
        $(".lucesinternas").toggle();
        $(".elucesinternas").toggle();
        $(".lucesexternas").toggle();
        $(".elucesexternas").toggle();
        $(".elucesemexternas").toggle();

        $('#cnaceitem').on('change', function() {
            if(this.value == "No"){
                $(".aceite").toggle();
            }
            else{
                 $(".aceite").toggle();
            };
        });
        $('#cnrefrigerante').on('change', function() {
            if(this.value == "No"){
                $(".refrigerante").toggle();
            }
            else{
                 $(".refrigerante").toggle();
            };
        });
        $('#airene').on('change', function() {
            if(this.value == "No"){
                $(".neumaticos").toggle();
            }
            else{
                 $(".neumaticos").toggle();
            };
        });
        $('#cncomb').on('change', function() {
            if(this.value == "No"){
                $(".combustible").toggle();
            }
            else{
                 $(".combustible").toggle();
            };
        });
        $('#ceiasientos').on('change', function() {
            if(this.value == "No"){
                $(".asientos").toggle();
            }
            else{
                 $(".asientos").toggle();
            };
        });
        $('#ceecarroceria').on('change', function() {
            if(this.value == "No"){
                $(".carroceria").toggle();
            }
            else{
                 $(".carroceria").toggle();
            };
        });
        $('#ccorrea').on('change', function() {
            if(this.value == "No"){
                $(".correa").toggle();
            }
            else{
                 $(".correa").toggle();
            };
        });
        $('#ceseguridad').on('change', function() {
            if(this.value == "No"){
                $(".equipo").toggle();
            }
            else{
                 $(".equipo").toggle();
            };
        });
        $('#ceflucesi').on('change', function() {
            if(this.value == "No"){
                $(".lucesinternas").toggle();
            }
            else{
                 $(".lucesinternas").toggle();
            };
        });
        $('#celucesi').on('change', function() {
            if(this.value == "No"){
                $(".elucesinternas").toggle();
            }
            else{
                 $(".elucesinternas").toggle();
            };
        });
        $('#celucese').on('change', function() {
            if(this.value == "No"){
                $(".lucesexternas").toggle();
            }
            else{
                 $(".lucesexternas").toggle();
            };
        });
        $('#celucesc').on('change', function() {
            if(this.value == "No"){
                $(".elucesexternas").toggle();
            }
            else{
                 $(".elucesexternas").toggle();
            };
        });
        $('#celucesem').on('change', function() {
            if(this.value == "No"){
                $(".elucesemexternas").toggle();
            }
            else{
                 $(".elucesemexternas").toggle();
            };
        });
    });
</script>


@endsection