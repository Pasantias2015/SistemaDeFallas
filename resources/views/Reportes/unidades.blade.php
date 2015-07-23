@extends('app')
@include('tools.sidebar')
@section('content')

	<div class="col-md-12">
		<div class="panel panel-danger">
			<div class="panel-heading">
				Reporte
			</div>
			
			<script src="js/googlechart.js"></script>
			<script>
			

				google.load("visualization", "1.01", {"packages" :["corechart"]});
				google.setOnLoadCallback(dibujar);
				
				function dibujar() {
			        var data = google.visualization.arrayToDataTable([
			          ['Meses', 'Unidades Operativas','Unidades Inoperativas'],
			          
						@foreach ($operativa as $index => $op)
						

						['{{ $op->mes}}',{{ $op->cant }},{{ $inoperativa[$index]->cant }}],
						
						
						@endforeach
			          
			        ]);
					var opciones = {
					                  'title': 'Reporte anual de estado de las Unidades',					        
					        };
					//var grafica = new google.visualization.AreaChart(document.getElementById('charts'));
					//var grafica = new google.visualization.LineChart(document.getElementById('charts'));
					var grafica = new google.visualization.ColumnChart(document.getElementById('charts'));
					
					
					grafica.draw(data,opciones);
				}


		
			
				
				
			</script>
			<div id="charts">
				
			</div>
			<button class="btn btn-danger">Exportar a Pdf</button>
		</div>
	</div>

@endsection