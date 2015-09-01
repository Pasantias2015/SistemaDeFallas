@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
		<div class="panel panel-danger">
			<div class="panel-heading">Reporte Mantenimiento Diario - Estado Fisico de las Unidades</div>
			<div class="panel-body">
       <div class="col-md-8 col-md-offset-4"><h4>Desde:{{$inicio}} - Hasta {{$fin}}</h4></div>
        <div id="graficos" class="col-md-12" style=" height:300px"></div>
        <div class="col-md-12">
          <div class="col-md-4">
            <h5><strong>A:</strong> Fuga de Refrigerante: Total: {{$a1}}</h5>
            <h5><strong>D:</strong> Rayones: Total: {{$d1}}</h5>
            <h5><strong>G:</strong> Cambio de Correa: Total: {{$g1}}</h5>       
            <h5><strong>J:</strong> Falta Extintor: Total:{{$j1}}</h5>
            <h5><strong>M:</strong> Luz Delantera Derecha(Mal Estado): Total: {{$m1}}</h5>
            <h5><strong>P:</strong> Luz Trasera Izquierda(Mal Estado): Total: {{$m1}}</h5>
          </div>
          <div class="col-md-4">
            <h5><strong>B:</strong> Reparacion de Fuga: Total: {{$b1}}</h5>
            <h5><strong>E:</strong> Vidrios Rotos: Total: {{$e1}}</h5>
            <h5><strong>H:</strong> Falta Triangulo: Total: {{$h1}}</h5>
            <h5><strong>K:</strong> Luces Internas(Mal Estado): Total: {{$k1}}</h5>
            <h5><strong>N:</strong> Luz Delantera Izquierda(Mal Estado): Total: {{$m1}}</h5>
          </div>
          <div class="col-md-4">
           <h5><strong>C:</strong> Asientos(Mal Estado): Total: {{$c1}}</h5>
           <h5><strong>F:</strong> Ajuste de Correa: Total: {{$f1}}</h5>
           <h5><strong>I:</strong> Falta Cono: Total: {{$i1}}</h5>
           <h5><strong>L:</strong> Luces Internas(No Encienden): Total: {{$l1}}</h5>
           <h5><strong>O:</strong> Luz Trasera Derecho(Mal Estado): Total: {{$m1}}</h5>
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
                    { y: 'A', a: <?php echo $a1 ?>},
                    { y: 'B', a: <?php echo $p1 ?>},
                    { y: 'C', a: <?php echo $b1 ?>},
                    { y: 'D', a: <?php echo $c1 ?>},
                    { y: 'E', a: <?php echo $d1 ?>},
                    { y: 'F', a: <?php echo $e1 ?>},
                    { y: 'G', a: <?php echo $f1 ?>},
                    { y: 'H', a: <?php echo $g1 ?>},
                    { y: 'I', a: <?php echo $h1 ?>},
                    { y: 'J', a: <?php echo $i1 ?>},
                    { y: 'K', a: <?php echo $j1 ?>},                  
                    { y: 'L', a: <?php echo $k1 ?>},                  
                    { y: 'M', a: <?php echo $l1 ?>},
                    { y: 'N', a: <?php echo $m1 ?>},
                    { y: 'O', a: <?php echo $n1 ?>},
                    { y: 'P', a: <?php echo $o1 ?>},
                  ],
                  config = {
                    data: data,
                    xkey: 'y',
                    ykeys: ['a'],
                    labels: ['total'],
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