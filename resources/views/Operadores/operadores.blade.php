@extends('app')
@include('tools.sidebar')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel panel-danger">
				<div class="panel-heading">Listado De Operadores</div>
				
				<!--Para Filtrar-->
				<form class="form-inline pull-right">
				{!! Form::open([ 'route'=> 'operadores.index', 'method'=> 'GET', 'class' => 'form-inline pull-right' ]) !!}
				  <div class="form-group">
				     <!--<label for="exampleInputName2">Nombre Completo</label>¿por cual se filtrara?-->
				     {!! Form::text( 'pnombre', null, ['class' => 'form-control' , 'placeholder' => 'Nombre Completo' ]) !!}
				  </div>
				 	<button type="submit" class="btn btn-success">Buscar</button>
				 	{!! Form::close() !!}
				</form>

				<table class="table table-bordered table-striped">
					<tr>
						<th>id</th>
						<th>Cedula</th>
						<th>Nombre Completo</th>
						<th>Direccion</th>
						<th>Tel. Laboral</th>
						<th>Accion</th>

					</tr>
					<tbody>
					@foreach($operadores as $operador)
					<tr>
					
						<td>{{ $operador->id}}</td>
						<td>{{ $operador->cedula}}</td>
						<td>{{ $operador->pnombre." ".$operador->papellido}}</td>
						<td>{{ $operador->direccion}}</td>
						<td>{{ $operador->telefono_laboral}}</td>
						<td><a href="" class="label label-success">Ver</a></td>
					
					</tr>
					@endforeach
					</tbody>
				</table>
				<!--Total de Operadores-->
				@if(count($operadores) > 0)
								<div>Operadores registrados: <label><?php echo $total=count($operadores)?></label> </div>
				@else
								<div>Ninguna Operador registrado</div>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection
