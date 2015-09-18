@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
    <div class="panel panel-danger">
        <div class="panel-heading">Ver Mantenimiento Mensual preventivo: {{ $mensual->fecha }}</div>
        <div class="panel-body">
        @include('tools.errors')
        {!! Form::model($mensual) !!} 
    		<div class="row">
                	<div class="col-md-4 col-md-offset-1">
                    	<div class="form-group row">
                        	<div class="col-md-4"><span>Fecha:</span></div>
                        	<div class="col-md-7">
                        		<input type="text" disabled value="{{$mensual->fecha}}" class="form-control">

                        	</div>
                    	</div>
                	</div>
                        <div class="col-md-4 col-md-offset-1">
                            <div class="form-group row">
                                <div class="col-md-4"><span>Unidad:</span></div>
                                <div class="col-md-6">   
                                    <input type="text" disabled value="{{$mensual->unidad->nidentificacion}}" class="form-control">
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
                                    <div class="col-md-8 col-md-offset-1"><span>Chequeo del nivel del liquido de las Baterias.</span><strong>  ¿Nivel Adecuado?</strong></div>
                                    <div class="col-md-2">
                                        <input type="text" disabled value="{{$mensual->liquidobat}}" class="form-control">    
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <div class="col-md-7 col-md-offset-1"><strong>¿Cuántos Litros Completó?</strong></div>
                                        <div class="col-md-2">
                                            <input type="text" disabled value="{{$mensual->litrosb}}" class="form-control">
                                        </div>
                                        <div class="col-md-2"><span>Lts</span></div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-md-8 col-md-offset-1"><span>Revisión de las Escobillas del Limpia Parabrisas.</span><strong>  ¿Se realizó sustitución?</strong></div>
                                    <div class="col-md-2">
                                        <input type="text" disabled value="{{$mensual->escobillas}}" class="form-control">    
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <div class="col-md-8 col-md-offset-1"><span>Revisión de la Instalación de Filtros de Aire.</span><strong>  ¿Se realizó sustitución?</strong></div>
                                        <div class="col-md-2">
                                            <input type="text" disabled value="{{$mensual->filtros}}" class="form-control">    
                                        </div>

                                    </div>
                                <div class="form-group row">
                                    <div class="col-md-8 col-md-offset-1"><span>Chequeo del Nivel de Liquido de Accionamiento Hidroestatico del Ventilador.</span><strong>   ¿Está en el Nivel indicado?</strong></div>
                                    <div class="col-md-2">
                                        <input type="text" disabled value="{{$mensual->liquidoven}}" class="form-control">    
                                    </div>
                                </div>
                                    <div class="form-group row ">
                                        <div class="col-md-7 col-md-offset-1"><strong>¿Cuántos Litros Completó?</strong></div>
                                        <div class="col-md-2">
                                            <input type="text" disabled value="{{$mensual->litrosven}}" class="form-control">    
                                        </div>
                                        <div class="col-md-2"><span>Lts</span></div>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-md-8 col-md-offset-1"><span>Liberación de agua en Depositos de Aire a presión.</span></div>
                                    <div class="col-md-2">
                                        <input type="text" disabled value="{{$mensual->airepresion}}" class="form-control">    
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 col-md-offset-1"><span>Liberación de agua en el Filtro de Combustible.</span></div>
                                    <div class="col-md-2">
                                        <input type="text" disabled value="{{$mensual->filtroscomb}}" class="form-control">    
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 col-md-offset-1"><span>Revisar el Estado del desgaste del Forro de Freno.</span><strong>  ¿Realizó Sustitución?</strong></div>
                                    <div class="col-md-2">
                                        <input type="text" disabled value="{{$mensual->forro}}" class="form-control">    
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-8 col-md-offset-1"><span>Revisar el estado de las Correas Trapezoidales.</span><strong>  ¿Realizó Sustitución?</strong></div>
                                    <div class="col-md-2">
                                        <input type="text" disabled value="{{$mensual->correas}}" class="form-control">       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 col-md-offset-1"><span>Limpieza de las Rejillas de Filtrantes de Recirculacion del Climatizador.</span><strong>  ¿Realizó Sustitución?</strong></div>
                                    <div class="col-md-2">
                                        <input type="text" disabled value="{{$mensual->rejillas}}" class="form-control">    
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