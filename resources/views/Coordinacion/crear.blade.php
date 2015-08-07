@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Coordinacion </div>
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'coordinaciones.store','method'=>'POST']) !!}

            	<div class="col-md-12">
            		
                        <div class="form-group">
                                <span>Codigo: </span>
                                {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                                <span>Nombre: </span>
                                {!! Form::text('nombre',null,['class'=>'form-control']) !!}
                        </div>
					@include('tools.botones-registrar')
            	</div>
            	<div class="col-md-12">
            		<table class="table table-bordered table-striped">
            			<tr>
            				<th>ID</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
            				<th>Accion</th>
            			</tr>
            			@foreach($coordinaciones as $coordinacion)
            			<tr>            				
                            <td>{{ $coordinacion->id }}</td>
                            <td>{{ $coordinacion->codigo }}</td>
                            <td>{{ $coordinacion->nombre }}</td>
            				<td>
            					<a href="{{ route('coordinaciones.edit',$coordinacion) }}" class="btn btn-info">Modificar</a>
            					<a href="" class="btn btn-danger">Eliminar</a>
            				</td>            				
            			</tr>
            			@endforeach
            		</table>
            		{!! $coordinaciones->render() !!}
            	</div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
@endsection