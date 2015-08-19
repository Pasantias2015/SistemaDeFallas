@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Ver Mantenimiento Diario: {{ $diario->fecha }}</div>
        <div class="panel-body">
        @include('tools.errors')
        {!! Form::model($diario) !!}                  
          <div class="row">
            <div class="col-md-3">
              <div class="form-group row">
                <div class="col-md-4 col-md-offset-1"><span>Fecha:</span></div>
                <div class="col-md-7">
                  <input type="text" disabled value="{{$diario->fecha}}" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col-md-6"><span>Servicio-Unidad-Operador:</span></div>
                <div class="col-md-6">   
                    <input type="text" disabled value="{{$diario->serviciounidadoperador->servicio->descripcion." - ".$diario->serviciounidadoperador->unidad->nidentificacion." - ".$diario->serviciounidadoperador->operador->persona->pnombre}}" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-3">
                    <div class="form-group row">
                        <div class="col-md-5"><span>Kilometraje:</span></div>
                        <div class="col-md-6">
                            <input type="text" disabled value="{{$diario->serviciounidadoperador->unidad->kilometrajeactual}}" class="form-control">
                        </div>
                    </div>
                </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">Parametros a Revisar</div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo Nivel de Aceite del Motor. ¿Buen Nivel?</span></div>
                        <div class="col-md-3"> 
                            <input type="text" disabled value="{{$diario->cnaceitem}}" class="form-control">   
                        </div>
                    </div>
                        <div class="form-group row ">
                            <div class="col-md-6 col-md-offset-2"><span>¿Cuantos Litros Completó?</span></div>
                            <div class="col-md-2"><input type="text" disabled value="{{$diario->litrosa}}" class="form-control"></div>
                            <div class="col-md-1"><span>Lts</span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo Nivel de Refrigerante. ¿Buen Nivel?</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->cnrefrigerante}}" class="form-control">
                        </div>
                    </div>
                        <div class="form-group row ">
                            <div class="col-md-6 col-md-offset-2"><span>¿Cuantos Litros Completó?</span></div>
                            <div class="col-md-2"><input type="text" disabled value="{{$diario->litrosr}}" class="form-control"></div>
                            <div class="col-md-2"><span>Lts</span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Presenta Fuga de Refrigerante?</span></div>
                        <div class="col-md-3"> 
                            <input type="text" disabled value="{{$diario->frefrigerante}}" class="form-control">   
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo de la Presión de Aire de los Neumáticos. ¿Presión Aceptable?</span></div>
                        <div class="col-md-3"> 
                            <input type="text" disabled value="{{$diario->airene}}" class="form-control">   
                        </div>
                    </div>
                        <div class="form-group row ">
                            <div class="col-md-6 col-md-offset-2"><span>¿Cuanto Aire(psi/bar) Completó?</span></div>
                            <div class="col-md-2"><input type="text" disabled value="{{$diario->aire}}" class="form-control"></div>
                            <div class="col-md-2"><span>(psi/bar)</span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Nivel de combustible. ¿Buen Nivel?</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->cncomb}}" class="form-control">    
                        </div>
                    </div>
                        <div class="form-group row ">
                            <div class="col-md-6 col-md-offset-2"><span>¿Cuantos Litros Completó?</span></div>
                            <div class="col-md-2"><input type="text" disabled value="{{$diario->combust}}" class="form-control"></div>
                            <div class="col-md-2"><span>Lts</span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Estado Interior de la Unidad: Asientos. ¿Buen Estado?</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->ceiasientos}}" class="form-control">    
                        </div>
                    </div>
                        <div class="form-group row ">
                            <div class="col-md-6 col-md-offset-2"><span>¿Cuantos Asientos En mal estado?</span></div>
                            <div class="col-md-2"><input type="text" disabled value="{{$diario->asientosmal}}" class="form-control"></div>
                            <div class="col-md-2"><span>Asiento(s)</span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Estado Exterior de la Unidad: Carroceria y Vidrios. ¿Buen Estado?</span></div>
                        <div class="col-md-3">   
                            <input type="text" disabled value="{{$diario->ceecarroceria}}" class="form-control"> 
                        </div>
                    </div>
                        <div class="form-group row ">
                            <div class="col-md-6 col-md-offset-2"><span>¿Cuantos Rayones/golpes detectó?</span></div>
                            <div class="col-md-2"><input type="text" disabled value="{{$diario->rayones}}" class="form-control"></div>
                            <div class="col-md-2"><span></span></div>
                            <div class="col-md-6 col-md-offset-2"><span>¿Cuantos Vidrios Rotos detectó?</span></div>
                            <div class="col-md-2"><input type="text" disabled value="{{$diario->vidrios}}" class="form-control"></div>
                            <div class="col-md-2"><span></span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Estado de las Correas(tensión, estado fisico)</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->ccorrea}}" class="form-control">    
                        </div>
                    </div>
                        <div class="form-group row ">
                            <div class="col-md-6 col-md-offset-2"><span>¿Ajustó las Correas?</span></div>
                            <div class="col-md-2"><input type="text" disabled value="{{$diario->acorrea}}" class="form-control"></div>
                            <div class="col-md-2"><span></span></div>
                            <div class="col-md-6 col-md-offset-2"><span>¿Necesita Cambio de Correa?</span></div>
                            <div class="col-md-2"><input type="text" disabled value="{{$diario->camcorrea}}" class="form-control"></div>
                            <div class="col-md-2"><span></span></div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Equipo de Seguridad (triángulo, extintor, conos).</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->ceseguridad}}" class="form-control">    
                        </div>
                    </div>
                        <div class="form-group row equipo">
                            <div class="col-md-2 col-md-offset-2"><span>¿Que Falta?</span></div>
                            <div class="col-md-8">
                                <div class="col-md-4"><span>Triangulo:</span><input type="text" disabled value="{{$diario->triangulo}}" class="form-control"></div>
                                <div class="col-md-4"><span>Extintor:</span><input type="text" disabled value="{{$diario->extintor}}" class="form-control"></div>
                                <div class="col-md-4"> <span>Conos:</span><input type="text" disabled value="{{$diario->conos}}" class="form-control"></div>
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Estado Fisico de las Luces Internas. ¿En Buen Estado Todas?</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->ceflucesi}}" class="form-control">    
                        </div>
                    </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-md-offset-2"><span>¿Cuantas Luces Internas en Mal Estado?</span></div>
                            <div class="col-md-3">
                                <input type="text" disabled value="{{$diario->lucesimal}}" class="form-control">    
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Encendido de las Luces Internas. ¿Encienden Todas?</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->celucesi}}" class="form-control">     
                        </div>
                    </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-md-offset-2"><span>¿Cuantas Luces Internas en Mal Estado?</span></div>
                            <div class="col-md-3">
                                <input type="text" disabled value="{{$diario->elucesimal}}" class="form-control">    
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Estado Fisico de las Luces Externas. ¿En Buen Estado Todas?</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->celucese}}" class="form-control">     
                        </div>
                    </div>
                        <div class="form-group row">
                            <div class="col-md-3 col-md-offset-2"><span>¿Cuales Luces Externas estan en Mal estado?</span></div>
                            <div class="col-md-7">
                                <div class="col-md-3"><span>Delantero Der.:</span><input type="text" disabled value="{{$diario->ddere}}" class="form-control"></div>
                                <div class="col-md-3"><span>Delantero Izq.:</span><input type="text" disabled value="{{$diario->dizqe}}" class="form-control"></div>
                                <div class="col-md-3"> <span>Trasero Der.:</span><input type="text" disabled value="{{$diario->tdere}}" class="form-control"></div>
                                <div class="col-md-3"> <span>Trasero Izq.:</span><input type="text" disabled value="{{$diario->tizqe}}" class="form-control"></div>
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Encendido de las Luces de Cruce. ¿Encienden Todas?</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->celucesc}}" class="form-control">     
                        </div>
                    </div>
                        <div class="form-group row">
                            <div class="col-md-3 col-md-offset-2"><span>¿Cuales Luces Externas no Encienden?</span></div>
                            <div class="col-md-7">
                                <div class="col-md-3"><span>Delantero Der.:</span><input type="text" disabled value="{{$diario->dderc}}" class="form-control"></div>
                                <div class="col-md-3"><span>Delantero Izq.:</span><input type="text" disabled value="{{$diario->dizqc}}" class="form-control"></div>
                                <div class="col-md-3"> <span>Trasero Der.:</span><input type="text" disabled value="{{$diario->tderc}}" class="form-control"></div>
                                <div class="col-md-3"> <span>Trasero Izq.:</span><input type="text" disabled value="{{$diario->tizqc}}" class="form-control"></div>
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Chequeo del Encendido de las Luces de Emergencia. ¿Encienden Todas?</span></div>
                        <div class="col-md-3">
                            <input type="text" disabled value="{{$diario->celucesc}}" class="form-control">     
                        </div>
                    </div>
                        <div class="form-group row">
                            <div class="col-md-3 col-md-offset-2"><span>¿Cuales Luces Externas no Encienden?</span></div>
                            <div class="col-md-7">
                                <div class="col-md-3"><span>Delantero Der.:</span><input type="text" disabled value="{{$diario->dderem}}" class="form-control"></div>
                                <div class="col-md-3"><span>Delantero Izq.:</span><input type="text" disabled value="{{$diario->dizqem}}" class="form-control"></div>
                                <div class="col-md-3"> <span>Trasero Der.:</span><input type="text" disabled value="{{$diario->tderem}}" class="form-control"></div>
                                <div class="col-md-3"> <span>Trasero Izq.:</span><input type="text" disabled value="{{$diario->tizqem}}" class="form-control"></div>
                            </div>
                        </div>
                    <div class="form-group row">
                        <div class="col-md-4 col-md-offset-1"><span>Usuario:</span></div>
                        <div class="col-md-4">
                          <input type="text" disabled value="{{$diario->usuario->usuario}}" class="form-control">
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