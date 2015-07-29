@extends('app')
@include('tools.sidebar')
@section('content')

		<div class="row">
			<div class="panel panel-danger">
				<div class="panel-heading">Graficas con Morris</div>
				<style type="text/css">
				</style>

                        <script>
                        $(document).ready(function(){

                        	var valor = 70;
					    //Diagrama de "Torta"
					    	var grafica = new Morris.Donut({
                            element: 'graficos',
                             resize: true,
                             redraw: true,
                              data: [
                                {label: "Uno", value: valor},
                                {label: "Dos", value: 30},
                                {label: "Tres", value: 20}
                              ]
                            });

					    	  //Diagrama de Barras
							var data = [
							      { y: '2014', a: valor, b: 90},
							      { y: '2015', a: 65,  b: 75},
							      { y: '2016', a: 50,  b: 50},
							      { y: '2017', a: 75,  b: 60},
							      { y: '2018', a: 80,  b: 65},
							      { y: '2019', a: 90,  b: 70},
							      { y: '2020', a: 100, b: 75},
							      { y: '2021', a: 115, b: 75},
							      { y: '2022', a: 120, b: 85},
							      { y: '2023', a: 145, b: 85},
							      { y: '2024', a: 160, b: 95}
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
                  <div id="graficos" class="col-md-6" style="height:250px">

                  </div>

	                  <div id="graficos1" class="col-md-6"style="height:250px">
	                  			
	                  </div>


			</div>
		</div>
@endsection