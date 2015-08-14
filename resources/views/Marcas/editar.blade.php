@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Editar Marca : {{ $marca->nombre }}</div>
       <div class="panel-body">
       @include('tools.errors')
                
           {!! Form::model($marca,['route'=>['marcas.update',$marca],'method'=>'PUT']) !!}

                <div class="col-md-12">

                   <div class="form-group">
                       <span>Nombre: </span>
                       {!! Form::text('nombre',null,['class'=>'form-control']) !!}
                   </div>
               </div>
           @include('tools.botones-actualizar')
           {!! Form::close() !!}

       </div>
    </div>
</div>
@endsection