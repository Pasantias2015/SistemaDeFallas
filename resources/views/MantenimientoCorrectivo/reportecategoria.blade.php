@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
		<div class="panel panel-danger">
			<div class="panel-heading">Reporte de Mantenimiento Correctivo - Categorias </div>

<div class="panel-body">
			<div class="col-md-8 col-md-offset-4"><h4>Desde:{{$inicio}} - Hasta {{$fin}}</h4></div>
      <div id="graficos" class="col-md-8" style=" height:300px"></div>
      <div class="col-md-4">
        <br/>
        <br/>
        <br/>
        <h4><strong>Mayor </strong>Total: {{$a}}</h4>
        <h4><strong>Medio </strong>Total: {{$b}}</h4>
        <h4><strong>Leve </strong>Total: {{$c}}</h4>
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
                                {label: "Mayor ", value: <?php echo $a ?>},
                                {label: "Medio ", value: <?php echo $b ?>},
                                {label: "Leve ", value: <?php echo $c ?>},
                              ]
                            });
                        });

  </script>
@endsection