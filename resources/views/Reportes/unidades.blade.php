@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-danger">
			<div class="panel-heading">
				Reporte
			</div>
			@foreach($results as $result)
				{{ $result->nidentificacion}}
				{{ $result->condicion}}
				{{ $result->mes}}
			@endforeach
			<script src="js/googlechart.js"></script>
			<script>
			
				google.load("visualization", "1.01", {"packages" :["corechart"]});
				google.setOnLoadCallback(dibujar);
				
				function dibujar() {
			        var data = google.visualization.arrayToDataTable([
			          ['Meses', 'Unidades Operativas', 'Unidades Inoperativas'],
			          ['Enero',  10,0],
			          ['Febrero', 10,0],
			          ['Marzo',  8,2],
			          ['Abril',  10,0],
			          ['Mayo',  7,3],
			          ['Junio',  6,4],
			          ['Julio',  4,6],
			          ['Agosto',  7,3],
			          ['Septiembre',  8,2],
			          ['Octubre',  9,1],
			          ['Noviembre',  10,0],
			          ['Diciembre',  10,0],
			        ]);
					var opciones = {
									'title':'Informe De Unidades'
									
									};
					var grafica = new google.visualization.AreaChart(document.getElementById('charts'));
					//var grafica = new google.visualization.LineChart(document.getElementById('charts'));
					grafica.draw(data,opciones);
				}

				
			</script>
			<div id="charts"></div>
			
		</div>
	</div>
</div>
@endsection