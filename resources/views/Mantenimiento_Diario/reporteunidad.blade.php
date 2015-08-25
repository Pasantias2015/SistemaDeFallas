@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
	<div class="panel panel-danger">
			<div class="panel-heading">Reporte General de Mantenimiento Diario De La Unidad {{$uni->nidentificacion}}</div>
			<div class="panel-body">
				<div class="row">
						  <div class="col-md-8 col-md-offset-4"><h3>Uso de Fluidos</h3></div>
					      <div id="graficos" class="col-md-11" style=" height:240px"></div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
				      	@include('Mantenimiento_Diario.diarios')
					</div>
				</div>
			</div>
	</div>
</div>
<script>
           $(document).ready(function(){
                        	
                        	var grafica = new Morris.Donut({
                            element: 'graficos',
                             resize: true,
                             redraw: true,
                              data: [
                                {label: "Aceite(Lts)", value: <?php echo $a1 ?>},
                                {label: "Refrigerante(Lts)", value: <?php echo $b1 ?>},
                                {label: "Aire(psi/bar)", value: <?php echo $c1 ?>},
                                {label: "Diesel(Lts)", value: <?php echo $d1 ?>},
                                {label: "Gas(MPa)", value: <?php echo $e1 ?>}
                              ]
                            });
                        });

  </script>
@endsection