@extends('app')
@include('tools.sidebar')
@section('content')
<div class="row">
	<div class="panel panel-danger">
		<div class="panel-heading">Reporte de Mantenimiento Preventivo - Fluidos Usados - Sustitución</div>
    <div class="panel-body"> 
			 <div class="row"> 
          <div class="col-md-8 col-md-offset-4"><h4>Desde:{{$inicio}} - Hasta {{$fin}}</h4></div>
       </div>
       <div class="row">  
         <div class="col-md-6">
          <div class="panel panel-danger">
            <div class="panel-heading">Reporte de Mantenimiento Preventivo - Fluidos Usados</div>
            <div class="panel-body">
              <div class="row">
                  <div id="graficos" class="col-md-12" style=" height:350px"></div>
              </div>
              </br>
              </br>
              <div class="row">
                <div class="col-md-6">
                  <h4><strong>Lubricante: </strong> Litros: {{$a1}}</h4>
                  <h4><strong>Aceite: </strong> Litros: {{$b1}}</h4>
                  <h4><strong>Combustible: </strong> Litros: {{$c1}}</h4>
                </div>
                <div class="col-md-6">
                  <h4><strong>Engrasante: </strong> Litros: {{$d1}}</h4>
                  <h4><strong>Aceite Diferencial: </strong> Litros: {{$e1}}</h4>
                  <h4><strong>Agua (Baterias): </strong> Litros: {{$f1}}</h4>
                </div>
              </div>  
            </div>
          </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-danger">
            <div class="panel-heading">Reporte de Mantenimiento Preventivo - Sustitución</div>
            <div class="panel-body">
              <div class="row">
                <div id="graficos1" class="col-md-12" style=" height:335px"></div>
              </div>
              <div class="row">
               <div class="col-md-6">
                    <h4><strong>Correas</strong>: {{$a2}}</h4>
                    <h4><strong>Tapas Radiador</strong>: {{$b2}}</h4>
                    <h4><strong>Abrazaderas</strong>: {{$c2}}</h4>
                    <h4><strong>Mangueras</strong>: {{$d2}}</h4>
                    <h4><strong>Luces Internas</strong>: {{$e2}}</h4>
               </div>
               <div class="col-md-6">
                    <h4><strong>Luces Externas</strong>: {{$f2}}</h4>
                    <h4><strong>Luces Cruce</strong>: {{$g2}}</h4>
                    <h4><strong>Luces Emergencia</strong>: {{$h2}}</h4>
                    <h4><strong>Bornes</strong>: {{$i2}}</h4>
               </div>
                
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-md-offset-1">
      @include('Mantenimiento_Preventivo.preventivos')
    </div>
      </div>
    </div>
	</div>
</div>
</div>
<script>
  $(document).ready(function(){
    var grafica = new Morris.Donut({element: 'graficos',
                             resize: true,
                             redraw: true,
                              data: [
                                {label: "Lubricante(Lts)", value: <?php echo $a1 ?>},
                                {label: "Aceite(Lts)", value: <?php echo $b1 ?>},
                                {label: "Combustible(Lts)", value: <?php echo $c1 ?>},
                                {label: "Engrasante(Lts)", value: <?php echo $d1 ?>},
                                {label: "Aceite Diferencial(Lts)", value: <?php echo $e1 ?>},
                                {label: "Agua de Baterias(Lts)", value: <?php echo $f1 ?>}
                              ]
                            });

    var grafica1 = new Morris.Donut({element: 'graficos1',
                             resize: true,
                             redraw: true,
                              data: [
                                {label: "Correas", value: <?php echo $a2 ?>},
                                {label: "Tapas de Radiador", value: <?php echo $b2 ?>},
                                {label: "Abrazaderas", value: <?php echo $c2 ?>},
                                {label: "Mangueras", value: <?php echo $d2 ?>},
                                {label: "Luces Internas", value: <?php echo $e2 ?>},
                                {label: "Luces Externas", value: <?php echo $f2 ?>},
                                {label: "Luces Cruce", value: <?php echo $g2 ?>},
                                {label: "Luces Emergencia", value: <?php echo $h2 ?>},
                                {label: "Bornes", value: <?php echo $i2 ?>}
                              ]
                            });
 });

</script>
@endsection