@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Pieza </div><!--  el modelo tiene una seccion esta a su vez tiene un grupo y este pieza -->
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'piezas.store','method'=>'POST']) !!}

            	<div class="col-md-12">
            		
                        <div class="form-group">
                                <span>Grupo: </span>
                                <select name="grupo_id" class="form-control">
                                      @foreach($grupos as $grupo)
                                      <option value="{{ $grupo->id }}">{{ $grupo->descripcion }}</option>    
                                      @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                                <span>Codigo: </span>
                                {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                                <span>Descripcion: </span>
                                {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                                <span>Cantidad: </span>
                                {!! Form::number('cantidad',null,['class'=>'form-control']) !!}
                        </div>

					@include('tools.botones-registrar')
            	</div>
            	<div class="col-md-12">
            		<table class="table table-bordered table-striped">
            			<tr>
            				<th>ID</th>
            				<th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Grupo</th>
            				<th>Accion</th>
            			</tr>
            			@foreach($piezas as $pieza)
            			<tr>            				
                            <td>{{ $pieza->id }}</td>
            				<td>{{ $pieza->codigo }}</td>
                            <td>{{ $pieza->descripcion }}</td>
                            <td>{{ $pieza->cantidad }}</td>
            				<td>{{ $pieza->grupo->descripcion }}</td>
            				<td>
            					<a href="{{ route('piezas.edit',$pieza) }}" class="btn btn-info">Modificar</a>
            					<a href="" class="btn btn-danger">Eliminar</a>
            				</td>            				
            			</tr>
            			@endforeach
            		</table>
            		{!! $piezas->render() !!}
            	</div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
@endsection