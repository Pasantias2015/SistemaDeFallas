@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Patios</div>
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'patios.store','method'=>'POST']) !!}

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
            				<th>Descripción</th>
            				<th>Acción</th>
            			</tr>
            			@foreach($patios as $patio)
            			<tr>            				
            				<td>{{ $patio->id }}</td>
            				<td>{{ $patio->descripcion }}</td>
            				<td>
            					<a href="{{ route('patios.edit',$patio) }}" class="btn btn-info">Modificar</a>
            					<a href="" class="btn btn-danger">Eliminar</a>
            				</td>            				
            			</tr>
            			@endforeach
            		</table>
            		{!! $patios->render() !!}
            	</div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
@endsection