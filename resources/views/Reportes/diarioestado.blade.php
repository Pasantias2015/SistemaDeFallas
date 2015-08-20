@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
		<div class="panel panel-danger">
			<div class="panel-heading">Reporte Mantenimiento Diario - Estado Fisico de las Unidades</div>
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
							      { y: 'Fuga de Refrigerante', a: <?php echo $a1 ?>},
							      { y: 'Asientos(Mal Estado)', a: <?php echo $b1 ?>},
							      { y: 'Rayones', a: <?php echo $c1 ?>},
							      { y: 'Vidrios Rotos', a: <?php echo $d1 ?>},
							      { y: 'Ajuste de Correa', a: <?php echo $e1 ?>},
							      { y: 'Cambio de Correa', a: <?php echo $f1 ?>},
							      { y: 'Falta Triangulo', a: <?php echo $g1 ?>},
							      { y: 'Falta Cono', a: <?php echo $h1 ?>},
							      { y: 'Falta Extintor', a: <?php echo $i1 ?>},
							      { y: 'Luces Internas(Mal Estado)', a: <?php echo $j1 ?>},							     
							      { y: 'Luces Internas(No Encienden)', a: <?php echo $k1 ?>},							     
							      { y: 'Luz Delantera Derecha(Mal Estado)', a: <?php echo $l1 ?>},
							      { y: 'Luz Delantera Izquierda(Mal Estado)', a: <?php echo $m1 ?>},
							      { y: 'Luz Trasera Derecho(Mal Estado)', a: <?php echo $n1 ?>},
							      { y: 'Luz Trasera Izquierda(Mal Estado)', a: <?php echo $o1 ?>},
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