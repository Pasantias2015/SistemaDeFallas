@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Equipo </div>
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'herramientas.store','method'=>'POST']) !!}

            	<div class="col-md-12">
            		
                       
                         <div class="form-group">
                                <span>Código: </span>
                                {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                        </div>
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
            				<th>Código</th>
                            <th>Descripción</th>
            				<th>Acción</th>
            			</tr>
            			@foreach($herramientas as $herramienta)
            			<tr>            				
                            <td>{{ $herramienta->id }}</td>
            				<td>{{ $herramienta->codigo }}</td>
                            <td>{{ $herramienta->descripcion }}</td>
            				<td>
            					<a href="{{ route('herramientas.edit',$herramienta) }}" class="btn btn-info">Modificar</a>
            				
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