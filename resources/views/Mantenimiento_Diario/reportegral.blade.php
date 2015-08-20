@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
		<div class="panel panel-danger">
			<div class="panel-heading">Reporte General de Mantenimiento Diario</div>
			<div id="graficos" class="col-md-11" style=" height:300px"></div>
			<div class="col-md-9 col-md-offset-1">
				<div class="panel panel-danger">
					<div class="panel-heading">Mantenimientos Diarios Realizados</div>
						<table class="table table-bordered table-striped">
		                      <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Servicio - Unidad - Operador</th>
                                    <th>Accion</th>
                              </tr>
                              @foreach($diarios as $diario)
                              <tr>                                
                                <td>{{ $diario->id }}</td>
                                <td>{{ $diario->fecha }}</td>
                                <td>{{ $diario->serviciounidadoperador->servicio->descripcion." - ".$diario->serviciounidadoperador->unidad->nidentificacion." - ".$diario->serviciounidadoperador->operador->persona->pnombre }}</td>
                                <td>
                                  <a href="{{ route('diario.edit',$diario) }}" class="btn btn-info">Ver</a>
                                </td>                               
                              </tr>
                              @endforeach
                        </table>
                        {!! $diarios->render() !!}
						
					</div>
				</div>
		</div>
</div>
		<script>
           $(document).ready(function(){
                        	
					    	  //Diagrama de Barras
							var data = [
							      { y: 'Aceite', a: <?php echo $a1 ?>, b: <?php echo $a2 ?>},
							      { y: 'Refrigerante', a: <?php echo $b1 ?>,  b: <?php echo $b2 ?>},
							      { y: 'Neumaticos', a: <?php echo $c1 ?>,  b: <?php echo $c2 ?>},
							      { y: 'Combustible', a: <?php echo $d1 ?>,  b: <?php echo $d2 ?>},
							      { y: 'Asientos', a: <?php echo $e1 ?>,  b: <?php echo $e2 ?>},
							      { y: 'Carroceria', a: <?php echo $f1 ?>,  b: <?php echo $f2 ?>},
							      { y: 'Correas', a: <?php echo $g1 ?>,  b: <?php echo $g2 ?>},							     
							      { y: 'Equipo de Seguridad', a: <?php echo $h1 ?>,  b: <?php echo $h2 ?>},
							      { y: 'Luces Internas (Edo. Fisico)', a: <?php echo $i1 ?>,  b: <?php echo $i2 ?>},
							      { y: 'Luces Internas', a: <?php echo $j1 ?>,  b: <?php echo $j2 ?>},
							      { y: 'Luces de Externas', a: <?php echo $k1 ?>,  b: <?php echo $k2 ?>},
							      { y: 'Luces de Cruce', a: <?php echo $l1 ?>,  b: <?php echo $l2 ?>},
							      { y: 'Luces de Emergencia', a: <?php echo $m1 ?>,  b: <?php echo $m2 ?>},
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