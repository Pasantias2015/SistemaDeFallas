@extends('app')
@include('tools.sidebar')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel panel-danger">
				<div class="panel-heading">Listado De Operadores</div>
		<table class="table table-bordered table-striped">
		<tr>
			<th>id</th>
			<th>Cedula</th>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>Tel. Laboral</th>
			<th>Accion</th>

		</tr>
		<tbody>
		@foreach($operadores as $operador)
		<tr>
		
			<td>{{ $operador->id}}</td>
			<td>{{ $operador->cedula}}</td>
			<td>{{ $operador->pnombre.' '.$operador->papellido}}</td>
			<td>{{ $operador->direccion}}</td>
			<td>{{ $operador->telefonolaboral}}</td>
			<td>
				<a href="">Eliminar</a>
				<a href="">Editar</a>
			</td>
		
		</tr>
		@endforeach
		</tbody>
	</table>
	{!! $operadores->render() !!}
</div>
</div>
</div>
</div>
@endsection
