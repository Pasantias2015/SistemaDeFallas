@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Editar Mantenimiento : {{ $mantenimiento->nombre }}</div>
       <div class="panel-body">
       @include('tools.errors')
                
           {!! Form::model($mantenimiento,['route'=>['mantenimiento.update',$mantenimiento],'method'=>'PUT']) !!}

                <div class="col-md-12">

                   <div class="form-group">
                       <span>Nombre: </span>
                       {!! Form::text('nombre',null,['class'=>'form-control']) !!}
                   </div>
                   <div class="form-group">
                       <span>Descripcion: </span>
                       {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                   </div>
               </div>
           @include('tools.botones-actualizar')
           {!! Form::close() !!}

       </div>
    </div>
</div>
@endsection