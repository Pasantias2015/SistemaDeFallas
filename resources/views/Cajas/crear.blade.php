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
                        <div class="col-md-3"><span>Mecánico:</span></div>
                            <div class="col-md-9">
                                <select name="mecanico" id="mecanico" class="form-control">
                                    <option>Seleccione un Mecanico</option>    
                                    @foreach($mecanicos as $mecanico)
                                    <option value="{{ $mecanico->nombrecompleto}}">{{ $mecanico->nombrecompleto }}</option>    
                                    @endforeach
                                </select>
                                </br>
                            </div>

					@include('tools.botones-registrar')
            	</div>
            	<div class="col-md-12">
            		<table class="table table-bordered table-striped">
            			<tr>
            				<th>ID</th>
                            <th>Descripción</th>
                            <th>Mecánico</th>
            				<th>Accion</th>
            			</tr>
            			@foreach($cajas as $caja)
            			<tr>            				
                            <td>{{ $caja->id }}</td>
                            <td>{{ $caja->descripcion }}</td>
                            <td>{{ $caja->mecanico }}</td>
            				<td>
            					<a href="{{ route('cajas.edit',$caja) }}" class="btn btn-info">Modificar</a>
            					
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