@extends('app')
@include('tools.sidebar')

@section('content') 
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-danger">
                    <div class="panel-heading">Asignar Codigo de Sistema a la Unidad : {{ $unidad->nidentificacion }}</div>
                    <div class="panel-body">
                        @include('tools.errors')
                        {!! Form::model($unidad,['route'=>['asignar.update',$unidad],'method'=>'PUT']) !!}
                        <div class="col-md-12">
                           <div class="form-group">
                               <span>Numero de Identificacion: </span>
                                   <input type="text" disabled value="{{$unidad->nidentificacion}}" class="form-control">
                           </div> 
                           <div class="form-group">
                               <span>Modelo: </span>
                               <input type="text" disabled value="{{$unidad->modelo_id}}" class="form-control">
                           </div> 
                            <div class="form-group">
                               <span>A&ntildeo: </span>
                               <input type="text" disabled value="{{$unidad->year}}" class="form-control">
                           </div> 
                           <div class="form-group">
                                <span>Codigo del Sistema: </span>                    
                                {!! Form::text('codigosistema',null,['class'=>'form-control']) !!}
                           </div>
                           <div class="form-group">
                                <span>IMEI SIM CARD: </span>                    
                                {!! Form::text('imei',null,['class'=>'form-control']) !!}
                           </div> 
                           <div class="form-group">
                                <span>Proveedor de Servicio (ISP):</span>                    
                                <select name="isp" id="isp" class="form-control">
                                      <option value="Movilnet">Movilnet</option>              
                                      <option value="Movistar">Movistar</option>
                                      <option value="Digitel">Digitel</option>
                                    </select>
                           </div>      
                         </div>
                            @include('tools.botones-actualizar')
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection