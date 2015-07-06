@extends('app')
@include('tools.sidebar')
@section('content')

	<div class="row">
		<div class="col-md-10">
			<div class="panel-danger">
				<div class="panel-heading">Nueva Opcion</div>
				<div class="well">
				<div class="form-group">
					<label for="">Usuario</label>
					<select name="" id=""><option>21295782-Leonardo Loyo</option></select>
				</div>
				<div class="form-group">
					<label for="">Grupo</label>
					<select name="" id="">
							<option>Unidades</option>
							<option>Fallas</option>
							<option>Operadores</option>
							<option>Usuarios</option>
						</optgroup>
					</select>
				</div><div class="form-group">
					<label for="">URL</label>
					<select name="" id="">
							<optgroup label="Unidades">
								<option>Registrar Unidad</option>
								<option>Consulta Unidades</option>
								<option>Asignar Unidades</option>
							</optgroup>
							<optgroup label="Fallas">
								<option>Nueva Falla</option>
								<option>Nuevo Tipo Falla</option>
								<option>Nueva Categoria Falla</option>
							</optgroup>
							<optgroup label="Operadpres"></optgroup>
							<optgroup label="Usuarios"></optgroup>
							<optgroup label="Reportes"></optgroup>
					</select>
				</div>
				<div class="button-group">
					<button class="btn btn-success">Guardar</button>
				</div>
				</div>
				<div class="panel-heading">Listado opciones</div>
				<div class="well">
					<table>
						<tr>
							<th>Usuario</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</table>
				</div>			
			</div>
		</div>
	</div>
@endsection
