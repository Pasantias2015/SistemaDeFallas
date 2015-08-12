@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Caja </div>
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'cajas.store','method'=>'POST']) !!}

            	<div class="col-md-12">
            		
                        <div class="form-group">
                                <span>Descripcion: </span>
                                {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                                <span>Mecanico: </span>
                                {!! Form::text('mecanico',null,['class'=>'form-control']) !!}
                                                  <!-- llamar mecanico -->
                        </div>
					@include('tools.botones-registrar')
            	</div>
            	<div class="col-md-12">
            		<table class="table table-bordered table-striped">
            			<tr>
            				<th>ID</th>
                            <th>Descripcion</th>
                            <th>Mecanico</th>
            				<th>Accion</th>
            			</tr>
            			@foreach($cajas as $caja)
            			<tr>            				
                            <td>{{ $caja->id }}</td>
                            <td>{{ $caja->descripcion }}</td>
                            <td>{{ $caja->mecanico }}</td>
            				<td>
            					<a href="{{ route('cajas.edit',$caja) }}" class="btn btn-info">Modificar</a>
            					<a href="" class="btn btn-danger">Eliminar</a>
            				</td>            				
            			</tr>
            			@endforeach
            		</table>
            		{!! $cajas->render() !!}
            	</div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
@endsection