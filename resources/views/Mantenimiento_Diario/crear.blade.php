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
                        <input type="date" disabled value="<?php echo date("Y-m-d");?>" class="form-control">
                        <input class="hidden" type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-md-3"><span>Unidad:</span></div>
                        <div class="col-md-9">   
                            <select name="serviciounidadoperador_id" id="unidad" class="form-control">
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
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo Nivel de Aceite del Motor.</span><strong>¿Esta en el Nivel Indicado?</strong></div>
                        <div class="col-md-2">
                            <select name="cnaceitem" id="cnaceitem" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>    
                        </div>
                    </div>
                        <div class="form-group row aceite">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                            <div class="col-md-2">
                            <input type="number" name="litrosa" id="litrosa" default="0" min="0" class="form-control"/></div>
                            <div class="col-md-2"><span>Lts</span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo Nivel de Refrigerante.</span><strong>¿Esta en el Nivel Indicado?</strong></div>
                        <div class="col-md-2">
                            <select name="cnrefrigerante" id="cnrefrigerante" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>    
                        </div>
                    </div>
                        <div class="form-group row refrigerante">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                            <div class="col-md-2"><input type="number" name="litrosr" id="litrosr" default="0" min="0" class="form-control"/></div>
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
                        <div class="form-group row reparado">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Reparado?</strong></div>
                            <div class="col-md-2"><span>Si:</span>{!! Form::radio('reparado', 'Si') !!} 
                                <span>No:</span>{!! Form::radio('reparado', 'No') !!}</div>
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
                            <div class="col-md-2"><input type="number" name="aire" id="aire" default="0" min="0" class="form-control"/></div>
                            <div class="col-md-2"><span>(psi/bar)</span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Nivel de Combustible (o Gas).</span><strong>¿Esta en el Nivel Indicado?</strong></div>
                        <div class="col-md-2">    
                            <select name="cncomb" id="cncomb" class="form-control">
                                <option value="Si">Si</option>              
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group row tipo">
                            <div class="col-md-7 col-md-offset-1"><strong>Seleccione</strong></div>
                            <div class="col-md-2">
                                <select name="combust" id="combust" class="form-control">
                                    <option>Seleccione</option>              
                                    <option value="Gas">Gas</option>              
                                    <option value="Diesel">Diesel</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row diesel">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuanto Diesel Completó?</strong></div>
                            <div class="col-md-2"><input type="number" name="diesel" id="diesel" default="0" min="0" class="form-control"/></div>
                            <div class="col-md-2"><span>lts</span></div>
                        </div>
                        <div class="form-group row gas">
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuanto Gas Completó?</strong></div>
                            <div class="col-md-2"><input type="number" name="gas" id="gas" default="0" min="0" class="form-control"/></div>
                            <div class="col-md-2"><span>MPa</span></div>
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
                            <div class="col-md-2"><input type="number" name="asientosmal" id="asientosmal" default="0" min="0" class="form-control"/></div>
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
                            <div class="col-md-2"><input type="number" name="rayones" id="asientosmal" default="0" min="0" class="form-control"/></div>
                            <div class="col-md-2"><span></span></div>
                            <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Vidrios Rotos detectó?</strong></div>
                            <div class="col-md-2"><input type="number" name="vidrios" id="asientosmal" default="0" min="0" class="form-control"/></div>
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
                            <div class="col-md-2"><input type="number" name="lucesimal" id="lucesimal" default="0" min="0" class="form-control"/></div>
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
                            <div class="col-md-2"><input type="number" name="elucesimal" id="elucesimal" default="0" min="0" class="form-control"/></div>
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
{!! Html::script('js/tooglediario.js') !!}    
@endsection