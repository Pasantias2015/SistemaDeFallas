@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
		<div class="panel panel-danger">
			<div class="panel-heading">Reporte de Mantenimiento Correctivo - Sistemas </div>

<div class="panel-body">
			<div class="col-md-8 col-md-offset-4"><h4>Desde:{{$inicio}} - Hasta {{$fin}}</h4></div>
      <div id="graficos" class="col-md-8" style=" height:300px"></div>
      <div class="col-md-4">
        <br/>
        <br/>
        <br/>
        <h4><strong>Sistema de Propulsores. </strong>Total: {{$prop}}</h4>
        <h4><strong>Sistema Neum&aacutetico. </strong>Total: {{$neu}}</h4>
        <h4><strong>Sistema de Carroceria. </strong>Total: {{$car}}</h4>
        <h4><strong>Sistema El&eacutectrico. </strong>Total: {{$elec}}</h4>
        <h4><strong>Sistema de Direcci&otilden. </strong>Total: {{$dir}}</h4>
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
                                {label: "Propulsores", value: <?php echo $prop ?>},
                                {label: "Neumatico", value: <?php echo $neu ?>},
                                {label: "Carroceria", value: <?php echo $car ?>},
                                {label: "Electrico", value: <?php echo $elec ?>},
                                {label: "Direccion", value: <?php echo $dir ?>}
                              ]
                            });
                        });

  </script>
@endsection