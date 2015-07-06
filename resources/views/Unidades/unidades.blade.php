@extends('app')
@include('tools.sidebar')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel panel-danger">
				<div class="panel-heading">Listado De Unidades</div>
				
					
					<table class="table table-bordered table-striped">
						<tr>
							<th>Id</th>
							<th>Serial Motor</th>
							<th>Vim</th>
							<th>Kilometraje</th>
							<th>Condicion</th>
							
						</tr>
						@foreach($unidades as $unidad)
						<tr>
							<td>{{ $unidad->id}}</td>
							<td><a href="">{{ $unidad->serialmotor}}</a></td>
							<td><a href="">{{ $unidad->vin}}</a></td>
							<td>{{ $unidad->kilometraje}}</td>
							<td>laborando</td>
							
							
						</tr>
						@endforeach	
					</table>

				
			</div>
			<div class="panel panel-default"><p>Hay {{ $unidades->total() }} Unidades</p></div>
		</div>
	</div>
	
</div>
@endsection