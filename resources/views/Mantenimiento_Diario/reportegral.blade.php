@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
	<div class="panel panel-danger">
		<div class="panel-heading">Reporte General de Mantenimiento Diario</div>
		<div class="panel-body">
			<div class="col-md-8 col-md-offset-4"><h4>Desde:{{$inicio}} - Hasta {{$fin}}</h4></div>
			<div id="graficos" class="col-md-11" style=" height:300px"></div>
			<div class="col-md-12">
				<div class="col-md-4">
					<h5><strong>A:</strong> Nivel del Aceite Adecuado: Si:{{$a1}} - No:{{$a2}} </h5>
					<h5><strong>D:</strong> Nivel del Combustible Adecuado: Si:{{$d1}} - No:{{$d2}} </h5>
					<h5><strong>G:</strong> Estado de los Correas: Bueno:{{$g1}} - Malo:{{$g2}} </h5>				
					<h5><strong>J:</strong> Luces Internas: Si:{{$j1}} - No:{{$j2}} </h5>	
					<h5><strong>M:</strong> Luces de Emergencia: Si:{{$m1}} - No:{{$m2}} </h5>
				</div>
				<div class="col-md-4">
					<h5><strong>B:</strong> Nivel del Refrigerante Adecuado: Si:{{$b1}} - No:{{$b2}} </h5>
					<h5><strong>E:</strong> Estado de los Asientos: Bueno:{{$e1}} - Malo:{{$e2}} </h5>
					<h5><strong>H:</strong> Equipo de Seguridad Completo: Si:{{$h1}} - No:{{$h2}} </h5>
					<h5><strong>K:</strong> Luces de Externas: Si:{{$k1}} - No:{{$k2}} </h5>
				</div>
				<div class="col-md-4">
					<h5><strong>C:</strong> Aire Neumáticos Adecuado: Si:{{$c1}} - No:{{$c2}} </h5>
					<h5><strong>F:</strong> Estado de los Carroceria: Bueno:{{$f1}} - Malo:{{$f2}} </h5>
					<h5><strong>I:</strong> Luces Internas (Edo. Fisico): Bueno:{{$i1}} - Malo:{{$i2}} </h5>
					<h5><strong>L:</strong> Luces de Cruce: Si:{{$l1}} - No:{{$l2}} </h5>
				</div>		
			</div>
			<div class="col-md-9 col-md-offset-1">
			            @include('Mantenimiento_Diario.diarios')
			</div>
		</div>
	</div>
</div>
<script>
    $(document).ready(function(){
        //Diagrama de Barras
			var data = [
							{ y: 'A', a: <?php echo $a1 ?>, b: <?php echo $a2 ?>},
							{ y: 'B', a: <?php echo $b1 ?>,  b: <?php echo $b2 ?>},
							{ y: 'C', a: <?php echo $c1 ?>,  b: <?php echo $c2 ?>},
							{ y: 'D', a: <?php echo $d1 ?>,  b: <?php echo $d2 ?>},
							{ y: 'E', a: <?php echo $e1 ?>,  b: <?php echo $e2 ?>},
							{ y: 'F', a: <?php echo $f1 ?>,  b: <?php echo $f2 ?>},
							{ y: 'G', a: <?php echo $g1 ?>,  b: <?php echo $g2 ?>},							     
							{ y: 'H', a: <?php echo $h1 ?>,  b: <?php echo $h2 ?>},
							{ y: 'I', a: <?php echo $i1 ?>,  b: <?php echo $i2 ?>},
							{ y: 'J', a: <?php echo $j1 ?>,  b: <?php echo $j2 ?>},
							{ y: 'K', a: <?php echo $k1 ?>,  b: <?php echo $k2 ?>},
							{ y: 'L', a: <?php echo $l1 ?>,  b: <?php echo $l2 ?>},
							{ y: 'M', a: <?php echo $m1 ?>,  b: <?php echo $m2 ?>},
						],
						 config = {
							      data: data,
							      xkey: 'y',
							      ykeys: ['a', 'b'],
							      labels: ['Buen Estado', 'Mal Estado'],
							      fillOpacity: 0.6,
							      hideHover: 'auto',
							      behaveLikeLine: true,
							      resize: true,
							      pointFillColors:['#ffffff'],
							      pointStrokeColors: ['black'],
							      lineColors:['blue','red']
							  };
							config.element = 'graficos';
							Morris.Bar(config);
    });
</script>
@endsection