@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Herramienta </div>
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'herramientas.store','method'=>'POST']) !!}

            	<div class="col-md-12">
            		
                       
                         <div class="form-group">
                                <span>Codigo: </span>
                                {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                        </div>
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
            				<th>Codigo</th>
                            <th>Descripcion</th>
            				<th>Accion</th>
            			</tr>
            			@foreach($herramientas as $herramienta)
            			<tr>            				
                            <td>{{ $herramienta->id }}</td>
            				<td>{{ $herramienta->codigo }}</td>
                            <td>{{ $herramienta->descripcion }}</td>
            				<td>
            					<a href="{{ route('herramientas.edit',$herramienta) }}" class="btn btn-info">Modificar</a>
            					<a href="" class="btn btn-danger">Eliminar</a>
            				</td>            				
            			</tr>
            			@endforeach
            		</table>
            		{!! $herramientas->render() !!}
            	</div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
@endsection