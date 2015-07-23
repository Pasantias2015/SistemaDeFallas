@extends('app')
@include('tools.sidebar')
@section('content')
<div class="container">
		<div class="col-md-12">
			<div class="panel panel-danger">
				<div class="panel-heading">Reporte de incidencias de la unidad: Y-001</div>

				<table class="table table-bordered table-striped">
					<tr>
						<th>Servicio</th>
						<th>Fecha</th>
						<th>Incidencia</th>
						<th>Categoria Falla</th>
						<th>Accion</th>

					</tr>
					<tr>
						<td> Linea 1 </td>
						<td>01 marzo 2015</td>
						<td> Daño De Bujias </td>
						<td> Falla Menor </td>
						<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Ver Detalle</button></td>
					</tr>
					<tr>
						<td> Linea 1 </td>
						<td>15 marzo 2015</td>
						<td> Recalentamiento </td>
						<td> Falla Mayor </td>
						<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Ver Detalle</button></td>
					</tr>
					<tr>
						<td> Linea 1 </td>
						<td>27 marzo 2015</td>
						<td> Manguera De Frenos Rota </td>
						<td> Falla Mayor </td>
						<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Ver Detalle</button></td>	
					</tr>
					
				</table>

				
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content panel panel-danger">
        <div class="modal-header panel-heading">
          <button type="button" class="close" >&times;</button>
            Detalle De Incidencia: Codigo-001
            </div>
        <div class="modal-body">
        <div class="col-md-6">
        	Servicio<input type="text" value="Linea 1" class="form-control" disabled>
        	 Hora<input type="text" value="12:00 PM" class="form-control" disabled>
        	 Supervisor<input type="text" value="10458746 Ismaldo fuentes" class="form-control" disabled>
        </div>
        <div class="col-md-6">
        	Lugar<input type="text" value="Parque Del Este" class="form-control" disabled>
         
          Operador<input type="text" value="10458746 Pedro Camacho" class="form-control" disabled>
          
          Diagnostico<input type="textarea" value="Daño De  Bujias Se colocaron mal" class="form-control" disabled	>
        </div>
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

			</div>
		</div>
</div>



@endsection