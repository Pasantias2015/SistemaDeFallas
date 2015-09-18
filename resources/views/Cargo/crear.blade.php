@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Registrar Cargos </div>
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'cargos.store','method'=>'POST']) !!}

            	<div class="col-md-12">
                        
                        <div class="form-group">
                                <span>Coordinacion: </span>
                                <select name="coordinacion_id" class="form-control">
                                      @foreach($coordinaciones as $coordinacion)
                                      <option value="{{ $coordinacion->id }}">{{ $coordinacion->nombre }}</option>    
                                      @endforeach
                                </select>
                        </div>                    
            		
                        <div class="form-group">
                                <span>Codigo: </span>
                                {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                                <span>Nombre del Cargo: </span>
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
                            <th>Coordinacion</th>
            				<th>Accion</th>
            			</tr>
            			@foreach($cargos as $cargo)
            			<tr>            				
                            <td>{{ $cargo->id }}</td>
                            <td>{{ $cargo->codigo }}</td>
                            <td>{{ $cargo->nombre }}</td>
                            <td>{{ $cargo->coordinacion->nombre }}</td>
            				<td>
            					<a href="{{ route('cargos.edit',$cargo) }}" class="btn btn-info">Modificar</a>
            				</td>            				
            			</tr>
            			@endforeach
            		</table>

            	</div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
@endsection