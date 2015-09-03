@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Lugares de Paradas</div>
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'lugares.store','method'=>'POST']) !!}

            	<div class="col-md-12">
            		<div class="form-group">
				        <span>Descripción: </span>
				        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
					</div>
					@include('tools.botones-registrar')
            	</div>
            	<div class="col-md-12">
            		<table class="table table-bordered table-striped">
            			<tr>
            				<th>ID</th>
            				<th>Descripción</th>
            				<th>Estado</th>
            				<th>Acción</th>
            			</tr>
            			@foreach($lugares as $lugar)
            			<tr>            				
            				<td>{{ $lugar->id }}</td>
            				<td>{{ $lugar->descripcion }}</td>
            				<td>{{ $lugar->estado }}</td>
            				<td>
            					<a href="{{ route('lugares.edit',$lugar) }}" class="btn btn-info">Modificar</a>
            					<a href="" class="btn btn-danger">Eliminar</a>
            				</td>            				
            			</tr>
            			@endforeach
            		</table>
            		{!! $lugares->render() !!}
            	</div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
@endsection