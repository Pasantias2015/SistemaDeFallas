@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Editar Grupo : {{ $grupo->descripcion }}</div>
       <div class="panel-body">
       @include('tools.errors')   

           {!! Form::model($grupo,['route'=>['grupos.update',$grupo],'method'=>'PUT']) !!}

                <div class="col-md-12">

                   <div class="form-group">
                       <span>Codigo: </span>
                       {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                   </div> 
                   <div class="form-group">
                       <span>Descripcion: </span>
                       {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                   </div> 
                   <div class="form-group">
                        <span>Seccion: </span>                    
                        <input type="text" disabled value="{{$grupo->seccion->descripcion}}" class="form-control">
                   </div>      
               </div>

           @include('tools.botones-actualizar')
           {!! Form::close() !!}

       </div>
    </div>
</div>
@endsection