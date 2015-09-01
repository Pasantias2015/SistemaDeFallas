@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
		<div class="panel panel-danger">
			<div class="panel-heading">Reporte de Mantenimiento Preventivo</div>
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
                <h5><strong>A: </strong> Revisión y Limpieza: Filtro de Aire: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>B: </strong> Cambio: Lubricante: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>C: </strong> Cambio: Filtro de Aceite: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>D: </strong> Cambio: Filtro de Combustible: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>E: </strong> Revisión(Descarte de Fuga): Lineas de Combustible: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>F: </strong> Revisión(Descarte de Pérdida): Refrigerante: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>G: </strong> Reparación Fuga de Refrigerante: Si:{{$a1}}- No:{{$a2}}</h5>
              </div>
              <div class="col-md-6">
                <h5><strong>H: </strong> Revisión: Correa: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>I: </strong> Cambio: Correa: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>J: </strong> Revisión: Tapas de Radiador: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>K: </strong> Cambio: Tapas de Radiador: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>L: </strong> Lavado del Motor: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>M: </strong> Lavado: Filtro de Gases del Motor: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>N: </strong> Cambio: Filtro de Gases del Motor: Si:{{$a1}}- No:{{$a2}}</h5>
   
              </div>
            </div>
          </div>
      </div>
    </div>

 <div class="row">
      
     <!--  <div class="col-md-5">
          <div class="panel panel-danger">
            <div class="panel-heading">Reporte de Mantenimiento Preventivo - A/A</div>
            <div class="panel-body">
            <div class="row">
              <div id="graficos1" class="col-md-12" style=" height:300px"></div>
            </div>
            </div>
          </div>
      </div>
    </div>
 -->
		<div class="col-md-9 col-md-offset-1">
      @include('Mantenimiento_Preventivo.preventivos')
		</div>
		</div>
  </div>
</div>
<script>
  $(document).ready(function(){
    
    

//Diagrama de Barras A/A
      // var data1 = [
      //         { y: 'Cambio Filtro', a: <?php echo $j1a ?>, b: <?php echo $j2a ?>},
      //         { y: 'Lavado Malla', a: <?php echo $k1a ?>,  b: <?php echo $k2a ?>}, 
      //       ],
      //        config = {
      //               data: data1,
      //               xkey: 'y',
      //               ykeys: ['a', 'b'],
      //               labels: ['Si', 'No'],
      //               fillOpacity: 0.6,
      //               hideHover: 'auto',
      //               behaveLikeLine: true,
      //               resize: true,
      //               pointFillColors:['#ffffff'],
      //               pointStrokeColors: ['black'],
      //               lineColors:['blue','red']
      //           };
      //         config.element = 'graficos1';
      //         Morris.Bar(config);

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