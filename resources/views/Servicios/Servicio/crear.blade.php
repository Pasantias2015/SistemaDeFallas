@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Servicios</div>
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'servicios.store','method'=>'POST']) !!}

            	<div class="col-md-12">
            		<div class="form-group">
				        <span>Descripcion: </span>
				        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
					</div>
					@include('tools.botones-registrar')
            	</div>
            	<div class="col-md-12">
            		<table class="table table-bordered table-striped">
            			<tr>
            				<th>ID</th>
            				<th>Descripcion</th>
            				<th>Estado</th>
            				<th>Accion</th>
            			</tr>
            			@foreach($servicios as $servicio)
            			<tr>            				
            				<td>{{ $servicio->id }}</td>
            				<td>{{ $servicio->descripcion }}</td>
            				<td>{{ $servicio->estado }}</td>
            				<td>
            					<a href="{{ route('servicios.edit',$servicio) }}" class="btn btn-info">Modificar</a>
            					<a href="" class="btn btn-danger">Eliminar</a>
            				</td>            				
            			</tr>
            			@endforeach
            		</table>
            		{!! $servicios->render() !!}
            	</div>
 			{!! Form::close() !!}
		</div>

	</div>
    <div class="panel panel-danger">
        <div class="panel-heading">Servicios</div>
        <div class="panel-body">
         @include('tools.errors')
           {!! Form::open(['route'=>'servicios.store','method'=>'POST']) !!}

               <div class="col-md-12">
                   <div class="form-group">
                        <span>Descripcion: </span>
                        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                    </div>
                    @include('tools.botones-registrar')
               </div>
               <div class="col-md-12">
                   <table class="table table-bordered table-striped">
                       <tr>
                           <th>ID</th>
                           <th>Descripcion</th>
                           <th>Estado</th>
                           <th>Accion</th>
                       </tr>
                       @foreach($servicios as $servicio)
                       <tr>                            
                           <td>{{ $servicio->id }}</td>
                           <td>{{ $servicio->descripcion }}</td>
                           <td>{{ $servicio->estado }}</td>
                           <td>
                               <a href="{{ route('servicios.edit',$servicio) }}" class="btn btn-info">Modificar</a>
                               <a href="" class="btn btn-danger">Eliminar</a>
                           </td>                            
                       </tr>
                       @endforeach
                   </table>
                   {!! $servicios->render() !!}
               </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>
@endsection