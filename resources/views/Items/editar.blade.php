@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Editar item : {{ $item->descripcion }}</div>
       <div class="panel-body">
       @include('tools.errors')
                

           {!! Form::model($item,['route'=>['item.update',$item],'method'=>'PUT']) !!}

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
                        <span>Mantenimiento: </span>                    
                        <input type="text" disabled value="{{$item->mantenimiento->nombre}}" class="form-control">
                   </div>   

               </div>
           @include('tools.botones-actualizar')
           {!! Form::close() !!}

       </div>
    </div>
</div>
@endsection