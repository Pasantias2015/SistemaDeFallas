@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Editar Modelo : {{ $modelo->codigo }}</div>
       <div class="panel-body">
       @include('tools.errors')
                
           {!! Form::model($modelo,['route'=>['modelos.update',$modelo],'method'=>'PUT']) !!}

                <div class="col-md-12">

                   <div class="form-group">
                       <span>Código: </span>
                       {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                   </div>
                   <div class="form-group">
                       <span>Descripción: </span>
                       {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                   </div>
                   <div class="form-group">
                        <span>Tipo de Combustible:</span>
                        <select name="combustible" id="" class="form-control">
                          <option>Gas</option>
                          <option>Diesel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Tipo de Transmisión:</span>
                        <select name="transmision" id="transmision" class="form-control">
                          <option>Automatico</option>
                          <option>Sincronico</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <span>Tamaño(Dimensión): </span>
                        {!! Form::text('dimension',null,['class'=>'form-control']) !!}
                    </div>
               </div>
           @include('tools.botones-actualizar')
           {!! Form::close() !!}

       </div>
    </div>
</div>
@endsection