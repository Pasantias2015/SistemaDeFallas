@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Ver Mantenimiento Preventivo: {{ $preventivo->serviciounidadoperador->servicio->descripcion." - ".$preventivo->serviciounidadoperador->unidad->nidentificacion." - ".$preventivo->serviciounidadoperador->operador->persona->pnombre." - ".$preventivo->fecha }}</div>
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
                  <input type="text" disabled value="{{$preventivo->serviciounidadoperador->servicio->descripcion." - ".$preventivo->serviciounidadoperador->unidad->nidentificacion." - ".$preventivo->serviciounidadoperador->operador->persona->pnombre}}" class="form-control">
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
                    <input type="text" disabled value="{{$preventivo->kilometraje}}" class="form-control">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <div class="form-group row">
                    <div class="col-md-6"><span>Tipo de Combustible:</span></div>
                    <div class="col-md-6">
                      <input type="text" disabled value="{{$preventivo->combustible}}" class="form-control">
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
                  <div class="col-md-7 col-md-offset-1"><span>Item:</span></div>
                  <div class="col-md-4">    
                    <span>Realizado:</span>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Revisión y Limpieza: Filtro de Aire</span></div>
                  <div class="col-md-3">    
                    <input type="text" disabled value="{{$preventivo->rlfiltroa}}" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Cambio: Lubricante</span></div>
                  <div class="col-md-3"> 
                    <input type="text" disabled value="{{$preventivo->clubricante}}" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Cambio: Filtro de Aceite</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->cfaceite}}" class="form-control">    
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Lavado: Filtro de Combustible</span></div>
                  <div class="col-md-3">
                   <input type="text" disabled value="{{$preventivo->lfcombustible}}" class="form-control">    
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Fuga): Lineas de Combustible</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->rlineascom}}" class="form-control">    
                   </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Pérdida): Refrigerante</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->rrefrigerante}}" class="form-control">    
                   </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Revisión: Correa</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->rcorrea}}" class="form-control">    
                   </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Revisión: Tapas de Radiador</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->rtapasr}}" class="form-control">    
                   </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-8 col-md-offset-1"><span>Lavado del Motor</span></div>
                  <div class="col-md-3">
                    <input type="text" disabled value="{{$preventivo->lavadom}}" class="form-control">    
                   </div>
                </div>
              </div>  
              <div class="panel panel-danger">
                <div class="panel-heading">Sistema de Dirección</div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Item:</span></div>
                    <div class="col-md-3">    
                      <span>Realizado:</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Revisión: Salideros de Aceite</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->rsalidaa}}" class="form-control">    
                     </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Revisión: Juego del Volante</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->rjuegovolante}}" class="form-control">    
                     </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Revisión</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->revision}}" class="form-control">    
                     </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Ajustamiento de las Barras Yoquis de Dirección</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->abarrasy}}" class="form-control">    
                     </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Revisión, Ajuste y Engrase</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->raengrase}}" class="form-control">    
                     </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Revisión: Nivel de Aceite de Direccion</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->rnadireccion}}" class="form-control">    
                     </div>
                  </div>     
                </div>
                <div class="panel panel-danger">
                  <div class="panel-heading">Yutong</div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Item:</span></div>
                    <div class="col-md-3">    
                      <span>Realizado:</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Lavado: Filtro de Gases</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->rnadireccion}}" class="form-control">    
                     </div>
                  </div> 
                </div>
                <div class="panel panel-danger">
                  <div class="panel-heading">Sistema de Embrague</div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Item:</span></div>
                    <div class="col-md-3">    
                      <span>Realizado:</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-8 col-md-offset-1"><span>Chequeo y Engrase</span></div>
                    <div class="col-md-3">
                      <input type="text" disabled value="{{$preventivo->ceembrague}}" class="form-control">    
                     </div>
                  </div>
                </div>
                <div class="panel panel-danger">
                    <div class="panel-heading">Sistema de Enfriamiento</div>
                      <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Item:</span></div>
                        <div class="col-md-3">    
                          <span>Realizado:</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Lavado del Radiador</span></div>
                        <div class="col-md-3">
                          <input type="text" disabled value="{{$preventivo->lavador}}" class="form-control">    
                         </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo: Abrazaderas y Mangueras</span></div>
                        <div class="col-md-3">
                          <input type="text" disabled value="{{$preventivo->cabmangueras}}" class="form-control">    
                         </div>
                      </div>     
                </div>
            </div>
                <div class="col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Suspensión</div>
                          <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Item:</span></div>
                            <div class="col-md-3">    
                              <span>Realizado:</span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Fuga): Aceite Amortiguadores y Fijación Soporte</span></div>
                            <div class="col-md-3">
                              <input type="text" disabled value="{{$preventivo->raamortiguador}}" class="form-control">    
                             </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: de Muelles</span></div>
                            <div class="col-md-3">
                              <input type="text" disabled value="{{$preventivo->rmuelle}}" class="form-control">    
                             </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Lubricar</span></div>
                            <div class="col-md-3">
                              <input type="text" disabled value="{{$preventivo->lubricar}}" class="form-control">    
                             </div>
                          </div> 
                          <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Fuga): Aire en las Cámaras</span></div>
                            <div class="col-md-3">
                              <input type="text" disabled value="{{$preventivo->racamaras}}" class="form-control">    
                             </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Limpieza: Base Suspensión del Aire</span></div>
                            <div class="col-md-3">
                              <input type="text" disabled value="{{$preventivo->lbasesusp}}" class="form-control">    
                             </div>
                          </div> 
                    </div>
                     <div class="panel panel-danger">
                        <div class="panel-heading">Arbol de Suspensión</div>
                        <div class="form-group row">
                          <div class="col-md-8 col-md-offset-1"><span>Item:</span></div>
                          <div class="col-md-3">    
                            <span>Realizado:</span>
                          </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Arbol y Junta de Transmisión</span></div>
                            <div class="col-md-3">
                              <input type="text" disabled value="{{$preventivo->rarboljunta}}" class="form-control">    
                            </div>
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
                          <div class="col-md-8 col-md-offset-1"><span>Item:</span></div>
                          <div class="col-md-3">    
                            <span>Realizado:</span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-8 col-md-offset-1"><span>Revisión: Salidero del Diferencial</span></div>
                          <div class="col-md-3">
                            <input type="text" disabled value="{{$preventivo->rsaliderod}}" class="form-control">    
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-8 col-md-offset-1"><span>Revisión: Nivel del Aceite Diferencial</span></div>
                          <div class="col-md-3">
                            <input type="text" disabled value="{{$preventivo->raceitedif}}" class="form-control">    
                          </div>
                        </div>                               
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema Electrico</div>
                           <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Item:</span></div>
                            <div class="col-md-3">    
                              <span>Realizado:</span>
                            </div>
                          </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Rotación de Baterias</span></div>
                                <div class="col-md-3">    
                                    <input type="text" disabled value="{{$preventivo->rbaterias}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo: Nivel de Agua de Baterias</span></div>
                                <div class="col-md-3">    
                                    <input type="text" disabled value="{{$preventivo->caguabat}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Medición de Voltaje</span></div>
                                <div class="col-md-3">
                                    <input type="text" disabled value="{{$preventivo->mvoltaje}}" class="form-control">    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Ajuste y Limpieza: Bornes de Baterias</span></div>
                                <div class="col-md-3">
                                    <input type="text" disabled value="{{$preventivo->albornes}}" class="form-control">     
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión y Chequeo: Luces</span></div>
                                <div class="col-md-3">    
                                    <input type="text" disabled value="{{$preventivo->rcluces}}" class="form-control">  
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo: Funcionamiento del Indicador de Destino</span></div>
                                <div class="col-md-3">
                                    <input type="text" disabled value="{{$preventivo->cdestino}}" class="form-control">     
                                </div>
                            </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema de Frenos</div>
                           <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Item:</span></div>
                            <div class="col-md-3">    
                              <span>Realizado:</span>
                            </div>
                          </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Chequeo y Ajustes: Bandas de Frenos</span></div>
                            <div class="col-md-3">    
                                <input type="text" disabled value="{{$preventivo->bandas}}" class="form-control">
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
