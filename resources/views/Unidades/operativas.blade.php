@extends('app')
@include('tools.sidebar')
@section('content')

<div class="col-md-6">
	<div class="panel panel-danger">
		<div class="panel-heading">Listado De Unidades Operativas</div>
		<div style="overflow-x:scroll">
			<table class="table table-bordered table-hover">
						<tr>
							<th>ID</th>
							<th>Numero de Identificacion</th>
							<th>Modelo</th>
							<th>Año</th>
                            <th>Accion</th>
						</tr>
						@foreach($operativas as $operativa)
						<tr>
							<td>{{ $operativa->id}}</td>
							<td>{{ $operativa->nidentificacion}}</td>
							<td>{{ $operativa->modelo->codigo." - ".$operativa->modelo->descripcion}}</td>
							<td>{{ $operativa->year}}</td>
							
                            <td><a href="{{ route('unidades.show',$operativa)}}"  class="btn btn-success">Ver</a></td>
							
						</tr>
						@endforeach	
			</table>
		</div>	
	</div>
</div>

<div class="col-md-6">
	<div class="panel panel-danger">
		<div class="panel-heading">Listado De Unidades Inoperativas</div>
		<div style="overflow-x:scroll">
			<table class="table table-bordered table-hover">
						<tr>
							<th>ID</th>
							<th>Numero de Identificacion</th>
							<th>Modelo</th>
							<th>Año</th>
                            <th>Accion</th>
						</tr>
						@foreach($inoperativas as $inoperativa)
						<tr>
							<td>{{ $inoperativa->id}}</td>
							<td>{{ $inoperativa->nidentificacion}}</td>
							<td>{{ $inoperativa->modelo->codigo." - ".$inoperativa->modelo->descripcion}}</td>
							<td>{{ $inoperativa->year}}</td>
							
                            <td><a href="{{ route('unidades.show',$inoperativa)}}" class="btn btn-success">Ver</a></td>
							
						</tr>
						@endforeach	
			</table>
		</div>	
	</div>
</div>
         <input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />

	

@endsection