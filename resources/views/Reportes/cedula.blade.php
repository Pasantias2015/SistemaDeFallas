@extends('app')
@include('tools.sidebar')
@section('content')
		<div class="row">
			<div class="panel panel-danger">
				
				<div class="col-md-6">Gratico De Torta</div>
				<div class="col-md-6">grafico de barra</div>
				<div class="col-md-12">
					<div class="panel panel-danger">
						<div class="panel-heading">Historial de incidencias</div>
							<table class="table table-bordered table-striped">
								<tr>
									<th>Fecha</th>
									<th>Servicio</th>
									<th>Lugar</th>
									<th>Tipo De Falla</th>
									<th>Mecanico</th>
									<th>Diagnostico Del Mecanico</th>
									<th>Fecha De Operatividad</th>
									<th>Dias Inoperatividad</th>
								</tr>
								<tr>
									<td>01/03/2015</td>
									<td>Linea 1</td>
									<td>Parque Del Este</td>
									<td>Falla Electrica</td>
									<td>Pedro Perez</td>
									<td>Bujias Partidas</td>
									<td>03/03/2015</td>
									<td>2</td>
								</tr>
								</table>
						
					</div>
				</div>
			
			</div>
		</div>
@endsection