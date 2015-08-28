@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Editar Causas : {{ $causa->descripcion }}</div>
       <div class="panel-body">
       @include('tools.errors')   

           {!! Form::model($causa,['route'=>['causas.update',$causa],'method'=>'PUT']) !!}

                <div class="col-md-12">
 
                   <div class="form-group">
                       <span>Causa: </span>
                       {!! Form::text('causafalla',null,['class'=>'form-control']) !!}
                   </div> 
                   <div class="form-group">
                        <span>Falla: </span>                    
                        <input type="text" disabled value="{{$causa->falla->descripcion}}" class="form-control">
                   </div>      
               </div>

           @include('tools.botones-actualizar')
           {!! Form::close() !!}

       </div>
    </div>
</div>
@endsection