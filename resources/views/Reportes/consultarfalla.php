<!DOCTYPE html>
<html>
<head>
	
	<script type="text/javascript">
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
		var opciones = {'title':'Informe De Unidades',
						
						'fillColor' : "rgba(255,255,255,.1)",
      'strokeColor' : "rgba(255,255,255,1)",
      'pointColor' : "red",
      'pointStrokeColor' : "rgba(255,255,255,1)",
						};
		var grafica = new google.visualization.LineChart(document.getElementById('charts'));
		grafica.draw(data,opciones);
	}
	</script>
</head>
<body>
<div id="charts"></div>	
</body>
</html>