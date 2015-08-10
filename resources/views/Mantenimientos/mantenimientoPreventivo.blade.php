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
                            {!! Form::text('unidad',null,['class'=>'form-control']) !!}
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
                            <div class="col-md-8 col-md-offset-1"><span>Revisión y Limpieza de Filtro de Aire:</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('fAire', '1', true) !!} <!-- validar -->
                                <span>No:</span>{!! Form::radio('fAire', '2', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Cambio del Lubricante:</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('CLub', '1', true) !!} <!-- validar -->
                                <span>No:</span>{!! Form::radio('CLub', '2', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Cambio del Filtro de Aceite:</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('FAceite', '1', true) !!} <!-- validar -->
                                <span>No:</span>{!! Form::radio('FAceite', '2', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Lavado del Filtro de Combustible:</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('FComb', '1', true) !!} <!-- validar -->
                                <span>No:</span>{!! Form::radio('FComb', '2', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión Lineas de Combustible(Descarte deFuga):</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('RLineas', '1', true) !!} <!-- validar -->
                                <span>No:</span>{!! Form::radio('RLineas', '2', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión Pérdida de Refrigerante:</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('RRefri', '1', true) !!} <!-- validar -->
                                <span>No:</span>{!! Form::radio('RRefri', '2', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión de Correa:</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('RCorrea', '1', true) !!} <!-- validar -->
                                <span>No:</span>{!! Form::radio('RCorrea', '2', false) !!} 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-1"><span>Revisión de las Tapas de Radiador:</span></div>
                            <div class="col-md-3">    
                                <span>Si:</span>{!! Form::radio('RTapas', '1', true) !!} <!-- validar -->
                                <span>No:</span>{!! Form::radio('RTapas', '2', false) !!} 
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Suspensión</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión de Aceite Amortiguadores y Fijación Soporte(Descarte de Fuga):</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('RAmor', '1', true) !!} <!-- validar -->
                                    <span>No:</span>{!! Form::radio('RAmor', '2', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión de Muelles:</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('RMuelle', '1', true) !!} <!-- validar -->
                                    <span>No:</span>{!! Form::radio('RMuelle', '2', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Lubricar:</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('Lubricar', '1', true) !!} <!-- validar -->
                                    <span>No:</span>{!! Form::radio('Lubricar', '2', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión de Aire en las Cámaras(Descarte de Fuga):</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('RCamaras', '1', true) !!} <!-- validar -->
                                    <span>No:</span>{!! Form::radio('RCamaras', '2', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Limpieza de la Base Suspensión del Aire:</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('RBase', '1', true) !!} <!-- validar -->
                                    <span>No:</span>{!! Form::radio('RBase', '2', false) !!} 
                                </div>
                            </div>
                        <div class="panel-heading">Arbol de Suspensión:</div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión del Arbol y Junta de Transmisión:</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('RArbol', '1', true) !!} <!-- validar -->
                                    <span>No:</span>{!! Form::radio('RArbol', '2', false) !!} 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Engrasar:</span></div>
                                <div class="col-md-3">    
                                    <span>Si:</span>{!! Form::radio('Engrasar', '1', true) !!} <!-- validar -->
                                    <span>No:</span>{!! Form::radio('Engrasar', '2', false) !!} 
                                </div>
                            </div>
    

                    </div>

                </div>
            </div>

            {!! Form::close() !!}
        </div>

    </div>

</div>
@endsection