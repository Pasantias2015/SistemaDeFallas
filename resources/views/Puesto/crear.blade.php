@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Puestos</div>
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'puestos.store','method'=>'POST']) !!}

            	<div class="col-md-12">
            		
                        <div class="form-group">
                                <span>Patio: </span>
                                <select name="patio_id" class="form-control">
                                      @foreach($patios as $patio)
                                      <option value="{{ $patio->id }}">{{ $patio->descripcion }}</option>    
                                      @endforeach
                                </select>
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
            				<th>Descripcion</th>
                                    <th>Patio</th>
            				<th>Accion</th>
            			</tr>
            			@foreach($puestos as $puesto)
            			<tr>            				
            				<td>{{ $puesto->id }}</td>
                                    <td>{{ $puesto->descripcion }}</td>
            				<td>{{ $puesto->patio->descripcion }}</td>
            				<td>
            					<a href="{{ route('puestos.edit',$puesto) }}" class="btn btn-info">Modificar</a>
            					<a href="" class="btn btn-danger">Eliminar</a>
            				</td>            				
            			</tr>
            			@endforeach
            		</table>
            		{!! $puestos->render() !!}
            	</div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
@endsection