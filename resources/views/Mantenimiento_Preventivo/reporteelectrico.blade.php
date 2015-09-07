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
          <div class="panel-heading">Reporte Suspensión - Arbol - Eje y Rueda</div>
          <div class="panel-body">
            <div class="row">
                <div id="graficos2" class="col-md-12" style=" height:300px"></div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h5><strong>Sistema Eléctrico</strong></h5>
                <h5><strong>A: </strong> Rotación de Baterias: Si:{{$a1}}- No:{{$a2}}</h5>
                <h5><strong>B: </strong> Cambio de Baterias:  Si:{{$b1}}- No:{{$b2}}</h5>
                <h5><strong>C: </strong> Chequeo: Nivel de Agua de Baterias: Bien:{{$c1}}- Mal:{{$c2}}</h5>
                <h5><strong>D: </strong> Medición de Voltaje: Si:{{$d1}}- No:{{$d2}}</h5>
                <h5><strong>E: </strong> Cambio: Bornes de Baterias: Si:{{$e1}}- No:{{$e2}}</h5>
                <h5><strong>F: </strong> Ajuste y Limpieza: Bornes de Baterias: Si:{{$f1}}- No:{{$f2}}</h5>
                <h5><strong>G: </strong> Chequeo: Funcionamiento del Indicador de Destino: Si:{{$g1}}- No:{{$g2}}</h5>                
              </div>
              <div class="col-md-6">
                <h5><strong>H: </strong> Chequeo: Cornetas: Si:{{$h1}}- No:{{$h2}}</h5>
                <h5><strong>Sistema de Frenos</strong></h5>
                <h5><strong>I: </strong> Chequeo y Ajustes: Bandas de Frenos: Si:{{$i1}}- No:{{$i2}}</h5>
                <h5><strong>J: </strong> Chequeo y Ajustes: Discos de Frenos: Si:{{$j1}}- No:{{$j2}}</h5>
                <h5><strong>Aire Acondicionado (A/A)</strong></h5>
                <h5><strong>K: </strong> Cambio: Filtro: Si:{{$k1}}- No:{{$k2}}</h5>
                <h5><strong>L: </strong> Lavado: Malla: Si:{{$l1}}- No:{{$l2}}</h5>
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