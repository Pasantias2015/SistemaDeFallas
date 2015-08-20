@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
	
		<div class="panel panel-danger">
			<div class="panel-heading">Reporte de Mantenimiento Diario - Fluidos Usados</div>
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
                        	
                        	var grafica = new Morris.Donut({
                            element: 'graficos',
                             resize: true,
                             redraw: true,
                              data: [
                                {label: "Aceite(Lts)", value: <?php echo $a1 ?>},
                                {label: "Refrigerante(Lts)", value: <?php echo $b1 ?>},
                                {label: "Aire(psi/bar)", value: <?php echo $c1 ?>},
                                {label: "Combustible(Lts)", value: <?php echo $d1 ?>}
                              ]
                            });
                        });

  </script>
@endsection