@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Ver Mantenimiento Preventivo: {{ $preventivo->serviciounidadoperador->servicio->descripcion." - ".$preventivo->serviciounidadoperador->unidad->nidentificacion." - ".$preventivo->fecha }}</div>
        <div class="panel-body">
        @include('tools.errors')
        {!! Form::model($preventivo) !!}
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col-md-5"><span>Fecha:</span></div>
                <div class="col-md-6">    
                  <input type="text" disabled value="{{$preventivo->fecha}}" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col-md-5"><span>Unidad:</span></div>
                <div class="col-md-6">   
                  <input type="text" disabled value="{{$preventivo->serviciounidadoperador->servicio->descripcion." - ".$preventivo->serviciounidadoperador->unidad->nidentificacion}}" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="panel panel-danger">
              <div class="panel-heading">Parámetros a Revisar</div>
              <div class="col-md-6">
                <div class="form-group row">
                  <div class="col-md-5"><span>Kilometraje Actual:</span></div>
                  <div class="col-md-6">    
                    <input type="text" disabled value="{{$preventivo->kilometraje}}" class="form-control">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <div class="form-group row">
                    <div class="col-md-6"><span>Tipo de Combustible:</span></div>
                    <div class="col-md-5">
                      <input type="text" disabled value="{{$preventivo->serviciounidadoperador->unidad->modelo->combustible}}" class="form-control">
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
                    <input type="text" disabled value="{{$preventivo->rlfiltroa}}" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Cambio: Lubricante. ¿Realizado?</span></div>
                  <div class="col-md-3"> 
                    <input type="text" disabled value="{{$preventivo->clubricante}}" class="form-control">
                  </div>
                </div>
                  <div class="form-group row"> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                                <div class="col-md-2"><input type="text" disabled value="{{$preventivo->litrosr}}" class="form-control"></div>
                                <div class="col-md-2"><span>Lts</span></div>
                            </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Cambio: Filtro de Aceite. ¿Realizado?</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->cfaceite}}" class="form-control">    
                  </div>
                </div>
                  <div class="form-group row"> <!-- aqui -->
                    <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->litrosa}}" class="form-control">  </div>
                    <div class="col-md-2"><span>Lts</span></div>
                  </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Lavado: Filtro de Combustible. ¿Realizado?</span></div>
                  <div class="col-md-3">
                   <input type="text" disabled value="{{$preventivo->lfcombustible}}" class="form-control">    
                  </div>
                </div>
                  <div class="form-group row"> <!-- aqui -->
                    <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->litroscom}}" class="form-control"></div>
                    <div class="col-md-2"><span>Lts</span></div>
                  </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Fuga): Lineas de Combustible. ¿Existe Fuga?</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->rlineascom}}" class="form-control">    
                   </div>
                </div>
                  <div class="form-group row"> <!-- aqui -->
                    <div class="col-md-7 col-md-offset-1"><strong>¿Reparada?</strong></div>
                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->fugarep}}" class="form-control"></div>
                  </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Pérdida): Refrigerante. ¿Existe Fuga?</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->rrefrigerante}}" class="form-control">    
                   </div>
                </div>
                  <div class="form-group row"> <!-- aqui -->
                    <div class="col-md-7 col-md-offset-1"><strong>¿Reparada?</strong></div>
                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->fugaref}}" class="form-control"></div>
                  </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Revisión: Correa. ¿Realizado?</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->rcorrea}}" class="form-control">    
                   </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Cambio: Correa. ¿Realizado?</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->ccorrea}}" class="form-control">    
                   </div>
                </div>
                <div class="form-group row"> <!-- aqui -->
                  <div class="col-md-7 col-md-offset-1"><strong>¿Cuantas Correas?</strong></div>
                  <div class="col-md-2"><input type="text" disabled value="{{$preventivo->correascamb}}" class="form-control"> </div>
                  <div class="col-md-2"><span> </span></div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Revisión: Tapas de Radiador. ¿Realizado?</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->rtapasr}}" class="form-control">    
                   </div>
                </div>
                  <div class="form-group row ctapasr"> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>Cuantas tapas Se Cambiaron?</strong></div>
                                <div class="col-md-2"><input type="text" disabled value="{{$preventivo->ctapas}}" class="form-control"></div>
                                <div class="col-md-2"><span></span></div>
                            </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Lavado del Motor</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->lavadom}}" class="form-control">    
                   </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Lavado: Filtro de Gases del Motor. ¿Realizado?</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->lfgases}}" class="form-control">    
                   </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><strong>Fluido Utilizado?</strong></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->flfiltro}}" class="form-control">    
                   </div>
                </div>
              </div>  
              <div class="panel panel-danger">
                <div class="panel-heading">Sistema de Dirección</div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Revisión: Salideros de Aceite. ¿Existe Fuga?</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->rsalidaa}}" class="form-control">    
                     </div>
                  </div>
                  <div class="form-group row fugaaceite"> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>¿Reparada?</strong></div>
                                <div class="col-md-2"><input type="text" disabled value="{{$preventivo->fugaceite}}" class="form-control"></div>
                            </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Revisión: Juego del Volante. ¿Buen Estado?</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->rjuegovolante}}" class="form-control">    
                     </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Ajustamiento de las Barras Yoquis de Dirección. ¿Realizado?</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->abarrasy}}" class="form-control">    
                     </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Revisión, Ajuste y Engrase. ¿Realizado?</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->raengrase}}" class="form-control">    
                     </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Revisión: Nivel de Aceite de Direccion. ¿Nivel Adecuado?</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->rnadireccion}}" class="form-control">    
                     </div>
                  </div>     
                </div> 
                <div class="panel panel-danger">
                  <div class="panel-heading">Sistema de Embrague</div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Chequeo y Engrase. ¿Realizado?</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->ceembrague}}" class="form-control">    
                     </div>
                  </div>
                  <div class="form-group row "> <!-- aqui -->
                                <div class="col-md-7 col-md-offset-1"><strong>Grasa Usada?</strong></div>
                                 <div class="col-md-2"><input type="text" disabled value="{{$preventivo->grasa}}" class="form-control"></div>
                                <div class="col-md-2"><span>Total</span></div>
                            </div>
                </div>
                <div class="panel panel-danger">
                    <div class="panel-heading">Sistema de Enfriamiento</div>
                      <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Lavado del Radiador. ¿Realizado?</span></div>
                        <div class="col-md-3">
                          <input type="text" disabled value="{{$preventivo->lavador}}" class="form-control">    
                         </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo: Abrazaderas y Mangueras. ¿Buen Estado?</span></div>
                        <div class="col-md-3">
                          <input type="text" disabled value="{{$preventivo->cabmangueras}}" class="form-control">    
                         </div>
                      </div> 
                       <div class="form-group row abra"> <!-- aqui -->
                        <div class="col-md-7 col-md-offset-1"><strong>Cuantas Abrazaderas cambio?</strong></div>
                        <div class="col-md-2"><input type="text" disabled value="{{$preventivo->abra}}" class="form-control"></div>
                        <div class="col-md-2"><span>Total</span></div>

                        <div class="col-md-7 col-md-offset-1"><strong>Centimetros de mangueras Sustituido?</strong></div>
                        <div class="col-md-2"><input type="text" disabled value="{{$preventivo->mague}}" class="form-control"></div>
                        <div class="col-md-2"><span>cm</span></div>
                      </div>    
                </div>
                <div class="panel panel-danger">
                        <div class="panel-heading"> Luces </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión y Chequeo: Luces. ¿Realizado?</span></div>
                                <div class="col-md-3">    
                                    <input type="text" disabled value="{{$preventivo->rcluces}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Cambio De Luces Internas. ¿Realizado?</span></div>
                                <div class="col-md-3">
                                  <input type="text" disabled value="{{$preventivo->camlucesi}}" class="form-control">
                                </div>
                            </div>
                                <div class="form-group row clucesinternas">
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantas Luces Internas Se Cambiaron?</span></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->clucesi}}" class="form-control"></div>
                                    <div class="col-md-2"><span>Luces</span></div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Cambio de Luces Externas</span></div>
                                <div class="col-md-3">
                                   <input type="text" disabled value="{{$preventivo->camlucese}}" class="form-control">
                                </div>
                            </div>
                                <div class="form-group row clucesexternas">
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantas Luces Externas Se Cambiaron?</span></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->clucese}}" class="form-control"></div>
                                    <div class="col-md-2"><span>Luces</span></div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Cambio de Luces Cruce</span></div>
                                 <div class="col-md-3">
                                      <input type="text" disabled value="{{$preventivo->camlucesc}}" class="form-control">
                                </div>
                            </div>
                                <div class="form-group row clucescruce">
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantas Luces de Cruce Se Cambiaron?</span></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->clucesc}}" class="form-control"></div>
                                    <div class="col-md-2"><span>Luces</span></div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Cambio de Luces Emergencia</span></div>
                                <div class="col-md-3"><input type="text" disabled value="{{$preventivo->camlucesem}}" class="form-control">
                                </div>
                            </div>
                                <div class="form-group row cluceseme">
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantas Luces de Emergencia Se Cambiaron?</span></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->clucesem}}" class="form-control"></div>
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
                              <input type="text" disabled value="{{$preventivo->raamortiguador}}" class="form-control">    
                             </div>
                          </div>
                          <div class="form-group row"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Reparada?</strong></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->racamort}}" class="form-control">  </div>
                                </div>
                          <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Estado Fisico Muelles. ¿Buen Estado?</span></div>
                            <div class="col-md-3">
                              <input type="text" disabled value="{{$preventivo->rmuelle}}" class="form-control">    
                             </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Lubricar. ¿Realizado?</span></div>
                            <div class="col-md-3">
                              <input type="text" disabled value="{{$preventivo->lubricar}}" class="form-control">    
                             </div>
                          </div> 
                          <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Fuga): Aire en las Cámaras. ¿Existe Fuga?</span></div>
                            <div class="col-md-3">
                              <input type="text" disabled value="{{$preventivo->racamaras}}" class="form-control">    
                             </div>
                          </div>
                          <div class="form-group row"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Reparada?</strong></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->acamaras}}" class="form-control"></div>
                                </div>
                          <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Limpieza: Base Suspensión del Aire. ¿Realizado?</span></div>
                            <div class="col-md-3">
                              <input type="text" disabled value="{{$preventivo->lbasesusp}}" class="form-control">    
                             </div>
                          </div> 
                    </div>
                     <div class="panel panel-danger">
                        <div class="panel-heading">Arbol de Suspensión</div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Arbol y Junta de Transmisión</span></div>
                            <div class="col-md-3">
                              <input type="text" disabled value="{{$preventivo->rarboljunta}}" class="form-control">    
                            </div>
                        </div>
                        <div class="form-group row ajuste"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Se Ajustó?</strong></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->arbolajuste}}" class="form-control"> </div>
                                </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Engrasar</span></div>
                            <div class="col-md-3">
                              <input type="text" disabled value="{{$preventivo->engrasar}}" class="form-control">    
                            </div>
                        </div>    
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Eje y Rueda</div>
                        <div class="form-group row">
                          <div class="col-md-8 col-md-offset-1"><span>Revisión: Fuga del Diferencial. ¿Existe Fuga?</span></div>
                          <div class="col-md-3">
                            <input type="text" disabled value="{{$preventivo->rsaliderod}}" class="form-control">    
                          </div>
                        </div>
                        <div class="form-group row fugadif"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Reparada?</strong></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->diferencia}}" class="form-control">  </div>
                                </div>  
                        <div class="form-group row">
                          <div class="col-md-8 col-md-offset-1"><span>Revisión: Nivel del Aceite Diferencial. ¿Nivel Adecuado?</span></div>
                          <div class="col-md-3">
                            <input type="text" disabled value="{{$preventivo->raceitedif}}" class="form-control">    
                          </div>
                        </div> 
                        <div class="form-group row aceitedif"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantas Litros Completó?</span></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->laceitedif}}" class="form-control"></div>
                                    <div class="col-md-2"><span>Lts</span></div>
                                </div>                              
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema Electrico</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Rotación de Baterias</span></div>
                                <div class="col-md-3">    
                                    <input type="text" disabled value="{{$preventivo->rbaterias}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Cambio de Baterias. ¿Realizado?</span></div>
                                <div class="col-md-3">    
                                    <input type="text" disabled value="{{$preventivo->cbaterias}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo: Nivel de Agua de Baterias. ¿Nivel Adecuado?</span></div>
                                <div class="col-md-3">    
                                    <input type="text" disabled value="{{$preventivo->caguabat}}" class="form-control">
                                </div>
                            </div>
                             <div class="form-group row agua"> <!-- aqui -->
                                    <div class="col-md-7 col-md-offset-1"><span>¿Cuantas Litros Completó?</span></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$preventivo->batagua}}" class="form-control"></div>
                                    <div class="col-md-2"><span>Lts</span></div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Medición de Voltaje</span></div>
                                <div class="col-md-3">
                                    <input type="text" disabled value="{{$preventivo->mvoltaje}}" class="form-control">    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Cambio: Bornes de Baterias. ¿Realizado?</span></div>
                                <div class="col-md-3">
                                    <input type="text" disabled value="{{$preventivo->cbornes}}" class="form-control">    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>¿Cuantos Bornes?</span></div>
                                <div class="col-md-2">
                                    <input type="text" disabled value="{{$preventivo->mvoltaje}}" class="form-control">    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Ajuste y Limpieza: Bornes de Baterias</span></div>
                                <div class="col-md-3">
                                    <input type="text" disabled value="{{$preventivo->ctbornes}}" class="form-control">     
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo: Funcionamiento del Indicador de Destino. ¿Funciona?</span></div>
                                <div class="col-md-3">    
                                    <input type="text" disabled value="{{$preventivo->cdestino}}" class="form-control">  
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo: Cornetas. ¿Funcionan?</span></div>
                                <div class="col-md-3">
                                    <input type="text" disabled value="{{$preventivo->cornetas}}" class="form-control">     
                                </div>
                            </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema de Frenos</div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Chequeo y Ajustes: Bandas de Frenos. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <input type="text" disabled value="{{$preventivo->bandas}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Chequeo y Ajustes: Discos de Frenos. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <input type="text" disabled value="{{$preventivo->discos}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Aire Acondicionado (A/A)</div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Cambio: Filtro. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <input type="text" disabled value="{{$preventivo->cambioaa}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Lavado: Malla. ¿Realizado?</span></div>
                            <div class="col-md-3">    
                                <input type="text" disabled value="{{$preventivo->lavadoaa}}" class="form-control">
                            </div>
                        </div>                     
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Observaciones:</div>
                        <div class="form-group row">
                            <div class="col-md-10 col-md-offset-1"> <input type="textarea" disabled value="{{$preventivo->observaciones}}" class="form-control"></div>
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
                                         <input type="text" disabled value="{{$preventivo->mecanico}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Tec. Mecanico:</span></div>
                                    <div class="col-md-6">    
                                        <input type="text" disabled value="{{$preventivo->tecmecanico}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Ayud. Mecanico:</span></div>
                                    <div class="col-md-6">    
                                        <input type="text" disabled value="{{$preventivo->ayudmecanico}}" class="form-control">
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Recibido y Revisado Por:</div>
                                 <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Recibido:</span></div>
                                    <div class="col-md-6"> 
                                      <input type="text" disabled value="{{$preventivo->recibido}}" class="form-control">  
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Usuario:</span></div>
                                    <div class="col-md-6"> 
                                      <input type="text" disabled value="{{$preventivo->usuario->persona->nombrecompleto}}" class="form-control">  
                                    </div>
                                </div>
                            </div>                       
                        </div>
                </div>
            </div>
            </div>
        {!! Form::close() !!}
       </div>
    </div>
    <input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
</div>
@endsection
