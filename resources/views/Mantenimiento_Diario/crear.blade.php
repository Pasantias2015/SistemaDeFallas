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
                            <select name="serviciounidadoperador_id" id="unidad" class="form-control">
                                @foreach($unidades as $unidad)
                                    <option value="{{ $unidad->id }}">{{ $unidad->servicio->descripcion."-".$unidad->unidad->nidentificacion."-".$unidad->operador->persona->pnombre }}</option>    
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
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger">
                    <div class="panel-heading">Parametros a Revisar</div>
                    <div class="form-group row">
                        <div class="col-md-7 col-md-offset-1"><span>Item:</span></div>
                        <div class="col-md-4"><span>Buen estado:</span></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo Nivel de aceite del motor</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('cnaceitem', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('cnaceitem', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo Nivel de agua refrigerante</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('cnarefrigerante', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('cnarefrigerante', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Aire de los neumáticos</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('airene', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('airene', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Nivel de combustible</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('cncomb', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('cncomb', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Estado Interior de la Unidad: Asientos</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('ceiasientos', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('ceiasientos', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Estado Exterior de la Unidad: Carroceria</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('ceicarroceria', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('ceicarroceria', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Estado Exterior de la Unidad: Vidrios</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('ceeunidad', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('ceeunidad', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo de Frenos y embrague</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('cfrenos', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('cfrenos', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo de Correas</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('ccorrea', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('ccorrea', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo de Radiador</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('cradiador', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('cradiador', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Equipo de seguridad y herramientas (gato, triángulo, extintor, conos).</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('ceseguridad', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('ceseguridad', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo de los Bornes</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('cbornes', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('cbornes', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Estado Fisico de las Luces</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('cefluces', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('cefluces', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Encendido de las Luces de Cruce</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('celuces', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('celuces', 'No') !!} 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-1"><span>Chequeo del Encendido de las Luces de Emergencia</span></div>
                        <div class="col-md-3">    
                            <span>Si:</span>{!! Form::radio('celucesem', 'Si') !!} 
                            <span>No:</span>{!! Form::radio('celucesem', 'No') !!} 
                        </div>
                    </div>

                </div>
                @include('tools.botones-registrar')
            </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection