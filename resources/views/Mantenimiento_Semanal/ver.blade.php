@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Mantenimiento Semanal: {{ $semanal->fecha }}</div>
        <div class="panel-body">
        @include('tools.errors')


                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-4"><span>Fecha:</span></div>
                                <div class="col-md-6">
                                    <input type="text" disabled value="{{$semanal->fecha}}" class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-4"><span>Unidad:</span></div>
                                <div class="col-md-6">   
                                    <input type="text" disabled value="{{$semanal->unidad->nidentificacion}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="col-md-4"><span>Hora de Motor:</span></div>
                                <div class="col-md-6">
                                    <input type="text" disabled value="{{$semanal->horamotor}}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-danger">
                        <div class="panel-heading">Parametros a Revisar</div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Llenado del nivel del liquido del dispositivo del Limpia Parabrisas.</span></div>
                                <div class="col-md-2">
                                    <input type="text" disabled value="{{$semanal->cnliquido}}" class="form-control">   
                                </div>
                            </div>
                                <div class="form-group row liquido">
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Cuantos Litros Completó?</strong></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$semanal->litrosl}}" class="form-control"></div>
                                    <div class="col-md-2"><span>Lts</span></div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión de la presion de los Cauchos.</span><strong>  ¿Se encuentran con la Presion Requerida?</strong></div>
                                <div class="col-md-2">
                                     <input type="text" disabled value="{{$semanal->presionc}}" class="form-control">   
                                </div>
                            </div>
                                <div class="form-group row presioncauchos">
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Cuántos Psi/Bar Completó?</strong></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$semanal->cantidadpre}}" class="form-control"></div>
                                    <div class="col-md-2"><span>Psi/Bar</span></div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Limpieza de la estera de Filtros del Aire Acondicionado.</span><strong>  ¿Lo ha Reemplazado?</strong></div>
                                <div class="col-md-2">
                                    <input type="text" disabled value="{{$semanal->filtrosa}}" class="form-control">   
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión del Filtro previo de Combustible.</span><strong>  ¿Lo Reemplazado?</strong></div>
                                <div class="col-md-2">
                                    <input type="text" disabled value="{{$semanal->filtropre}}" class="form-control">   
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo Nivel de Refrigerante.</span><strong>  ¿Está en el Nivel Indicado?</strong></div>
                                <div class="col-md-2">
                                    <input type="text" disabled value="{{$semanal->cantrefrigerante}}" class="form-control">   
                                </div>
                            </div>
                                <div class="form-group row refrigerantes">
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Cuántos Litros Completó?</strong></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$semanal->litrosref}}" class="form-control"></div>
                                    <div class="col-md-2"><span>Lts</span></div>
                                </div>

                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo del Nivel de Aceite del Motor.</span><strong> ¿Está en el Nivel Indicado?</strong></div>
                                <div class="col-md-2">
                                    <input type="text" disabled value="{{$semanal->cantaceitem}}" class="form-control">   
                                </div>
                            </div>
                                <div class="form-group row aceitemotor">
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Cuántos Litros Completó?</strong></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$semanal->litrosam}}" class="form-control"></div>
                                    <div class="col-md-2"><span>Lts</span></div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Chequeo Nivel de Aceite del Sistema Hidráulico.</span><strong> ¿Está en el Nivel Indicado?</strong></div>
                                <div class="col-md-2">
                                    <input type="text" disabled value="{{$semanal->cantaceiteh}}" class="form-control">   
                                </div>
                            </div>
                                <div class="form-group row aceitesh">
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Cuántos Litros Completó?</strong></div>
                                    <div class="col-md-2"><input type="text" disabled value="{{$semanal->litroshidra}}" class="form-control"></div>
                                    <div class="col-md-2"><span>Lts</span></div>
                                </div>
                            <div class="form-group row">
                                <div class="col-md-8 col-md-offset-1"><span>Revisión del Estado de los Fuelles Neumáticos.</span><strong>¿Buen Estado?</strong></div>
                                <div class="col-md-2">
                                    <input type="text" disabled value="{{$semanal->fuelle}}" class="form-control">   
                                </div>
                            </div>
                                <div class="form-group row">
                                    <div class="col-md-7 col-md-offset-1"><strong>¿Lo ha Sustituido?</strong></div>
                                    <div class="col-md-2">
                                        <input type="text" disabled value="{{$semanal->reparado}}" class="form-control">   
                                    </div>
                                </div>
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