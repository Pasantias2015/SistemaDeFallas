@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Seccion </div><!--  el modelo tiene una seccion esta a su vez tiene un grupo y este pieza -->
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open(['route'=>'secciones.store','method'=>'POST']) !!}

            	<div class="col-md-12">
            		
                        <div class="form-group">
                                <span>Modelo: </span>
                                <select name="modelo_id" class="form-control">
                                      @foreach($modelos as $modelo)
                                        <option value="{{ $modelo->id }}">{{ $modelo->marca->nombre." - ".$modelo->descripcion." - ".$modelo->combustible." - ".$modelo->year." - ".$modelo->dimension." - ".$modelo->transmision }}</option>    
                                      @endforeach
                                </select>
                        </div>
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
                            <th>Modelo</th>
            				<th>Acción</th>
            			</tr>
            			@foreach($secciones as $seccion)
            			<tr>            				
                            <td>{{ $seccion->id }}</td>
            				<td>{{ $seccion->codigo }}</td>
                            <td>{{ $seccion->descripcion }}</td>
            				<td>{{ $seccion->modelo->descripcion }}</td>
            				<td>
            					<a href="{{ route('secciones.edit',$seccion) }}" class="btn btn-info">Modificar</a>

            				</td>            				
            			</tr>
            			@endforeach
            		</table>
            		{!! $secciones->render() !!}
            	</div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
@endsection