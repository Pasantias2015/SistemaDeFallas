@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Editar Servicio : {{ $servicio->descripcion }}</div>
       <div class="panel-body">
       @include('tools.errors')
                

           {!! Form::model($servicio,['route'=>['servicios.update',$servicio],'method'=>'PUT']) !!}

                <div class="col-md-12">

                   <div class="form-group">

                       <span>Descripcion: </span>
                       
                       {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                   </div>    
                   <div class="form-group">
                       <select name="estado" id="estado" class="form-control">
                           <option>activo</option>
                           <option>inactivo</option>
                       </select>
                   </div>

               </div>

           @include('tools.botones')
           {!! Form::close() !!}

       </div>
    </div>
	<div class="panel panel-danger">
		<div class="panel-heading">Editar Servicio : {{ $servicio->descripcion }}</div>
        <div class="panel-body">
        @include('tools.errors')
				

            {!! Form::model($servicio,['route'=>['servicios.update',$servicio],'method'=>'PUT']) !!}

				<div class="col-md-12">

                    <div class="form-group">

                    	<span>Descripcion: </span>

                        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <select name="estado" id="estado" class="form-control">
                            <option>activo</option>
                            <option>inactivo</option>
                        </select>
                    </div>


            	</div>

            @include('tools.botones-actualizar')
            {!! Form::close() !!}

        </div>
	</div>
</div>
@endsection