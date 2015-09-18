@extends('app')
@include('tools.sidebar')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                             <div class="panel-heading">Consultar Unidad - Numero: {{ $unidades->nidentificacion }}</div> 
                    <div class="panel-body">
                        @include('tools.errors')
                                <div class=" col-md-12">
                                

                                        <div class="form-group">
                                               <span>Numero de VIN</span>
                                               <input type="text" disabled value="{{$unidades->vin}}" class="form-control">
                                                
                                        </div>

                                        <div class="form-group">
                                                <span>Serial de Carroceria</span>
                                                <input type="text" disabled value="{{$unidades->serialcarroceria}}" class="form-control">
                                                
                                        </div>

                                        <div class="form-group">
                                                <span>Serial del Motor</span>
                                                <input type="text" disabled value="{{$unidades->serialmotor}}" class="form-control">
                                                
                                        </div>

                                        <div class="form-group">
                                                <span>Año:</span>
                                                <input type="text" disabled value="{{$unidades->year}}" class="form-control">
                                                
                                        </div>

                                        <div class="form-group">
                                                <span>Uso: </span>
                                                <input type="text" disabled value="{{$unidades->uso}}" class="form-control">
                                        </div>

                                    <div class="form-group">
                                            <span>Marca: </span>
                                            <input type="text" disabled value="{{$unidades->modelo->marca->nombre}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <span>Modelo: </span>
                                            <input type="text" disabled value="{{$unidades->modelo->descripcion}}" class="form-control">

                                    </div>
                                </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
         <input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
    </div>

@endsection
