@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
		<div class="panel panel-danger">
			<div class="panel-heading">Reporte de Mantenimiento Preventivo - Dirección - Embrague - Enfriamiento - Luces</div>
      <div class="panel-body">
			 <div class="row"> 
          <div class="col-md-8 col-md-offset-4"><h4>Desde:{{$inicio}} - Hasta {{$fin}}</h4></div>
    </div>
   
    <div class="row">
      <div class="panel panel-danger">
          <div class="panel-heading">Reporte Mantenimiento Motor</div>
          <div class="panel-body">
            <div class="row">
                <div id="graficos2" class="col-md-12" style=" height:300px"></div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h5><strong>Sistema de Dirección</strong></h5>
                <h5><strong>A: </strong> Revisión: Fugas de Aceite: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>B: </strong> Reparacion: Fugas de Aceite:  Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>C: </strong> Revisión: Estado del Juego del Volante: Bien:{{$a1}}- Mal:{{$a2}}</h5>
                <h5><strong>D: </strong> Ajustamiento de las Barras Yoquis de Dirección: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>E: </strong> Revisión, Ajuste y Engrase: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>F: </strong> Revisión: Nivel de Aceite de Direccion: Refrigerante: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>Sistema de Embrague</strong></h5>
                <h5><strong>G: </strong> Chequeo y Engrase: Si:{{$a1}}- No:{{$a2}}</h5>
              </div>
              <div class="col-md-6">
                <h5><strong>Sistema de Enfriamiento</strong></h5>
                <h5><strong>H: </strong> Lavado del Radiador: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>I: </strong> Chequeo: Estado de Abrazaderas y Mangueras: Si:{{$a1}}- No:{{$a2}}</h5>
              <h5><strong>Luces</strong></h5>
                <h5><strong>J: </strong> Revisión y Chequeo: Luces: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>K: </strong> Cambio De Luces Internas: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>L: </strong> Cambio de Luces Externas: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>M: </strong> Cambio de Luces Cruce: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>N: </strong> Cambio de Luces Emergencia: Si:{{$a1}}- No:{{$a2}}</h5>
   
              </div>
            </div>
          </div>
      </div>
    </div>

 <div class="row">
		<div class="col-md-9 col-md-offset-1">
      @include('Mantenimiento_Preventivo.preventivos')
		</div>
		</div>
  </div>
</div>
<script>
  $(document).ready(function(){
  //Diagrama de Barras Mantenimiento Motor
      var data2 = [
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
              { y: 'N', a: <?php echo $n1 ?>,  b: <?php echo $n2 ?>},
        
            ],
             config = {
                    data: data2,
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Si', 'No'],
                    fillOpacity: 0.6,
                    hideHover: 'auto',
                    behaveLikeLine: true,
                    resize: true,
                    pointFillColors:['#ffffff'],
                    pointStrokeColors: ['black'],
                    lineColors:['blue','red']
                };
              config.element = 'graficos2';
              Morris.Bar(config);
});
</script>
@endsection