@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Actualizar: {{ $almacen->codigo." - ".$almacen->tipo }}</div>
       <div class="panel-body">
       @include('tools.errors')   

           {!! Form::model($almacen,['route'=>['almacen.update',$almacen],'method'=>'PUT']) !!}

                <div class="col-md-12">
                   <div class="form-group">
                       <span>Codigo: </span>
                        <input type="text" disabled value="{{$almacen->codigo}}" class="form-control">
                   </div> 
                   <div class="form-group">
                       <span>Descripción: </span>
                        <input type="text" disabled value="{{$almacen->codigo}}" class="form-control">
                   </div> 
                   <div class="form-group">
                       <span>Tipo: </span>
                        <input type="text" disabled value="{{$almacen->tipo}}" class="form-control">
                   </div>
                   <div class="form-group" style="display:none">
                       <span>Cantidad Actual: </span>
                       {!! Form::text('cantidad',null,['class'=>'form-control']) !!}
                   </div> 
                    <div class="form-group">
                       <span>Cantidad a Ingresar: </span>
                       {!! Form::number('cantidadnueva',null,['class'=>'form-control']) !!}
                   </div> 
                         
               </div>
           @include('tools.botones-actualizar')
           {!! Form::close() !!}

       </div>
    </div>
</div>
@endsection