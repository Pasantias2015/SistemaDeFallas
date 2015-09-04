@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Fallas Neoplan </div><!--  el modelo neoplan tiene un conjunto de fallas "tipicas" y estas a su vez tiene unas causas y estas soluciones -->
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'fallas.store','method'=>'POST']) !!}

            	<div class="col-md-12">
            		
                        <div class="form-group">
                                <span>Unidad: </span>
                                <select name="unidad_id" class="form-control">
                                      @foreach($unidades as $unidad)
                                        <option value="{{ $unidad->id }}">{{ $unidad->modelo->marca->nombre." - ".$unidad->modelo->descripcion." - ".$unidad->nidentificacion}}</option>    
                                      @endforeach
                                </select>
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
                            <th>Descripción</th>
            				<th>Accion</th>
            			</tr>
            			@foreach($fallas as $falla)
            			<tr>            				
                            <td>{{ $falla->id }}</td>
                            <td>{{ $falla->descripcion }}</td>
            				<td>
            					<a href="{{ route('fallas.edit',$falla) }}" class="btn btn-info">Modificar</a>
            					<a href="" class="btn btn-danger">Eliminar</a>
            				</td>            				
            			</tr>
            			@endforeach
            		</table>
            		{!! $fallas->render() !!}
            	</div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
@endsection