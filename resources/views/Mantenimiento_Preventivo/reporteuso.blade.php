@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
		<div class="panel panel-danger">
			<div class="panel-heading">Reporte de Mantenimiento Preventivo - Fluidos Usados</div>
      <div class="panel-body">
			<div class="col-md-8 col-md-offset-4"><h4>Desde:{{$inicio}} - Hasta {{$fin}}</h4></div>
      <div id="graficos" class="col-md-8" style=" height:350px"></div>
      <div class="col-md-4">
        <br/>
        <br/>
        <br/>
        <h4><strong>Lubricante: </strong>Total Litros: {{$a1}}</h4>
        <h4><strong>Aceite: </strong>Total Litros: {{$b1}}</h4>
        <h4><strong>Combustible: </strong>Total Litros: {{$c1}}</h4>
        <h4><strong>Engrasante: </strong>Total Litros: {{$d1}}</h4>
        <h4><strong>Aceite Diferencial: </strong>Total Litros: {{$e1}}</h4>
        <h4><strong>Agua (Baterias): </strong>Total Litros: {{$f1}}</h4>
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
                                {label: "Lubricante(Lts)", value: <?php echo $a1 ?>},
                                {label: "Aceite(Lts)", value: <?php echo $b1 ?>},
                                {label: "Combustible(Lts)", value: <?php echo $c1 ?>},
                                {label: "Engrasante(Lts)", value: <?php echo $d1 ?>},
                                {label: "Aceite Diferencial(Lts)", value: <?php echo $e1 ?>},
                                {label: "Agua de Baterias(Lts)", value: <?php echo $f1 ?>}
                              ]
                            });
                        });
</script>
@endsection