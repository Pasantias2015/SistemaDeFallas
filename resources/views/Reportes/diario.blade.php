@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
	<div id="graficos" class="col-md-12" style=" height:250px"></div>
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

					    	  //Diagrama de Barras
							var data = [
							      { y: 'Aceite', a: 100, b: 98},
							      { y: 'Refrigerante', a: 65,  b: 75},
							      { y: 'Neumaticos', a: 50,  b: 50},
							      { y: 'Combustible', a: 75,  b: 60},
							      { y: 'Asientos', a: 80,  b: 65},
							      { y: 'Carroceria', a: 90,  b: 70},
							      { y: 'Vidrios', a: 100, b: 98},
							      { y: 'Frenos y Embrague', a: 65,  b: 75},
							      { y: 'Correas', a: 50,  b: 50},
							      { y: 'Radiador', a: 75,  b: 60},
							      { y: 'Equipo de Seguridad', a: 80,  b: 65},
							      { y: 'Bornes', a: 90,  b: 70}, 
							      { y: 'Luces (Edo Fisico)', a: 75,  b: 60},
							      { y: 'Luces de Cruce', a: 80,  b: 65},
							      { y: 'Luces de Emergencia', a: 90,  b: 70}
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