@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Editar Puestos : {{ $puesto->descripcion }}</div>
       <div class="panel-body">
       @include('tools.errors')   

           {!! Form::model($puesto,['route'=>['puestos.update',$puesto],'method'=>'PUT']) !!}

                <div class="col-md-12">

                   <div class="form-group">

                       <span>Descripción: </span>
                       
                       {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                   </div> 
                   <div class="form-group">

                       <span>Patio: </span>
                        
                    <input type="text" disabled value="{{$puesto->patio->descripcion}}" class="form-control">
                   </div>      
                 

               </div>

           @include('tools.botones-actualizar')
           {!! Form::close() !!}

       </div>
    </div>
</div>
@endsection