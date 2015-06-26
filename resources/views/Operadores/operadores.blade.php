@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-10">
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>cedula</th>
				<th>Primer Nombre</th>
				<th>Direccion</th>
			</tr>
		</thead>
		<tbody>
		@foreach( $operadores as $operador)
			<tr>
				<td>{{ $operadores->id }}</td>
				<td>{{ $operadores->cedula }}</td>
				<td>{{ $operadores->pnombre }}</td>
				<td>{{ $operadores->direccion }}</td>
			</tr>
		</tbody>
		@endforeach

	</table>
	{!! $operadores->render() !!}
</div>
@endsection
