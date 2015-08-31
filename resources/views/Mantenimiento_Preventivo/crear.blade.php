@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-12">
    <div class="panel panel-danger">
        <div class="panel-heading">Mantenimiento Preventivo</div>
        <div class="panel-body">
         @include('tools.errors')
            {!! Form::open(['route'=>'preventivo.store','method'=>'POST']) !!}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-5"><span>Fecha:</span></div>
                        <div class="col-md-6">    
                        <input type="date" disabled value="<?php echo date("Y-m-d");?>" class="form-control">
                        <input class="hidden" type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-3"><span>Unidad:</span></div>
                        <div class="col-md-9">   
                            <input type="text" disabled value="{{$unidad->nidentificacion." - ".$unidad->modelo->codigo." - ".$unidad->modelo->descripcion." - ".$unidad->modelo->marca->nombre." - ".$serviciounidadoperador[0]->servicio->descripcion}}" class="form-control">
                            <input type="hidden" name="unidad_id" value="{{$unidad->id}}" class="form-control">
                            <input type="hidden" name="serviciounidadoperador_id" value="{{$serviciounidadoperador[0]->id}}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="panel panel-danger">
                            <div class="panel-heading">Parametros a Revisar</div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-5"><span>Kilometraje Actual:</span></div>
                                    <div class="col-md-6">
                                        <input type="text" disabled value="{{$unidad->kilometrajeactual}}" class="form-control">
                                        <input type="hidden" name="kilometraje" value="{{$unidad->kilometrajeactual}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group row">
                                 <div class="form-group row">
                                    <div class="col-md-6">
                                            <span>Tipo de Combustible:</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" disabled value="{{$unidad->modelo->combustible}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                     <div class="panel panel-danger">
                        <div class="panel-heading">Mantenimiento Motor</div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión y Limpieza: Filtro de Aire. ¿Realizado?</span></div>   
                                <div class="col-md-3">
                                    <span>Si:</span>{!! Form::radio('rlfiltroa', 'Si', false) !!}
                                    <span>No:</span>{!! Form::radio('rlfiltroa', 'No', false) !!}
                                </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Cambio: Lubricante. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <select name="clubricante" id="clubricante" class="form-control">
                                    <option value="No">No</option>              
                                    <option value="Si">Si</option>
                                </select>  
                            </div>
                        </div>
                             <div class="form-group row refrigerantep"> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                                <div class="col-md-2"><input type="number" name="litrosr" id="litrosr" default="0" min="0" class="form-control"/></div>
                                <div class="col-md-2"><span>Lts</span></div>
                            </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Cambio: Filtro de Aceite. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <select name="cfaceite" id="cfaceite" class="form-control">
                                    <option value="No">No</option>              
                                    <option value="Si">Si</option>
                                </select>  
                            </div>
                        </div>
                            <div class="form-group row filtroac"> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                                <div class="col-md-2"><input type="number" name="litrosa" id="litrosa" default="0" min="0" class="form-control"/></div>
                                <div class="col-md-2"><span>Lts</span></div>
                            </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Cambio: Filtro de Combustible. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <select name="lfcombustible" id="lfcombustible" class="form-control">
                                    <option value="No">No</option>              
                                    <option value="Si">Si</option>
                                </select>  
                            </div>
                        </div>
                            <div class="form-group row filtrocombust"> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                                <div class="col-md-2"><input type="number" name="litroscom" id="litroscom" default="0" min="0" class="form-control"/></div>
                                <div class="col-md-2"><span>Lts</span></div>
                            </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Fuga): Lineas de Combustible. ¿Existe Fuga?</span></div>
                            <div class="col-md-3">    
                                <select name="rlineascom" id="rlineascom" class="form-control">
                                    <option value="No">No</option>              
                                    <option value="Si">Si</option>
                                </select> 
                            </div>
                        </div>
                             <div class="form-group row fugacomb"> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>¿Reparada?</strong></div>
                                <div class="col-md-2"><span>Si:</span>{!! Form::radio('fugarep', 'Si', false) !!} </div>
                                <div class="col-md-2"><span>No:</span>{!! Form::radio('fugarep', 'No', false) !!} </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Pérdida): Refrigerante. ¿Existe Fuga?</span></div>
                            <div class="col-md-3">    
                                <select name="rrefrigerante" id="rrefrigerante" class="form-control">
                                    <option value="No">No</option>              
                                    <option value="Si">Si</option>
                                </select>  
                            </div>
                        </div>
                            <div class="form-group row fugarefrig"> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>¿Reparada?</strong></div>
                                <div class="col-md-2"><span>Si:</span>{!! Form::radio('fugaref', 'Si', false) !!} </div>
                                <div class="col-md-2"><span>No:</span>{!! Form::radio('fugaref', 'No', false) !!} </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Correa. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('rcorrea', 'Si', false) !!}
                                    <span>No:</span>{!! Form::radio('rcorrea', 'No', false) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Cambio: Correa. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <select name="ccorrea" id="ccorrea" class="form-control">
                                    <option value="No">No</option>             
                                    <option value="Si">Si</option> 
                                </select>
                            </div>
                        </div>
                             <div class="form-group row correas"> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>¿Cuantas Correas?</strong></div>
                                <div class="col-md-2"><input type="number" name="correascamb" id="correascamb" default="0" min="0" class="form-control"/></div>
                                <div class="col-md-2"><span> </span></div>
                            </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Tapas de Radiador. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('tapasr', 'Si', false) !!} 
                                <span>No:</span>{!! Form::radio('tapasr', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Cambio: Tapas de Radiador. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <select name="rtapasr" id="rtapasr" class="form-control">
                                    <option value="No">No</option>          
                                    <option value="Si">Si</option>    
                                </select> 
                            </div>
                        </div>
                            <div class="form-group row ctapasr"> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>Cuantas tapas Se Cambiaron?</strong></div>
                                <div class="col-md-2"><input type="number" name="ctapas" id="ctapas" default="0" min="0" class="form-control"/></div>
                                <div class="col-md-2"><span></span></div>
                            </div>
                        <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Lavado del Motor. ¿Realizado?</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('lavadom', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('lavadom', 'No', false) !!} 
                                </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Lavado: Filtro de Gases del Motor. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <select name="lfgases" id="lfgases" class="form-control">
                                    <option value="No">No</option>          
                                    <option value="Si">Si</option>    
                                </select> 
                            </div>
                        </div>
                            <div class="form-group row fluido"> <!-- aqui -->
                            <div class="col-md-6 col-md-offset-1"><strong>Fluido Utilizado?</strong></div>
                            <div class="col-md-5">    
                                <span>Alcohol:</span>{!! Form::radio('flfiltro', 'Alcohol', false) !!} 
                                <span>Gasolina:</span>{!! Form::radio('flfiltro', 'Gasolina', false) !!} 
                                 </div>
                            </div>
                         <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Cambio: Filtro de Gases del Motor. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('cambfiltro', 'Si', false) !!} 
                                <span>No:</span>{!! Form::radio('cambfiltro', 'No', false) !!}
                            </div>
                        </div>
                    </div>  
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema de Dirección</div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Fugas de Aceite. ¿Existe Fuga?</span></div>
                            <div class="col-md-3">    
                                <select name="rsalidaa" id="rsalidaa" class="form-control">
                                    <option value="No">No</option>              
                                    <option value="Si">Si</option>
                                </select>  
                            </div>
                        </div>
                             <div class="form-group row fugaaceite"> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>¿Reparada?</strong></div>
                                <div class="col-md-2"><span>Si:</span>{!! Form::radio('fugaceite', 'Si', false) !!} </div>
                                <div class="col-md-2"><span>No:</span>{!! Form::radio('fugaceite', 'No', false) !!} </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Estado del Juego del Volante. ¿Buen Estado?</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('rjuegovolante', 'Si', false) !!} 
                                <span>No:</span>{!! Form::radio('rjuegovolante', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Ajustamiento de las Barras Yoquis de Dirección. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('abarrasy', 'Si', false) !!} 
                                <span>No:</span>{!! Form::radio('abarrasy', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión, Ajuste y Engrase. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('raengrase', 'Si', false) !!} 
                                <span>No:</span>{!! Form::radio('raengrase', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Nivel de Aceite de Direccion. ¿Nivel Adecuado?</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('rnadireccion', 'Si', false) !!} 
                                <span>No:</span>{!! Form::radio('rnadireccion', 'No', false) !!} 
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema de Embrague</div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Chequeo y Engrase. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                               <select name="ceembrague" id="ceembrague" class="form-control">
                                        <option value="No">No</option>              
                                        <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                            <div class="form-group row engrase"> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>Grasa Usada?</strong></div>
                                 <div class="col-md-2"><input type="number" name="grasa" id="grasa" default="0" min="0" class="form-control"/></div>
                                <div class="col-md-2"><span>Total!</span></div>
                            </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema de Enfriamiento</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Lavado del Radiador. ¿Realizado?</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('lavador', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('lavador', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo: Estado de Abrazaderas y Mangueras. ¿Buen Estado?</span></div>
                                <div class="col-md-3">    
                                    <select name="cabmangueras" id="cabmangueras" class="form-control">
                                        <option value="Si">Si</option>             
                                        <option value="No">No</option> 
                                    </select>
                                </div>
                            </div>
                                <div class="form-group row abra"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><strong>Cuantas Abrazaderas cambio?</strong></div>
                                     <div class="col-md-2"><input type="number" name="abra" id="abra" default="0" min="0" class="form-control"/></div>
                                    <div class="col-md-2"><span>Total</span></div>

                                    <div class="col-md-7 col-md-offset-1"><strong>Centimetros de mangueras Sustituido?</strong></div>
                                     <div class="col-md-2"><input type="number" name="mague" id="mague" default="0" min="0" class="form-control"/></div>
                                    <div class="col-md-2"><span>cm</span></div>
                                </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading"> Luces </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión y Chequeo: Luces. ¿Realizado?</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('rcluces', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('rcluces', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Cambio De Luces Internas. ¿Realizado?</span></div>
                                <div class="col-md-3">
                                    <select name="camlucesi" id="camlucesi" class="form-control">
                                        <option value="No">No</option>              
                                        <option value="Si">Si</option>
                                    </select>    
                                </div>
                            </div>
                                <div class="form-group row clucesinternas">
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantas Luces Internas Se Cambiaron?</span></div>
                                    <div class="col-md-2"><input type="number" name="clucesi" id="clucesi" default="0" min="0" class="form-control"/></div>
                                    <div class="col-md-2"><span>Luces</span></div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Cambio de Luces Externas</span></div>
                                <div class="col-md-3">
                                    <select name="camlucese" id="camlucese" class="form-control">
                                        <option value="No">No</option>              
                                        <option value="Si">Si</option>
                                    </select>    
                                </div>
                            </div>
                                <div class="form-group row clucesexternas">
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantas Luces Externas Se Cambiaron?</span></div>
                                    <div class="col-md-2"><input type="number" name="clucese" id="clucese" default="0" min="0" class="form-control"/></div>
                                    <div class="col-md-2"><span>Luces</span></div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Cambio de Luces Cruce</span></div>
                                 <div class="col-md-3">
                                    <select name="camlucesc" id="camlucesc" class="form-control">
                                        <option value="No">No</option>              
                                        <option value="Si">Si</option>
                                    </select>    
                                </div>
                            </div>
                                <div class="form-group row clucescruce">
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantas Luces de Cruce Se Cambiaron?</span></div>
                                    <div class="col-md-2"><input type="number" name="clucesc" id="clucesc" default="0" min="0" class="form-control"/></div>
                                    <div class="col-md-2"><span>Luces</span></div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Cambio de Luces Emergencia</span></div>
                                <div class="col-md-3">
                                    <select name="camlucesem" id="camlucesem" class="form-control">
                                        <option value="Si">Si</option>              
                                        <option value="No">No</option>
                                    </select>    
                                </div>
                            </div>
                                <div class="form-group row cluceseme">
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantas Luces de Emergencia Se Cambiaron?</span></div>
                                    <div class="col-md-2"><input type="number" name="clucesem" id="clucesem" default="0" min="0" class="form-control"/></div>
                                    <div class="col-md-2"><span>Luces</span></div>
                                </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Suspensión</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Fuga): Aceite Amortiguadores y Fijación Soporte. ¿Existe Fuga?</span></div>
                                <div class="col-md-3">    
                                    <select name="raamortiguador" id="raamortiguador" class="form-control">
                                        <option value="No">No</option>              
                                        <option value="Si">Si</option>
                                    </select> 
                                </div>
                            </div>
                                <div class="form-group row amortiguador"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Reparada?</strong></div>
                                    <div class="col-md-2"><span>Si:</span>{!! Form::radio('racamort', 'Si', false) !!} </div>
                                    <div class="col-md-2"><span>No:</span>{!! Form::radio('racamort', 'No', false) !!} </div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión: Estado Fisico Muelles. ¿Buen Estado?</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('rmuelle', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('rmuelle', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Lubricar. ¿Realizado?</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('lubricar', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('lubricar', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Fuga): Aire en las Cámaras. ¿Existe Fuga?</span></div>
                                <div class="col-md-3">    
                                    <select name="racamaras" id="racamaras" class="form-control">
                                        <option value="No">No</option>              
                                        <option value="Si">Si</option>
                                    </select> 
                                </div>
                            </div>
                                <div class="form-group row camaras"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Reparada?</strong></div>
                                    <div class="col-md-2"><span>Si:</span>{!! Form::radio('acamaras', 'Si', false) !!} </div>
                                    <div class="col-md-2"><span>No:</span>{!! Form::radio('acamaras', 'No', false) !!} </div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Limpieza: Base Suspensión del Aire. ¿Realizado?</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('lbasesusp', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('lbasesusp', 'No', false) !!} 
                                </div>
                            </div>
                    </div>
                     <div class="panel panel-danger">
                        <div class="panel-heading">Arbol de Suspensión</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión: Arbol y Junta de Transmisión. ¿Realizado?</span></div>
                                <div class="col-md-3">    
                                    <select name="rarboljunta" id="rarboljunta" class="form-control">
                                        <option value="No">No</option>              
                                        <option value="Si">Si</option>
                                    </select> 
                                </div>
                            </div>
                                <div class="form-group row ajuste"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Se Ajusto?</strong></div>
                                    <div class="col-md-2"><span>Si:</span>{!! Form::radio('arbolajuste', 'Si', false) !!} </div>
                                    <div class="col-md-2"><span>No:</span>{!! Form::radio('arbolajuste', 'No', false) !!} </div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Engrasar</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('engrasar', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('engrasar', 'No', false) !!} 
                                </div>
                            </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Eje y Rueda</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión: Fuga del Diferencial. ¿Existe Fuga?</span></div>
                                <div class="col-md-3">    
                                    <select name="rsaliderod" id="rsaliderod" class="form-control">
                                        <option value="No">No</option>              
                                        <option value="Si">Si</option>
                                    </select>  
                                </div>
                            </div>
                                 <div class="form-group row fugadif"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Reparada?</strong></div>
                                    <div class="col-md-2"><span>Si:</span>{!! Form::radio('diferencia', 'Si', false) !!} </div>
                                    <div class="col-md-2"><span>No:</span>{!! Form::radio('diferencia', 'No', false) !!} </div>
                                </div>  
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión: Nivel del Aceite Diferencial. ¿Nivel Adecuado?</span></div>
                                <div class="col-md-3">    
                                    <select name="raceitedif" id="raceitedif" class="form-control">
                                        <option value="Si">Si</option>             
                                        <option value="No">No</option> 
                                    </select>
                                </div>
                            </div> 
                                <div class="form-group row aceitedif"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantas Litros Completó?</span></div>
                                    <div class="col-md-2"><input type="number" name="laceitedif" id="laceitedif" default="0" min="0" class="form-control"/></div>
                                    <div class="col-md-2"><span>Lts</span></div>
                                </div>
                    </div>          
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema Electrico</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Rotación de Baterias. ¿Realizado?</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('rbaterias', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('rbaterias', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Cambio de Baterias. ¿Realizado?</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('cbaterias', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('cbaterias', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo: Nivel de Agua de Baterias. ¿Nivel Adecuado?</span></div>
                                <div class="col-md-3">    
                                     <select name="caguabat" id="caguabat" class="form-control">
                                        <option value="Si">Si</option>             
                                        <option value="No">No</option> 
                                    </select>
                                </div>
                            </div>
                                <div class="form-group row agua"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantas Litros Completó?</span></div>
                                    <div class="col-md-2"><input type="number" name="batagua" id="batagua" default="0" min="0" class="form-control"/></div>
                                    <div class="col-md-2"><span>Lts</span></div>
                                </div>    
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Medición de Voltaje</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('mvoltaje', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('mvoltaje', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Cambio: Bornes de Baterias. ¿Realizado?</span></div>
                                <div class="col-md-3">    
                                    <select name="cbornes" id="cbornes" class="form-control">
                                        <option value="No">No</option>            
                                        <option value="Si">Si</option>  
                                    </select>
                                </div>
                            </div>
                                 <div class="form-group row bornes"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantos Bornes?</span></div>
                                    <div class="col-md-2"><input type="number" name="ctbornes" id="ctbornes" default="0" min="0" class="form-control"/></div>
                                    <div class="col-md-2"><span></span></div>
                                </div>  
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Ajuste y Limpieza: Bornes de Baterias. ¿Realizado?</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('albornes', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('albornes', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo: Funcionamiento del Indicador de Destino. ¿Funciona?</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('cdestino', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('cdestino', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo: Cornetas. ¿Funcionan?</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('cornetas', 'Si', false) !!} 
                                    <span>No:</span>{!! Form::radio('cornetas', 'No', false) !!} 
                                </div>
                            </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema de Frenos</div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Chequeo y Ajustes: Bandas de Frenos. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('bandas', 'Si', false) !!} 
                                <span>No:</span>{!! Form::radio('bandas', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Chequeo y Ajustes: Discos de Frenos. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('discos', 'Si', false) !!} 
                                <span>No:</span>{!! Form::radio('discos', 'No', false) !!} 
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Aire Acondicionado (A/A)</div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Cambio: Filtro. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('cambioaa', 'Si', false) !!} 
                                <span>No:</span>{!! Form::radio('cambioaa', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Lavado: Malla. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('lavadoaa', 'Si', false) !!} 
                                <span>No:</span>{!! Form::radio('lavadoaa', 'No', false) !!} 
                            </div>
                        </div>                     
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Observaciones:</div>
                        <div class="form-group row">
                            <div class="col-md-10 col-md-offset-1"><textarea name="observaciones" id="observaciones" class="form-control" rows="5"></textarea></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Trabajo Realizado Por:</div>
                                <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Mecanico:</span></div>
                                    <div class="col-md-6">    
                                        {!! Form::text('mecanico',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Tec. Mecanico:</span></div>
                                    <div class="col-md-6">    
                                        {!! Form::text('tecmecanico',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Ayud. Mecanico:</span></div>
                                    <div class="col-md-6">    
                                        {!! Form::text('ayudmecanico',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Recibido y Revisado Por:</div>
                                 <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Usuario:</span></div>
                                    <div class="col-md-6">   
                                       <input type="text" disabled value="{{ Auth::user()->persona->nombrecompleto }}" class="form-control">
                                       <input class="hidden" type="text" id="recibido" name="recibido" value="{{ Auth::user()->persona->nombrecompleto }}" class="form-control">
                                       <input class="hidden" type="text" id="usuario_id" name="usuario_id" value="{{ Auth::user()->id }}" class="form-control">
                                    </div>
                                </div>
                            </div>                       
                        </div>
                    @include('tools.botones-registrar')
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
{!! Html::script('js/tooglediario.js') !!}
<script type="text/javascript">
    $(document).ready(function(){
        
        $(".refrigerantep").toggle();
        $(".filtroac").toggle();
        $(".filtrocombust").toggle();
        $(".fugacomb").toggle();
        $(".fugarefrig").toggle();
        $(".ctapasr").toggle();
        $(".fugaaceite").toggle();
        $(".engrase").toggle();
        $(".abra").toggle();
        $(".amortiguador").toggle();
        $(".camaras").toggle();
        $(".fugadif").toggle();
        $(".aceitedif").toggle();
        $(".agua").toggle();
        $(".ajuste").toggle();
        $(".fluido").toggle();
        $(".bornes").toggle();
        $(".correas").toggle();

        $('#clubricante').on('change', function() {
            if(this.value == "Si"){
                $(".refrigerantep").toggle();
            }
            else{
                 $(".refrigerantep").toggle();
            };
        });

        $('#cfaceite').on('change', function() {
            if(this.value == "Si"){
                $(".filtroac").toggle();
            }
            else{
                 $(".filtroac").toggle();
            };
        });
        $('#lfcombustible').on('change', function() {
            if(this.value == "Si"){
                $(".filtrocombust").toggle();
            }
            else{
                 $(".filtrocombust").toggle();
            };
        });
        $('#rlineascom').on('change', function() {
            if(this.value == "No"){
                $(".fugacomb").toggle();
            }
            else{
                 $(".fugacomb").toggle();
            };
        });
        $('#rrefrigerante').on('change', function() {
            if(this.value == "No"){
                $(".fugarefrig").toggle();
            }
            else{
                 $(".fugarefrig").toggle();
            };
        });
        $('#rtapasr').on('change', function() {
            if(this.value == "No"){
                $(".ctapasr").toggle();
            }
            else{
                 $(".ctapasr").toggle();
            };
        });
        $('#rsalidaa').on('change', function() {
            if(this.value == "Si"){
                $(".fugaaceite").toggle();
            }
            else{
                 $(".fugaaceite").toggle();
            };
        });
        $('#ceembrague').on('change', function() {
            if(this.value == "Si"){
                $(".engrase").toggle();
            }
            else{
                 $(".engrase").toggle();
            };
        });
        $('#cabmangueras').on('change', function() {
            if(this.value == "Si"){
                $(".abra").toggle();
            }
            else{
                 $(".abra").toggle();
            };
        });
        $('#raamortiguador').on('change', function() {
            if(this.value == "Si"){
                $(".amortiguador").toggle();
            }
            else{
                 $(".amortiguador").toggle();
            };
        });
        $('#racamaras').on('change', function() {
            if(this.value == "Si"){
                $(".camaras").toggle();
            }
            else{
                 $(".camaras").toggle();
            };
        });
        $('#rsaliderod').on('change', function() {
            if(this.value == "Si"){
                $(".fugadif").toggle();
            }
            else{
                 $(".fugadif").toggle();
            };
        });
        $('#raceitedif').on('change', function() {
            if(this.value == "Si"){
                $(".aceitedif").toggle();
            }
            else{
                 $(".aceitedif").toggle();
            };
        });
        $('#caguabat').on('change', function() {
            if(this.value == "Si"){
                $(".agua").toggle();
            }
            else{
                 $(".agua").toggle();
            };
        });
        $('#rarboljunta').on('change', function() {
            if(this.value == "Si"){
                $(".ajuste").toggle();
            }
            else{
                 $(".ajuste").toggle();
            };
        });
        $('#lfgases').on('change', function() {
            if(this.value == "Si"){
                $(".fluido").toggle();
            }
            else{
                 $(".fluido").toggle();
            };
        });
        $('#cbornes').on('change', function() {
            if(this.value == "Si"){
                $(".bornes").toggle();
            }
            else{
                 $(".bornes").toggle();
            };
        });
        $('#ccorrea').on('change', function() {
            if(this.value == "Si"){
                $(".correas").toggle();
            }
            else{
                 $(".correas").toggle();
            };
        });
});
</script>
@endsection