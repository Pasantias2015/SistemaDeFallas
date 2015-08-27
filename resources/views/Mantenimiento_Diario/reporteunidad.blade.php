@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
	<div class="panel panel-danger">
			<div class="panel-heading">Reporte General de Mantenimiento Diario De La Unidad {{$uni->nidentificacion}}</div>
			<div class="panel-body">
				<div class="row">
						  <div class="col-md-8 col-md-offset-4"><h3>Uso de Fluidos</h3></div>
					      <div id="graficos" class="col-md-8" style=" height:260px"></div>
                 <div class="col-md-4">
                    <br/>
                    <br/>
                    <br/>
                    <h4><strong>Aceite: </strong>Total Litros: {{$a1}}</h4>
                    <h4><strong>Refrigerante: </strong>Total Litros: {{$b1}}</h4>
                    <h4><strong>Aire: </strong>Total Litros: {{$c1}}</h4>
                    <h4><strong>Diesel: </strong>Total Litros: {{$d1}}</h4>
                    <h4><strong>Gas: </strong>Total MPa: {{$e1}}</h4>
                  </div>
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