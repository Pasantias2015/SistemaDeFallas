@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
		<div class="panel panel-danger">
			<div class="panel-heading">Reporte de Mantenimiento Preventivo - Fluidos Usados</div>
      <div class="panel-body">
			 <div class="row"> 
          <div class="col-md-8 col-md-offset-4"><h4>Desde:{{$inicio}} - Hasta {{$fin}}</h4></div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <div class="panel panel-danger">
          <div class="panel-heading">Reporte de Mantenimiento Preventivo - Cambios</div>
          <div class="panel-body">
            <div class="row">
              <div id="graficos" class="col-md-8" style=" height:300px"></div>
              <div class="col-md-4">
                <h5><strong>Correas</strong>Total: {{$a1}}</h5>
                <h5><strong>Tapas Radiador</strong>Total: {{$b1}}</h5>
                <h5><strong>Abrazaderas</strong>Total: {{$c1}}</h5>
                <h5><strong>Mangueras</strong>Total: {{$d1}}</h5>
                <h5><strong>Luces Internas</strong>Total: {{$e1}}</h5>
                <h5><strong>Luces Externas</strong>Total: {{$f1}}</h5>
                <h5><strong>Luces Cruce</strong>Total: {{$g1}}</h5>
                <h5><strong>Luces Emergencia</strong>Total: {{$h1}}</h5>
                <h5><strong>Bornes</strong>Total: {{$i1}}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
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
    <div class="row">
      <div class="panel panel-danger">
          <div class="panel-heading">Reporte de Mantenimiento Preventivo - Mantenimiento Motor</div>
          <div class="panel-body">
           <div class="row">
              <div id="graficos2" class="col-md-12" style=" height:300px"></div>
            </div>
          </div>
      </div>
    </div>

		<div class="col-md-9 col-md-offset-1">
      @include('Mantenimiento_Preventivo.preventivos')
		</div>
		</div>
  </div>
</div>
<script>
  $(document).ready(function(){
    
    var grafica = new Morris.Donut({element: 'graficos',
                             resize: true,
                             redraw: true,
                              data: [
                                {label: "Correas", value: <?php echo $a1 ?>},
                                {label: "Tapas de Radiador", value: <?php echo $b1 ?>},
                                {label: "Abrazaderas", value: <?php echo $c1 ?>},
                                {label: "Mangueras", value: <?php echo $d1 ?>},
                                {label: "Luces Internas", value: <?php echo $e1 ?>},
                                {label: "Luces Externas", value: <?php echo $f1 ?>},
                                {label: "Luces Cruce", value: <?php echo $g1 ?>},
                                {label: "Luces Emergencia", value: <?php echo $h1 ?>},
                                {label: "Bornes", value: <?php echo $i1 ?>}
                              ]
                            });

//Diagrama de Barras A/A
      var data1 = [
              { y: 'Cambio Filtro', a: <?php echo $j1 ?>, b: <?php echo $j2 ?>},
              { y: 'Lavado Malla', a: <?php echo $k1 ?>,  b: <?php echo $k2 ?>}, 
            ],
             config = {
                    data: data1,
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
              config.element = 'graficos1';
              Morris.Bar(config);

//Diagrama de Barras Mantenimiento Motor
      var data2 = [
              { y: 'A', a: <?php echo $l1 ?>, b: <?php echo $l2 ?>},
              { y: 'B', a: <?php echo $m1 ?>,  b: <?php echo $m2 ?>}, 
              { y: 'C', a: <?php echo $n1 ?>,  b: <?php echo $n2 ?>}, 
              { y: 'D', a: <?php echo $o1 ?>,  b: <?php echo $o2 ?>}, 
              { y: 'E', a: <?php echo $p1 ?>,  b: <?php echo $p2 ?>}, 
              { y: 'F', a: <?php echo $m1 ?>,  b: <?php echo $m2 ?>}, 
              { y: 'G', a: <?php echo $m1 ?>,  b: <?php echo $m2 ?>}, 
              { y: 'H', a: <?php echo $m1 ?>,  b: <?php echo $m2 ?>}, 
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