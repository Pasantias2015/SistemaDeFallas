@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
	<div id="graficos" class="col-md-6" style="height:250px"></div>
	<div id="graficos1" class="col-md-6"style="height:250px"></div>
	<div class="col-md-12">
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
		<script>
                        $(document).ready(function(){

                        	var valor = 70;
					    //Diagrama de "Torta"
					    	var grafica = new Morris.Donut({
                            element: 'graficos',
                             resize: true,
                             redraw: true,
                              data: [
                                {label: "Operativa", value: valor},
                                {label: "Inoperativa", value: 15},
                                {label: "Reserva", value: 20}
                              ]
                            });

					    	  //Diagrama de Barras
							var data = [
							      { y: 'Enero', a: 100, b: 98},
							      { y: 'Febrero', a: 65,  b: 75},
							      { y: 'Marzo', a: 50,  b: 50},
							      { y: 'Abril', a: 75,  b: 60},
							      { y: 'Mayo', a: 80,  b: 65},
							      { y: 'Junio', a: 90,  b: 70}
							    ],
							    config = {
							      data: data,
							      xkey: 'y',
							      ykeys: ['a', 'b'],
							      labels: ['Total Operativas', 'Total Inoperativas'],
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

                        });

                        </script>
@endsection