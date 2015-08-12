@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Mantenimiento Preventivo</div>
        <div class="panel-body">
         @include('tools.errors')<!-- ['route'=>'mantenimiento.store','method'=>'POST'] -->
            {!! Form::open() !!}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-5"><span>Fecha:</span></div>
                        <div class="col-md-6">    
                            {!! Form::text('fecha',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                         <div class="form-group row">
                            <div class="col-md-5"><span>Unidad:</span></div>
                            <div class="col-md-6">   
                                <input type="text" disabled value="" class="form-control">
                            </div>
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
                                        {!! Form::text('kilometraje',null,['class'=>'form-control']) !!}
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
                                            {!! Form::text('combustible',null,['class'=>'form-control']) !!}
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
                            <div class="col-md-8 col-md-offset-1"><span>Revisión y Limpieza: Filtro de Aire</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('rlfiltroa', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('rlfiltroa', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Cambio: Lubricante</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('clubricante', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('clubricante', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Cambio: Filtro de Aceite</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('cfaceite', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('cfaceite', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Lavado: Filtro de Combustible</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('lfcombustible', 'Si', true) !!}
                                <span>No:</span>{!! Form::radio('lfcombustible', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Fuga): Lineas de Combustible</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('rlineascom', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('rlineascom', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Pérdida): Refrigerante</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('rrefrigerante', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('rrefrigerante', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Correa</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('rcorrea', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('rcorrea', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Tapas de Radiador</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('rtapasr', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('rtapasr', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Lavado del Motor</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('lavadom', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('lavadom', 'No', false) !!} 
                                </div>
                            </div>
                    </div>  
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema de Dirección</div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Salideros de Aceite:</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('rsalidaa', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('rsalidaa', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Juego del Volante</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('rjuegovolante', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('rjuegovolante', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('revision', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('revision', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Ajustamiento de las Barras Yoquis de Dirección</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('abarrasy', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('abarrasy', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión, Ajuste y Engrase</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('raengrase', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('raengrase', 'No', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión: Nivel de Aceite de Direccion</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('rnadireccion', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('rnadireccion', 'No', false) !!} 
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-danger">
                    <div class="panel-heading">Yutong</div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Lavado: Filtro de Gases</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('lfgases', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('lfgases', 'No', false) !!} 
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema de Embrague</div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Chequeo y Engrase</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('ceembrague', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('ceembrague', 'No', false) !!} 
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema de Enfriamiento</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Lavado del Radiador</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('lavador', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('lavador', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo: Abrazaderas y Mangueras</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('cabmangueras', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('cabmangueras', 'No', false) !!} 
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Suspensión</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Fuga): Aceite Amortiguadores y Fijación Soporte</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('raamortiguador', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('raamortiguador', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión: de Muelles</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('rmuelle', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('rmuelle', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Lubricar</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('lubricar', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('lubricar', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión(Descarte de Fuga): Aire en las Cámaras</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('racamaras', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('racamaras', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Limpieza: Base Suspensión del Aire</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('lbasesusp', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('lbasesusp', 'No', false) !!} 
                                </div>
                            </div>
                    </div>
                     <div class="panel panel-danger">
                        <div class="panel-heading">Arbol de Suspensión</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión: Arbol y Junta de Transmisión:</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('rarboljunta', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('rarboljunta', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Engrasar</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('engrasar', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('engrasar', 'No', false) !!} 
                                </div>
                            </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Eje y Rueda</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión: Salidero del Diferencial</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('rsaliderod', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('rsaliderod', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión: Nivel del Aceite Diferencial</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('raceitedif', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('raceitedif', 'No', false) !!} 
                                </div>
                            </div>
                            
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema Electrico</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Rotación de Baterias</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('RBaterias', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('RBaterias', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo: Nivel de Agua de Baterias</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('CAguaBat', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('CAguaBat', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Medición de Voltaje</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('MVoltaje', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('MVoltaje', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Ajuste y Limpieza: Bornes de Baterias</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('ALBornes', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('ALBornes', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión y Chequeo: Luces</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('RCLuces', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('RCLuces', 'No', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo: Funcionamiento del Indicador de Destino</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('CDestino', 'Si', true) !!} 
                                    <span>No:</span>{!! Form::radio('CDestino', 'No', false) !!} 
                                </div>
                            </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Sistema de Frenos</div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Chequeo y Ajustes: Bandas de Frenos</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('Bandas', 'Si', true) !!} 
                                <span>No:</span>{!! Form::radio('Bandas', 'No', false) !!} 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1No">
                        <div class="col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Trabajo Realizado Por:</div>
                                <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Mecanico:</span></div>
                                    <div class="col-md-6">    
                                        {!! Form::text('Mecanico',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Tec. Mecanico:</span></div>
                                    <div class="col-md-6">    
                                        {!! Form::text('tecMecanico',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 col-md-offset-1"><span>Ayud. Mecanico:</span></div>
                                    <div class="col-md-6">    
                                        {!! Form::text('AyudMecanico',null,['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Recibido y Revisado Por:</div>
                                {!! Form::text('revisado',null,['class'=>'form-control']) !!}
                            </div>                       
                        </div>
                </div>
            </div>
            @include('tools.botones-registrar')

            {!! Form::close() !!}
        </div>

    </div>

</div>
@endsection