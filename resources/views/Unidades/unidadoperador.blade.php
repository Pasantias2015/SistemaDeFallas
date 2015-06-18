@extends('app') 

@include('tools.sidebar')



@section('content')
	
	{!! Form::open() !!}
	<div class="col-md-offset-1 col-md-10">
		<header ><h1>Asignar unidad</h1></header>
	<!--'route'=> 'unidad.create -->
	<div class="row well">
		
			<div class=" col-md-6">
				<div class="form-group">
					<input type="text" class="form-control floating-label" placeholder="Numero de Unidad: ">	
				</div>
				<div class="form-group">
					<input type="text" class="form-control floating-label" placeholder="Cedula del Operador">	
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Nombre">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Apellido">
						</div>
					</div>
				</br>
				</div>
				<div class="form-group">
				</br>
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">Fecha  de asignacion</span>
                    <input type="date" class="form-control" >
				</div>
				</br>
				<div class="form-group">
					<input type="text" class="form-control " placeholder="Hora de asigancion ">	
				</div>
				<div class="form-group">
					<input type="text" class="form-control " placeholder="Hora de devolucion: ">	
				</div>
				</br>
			<div class="input-group">
	                <span class="input-group-addon " id="basic-addon1">Selecionar servicio</span>
                    
                    <select class="selectpicker show-tick" >
					    <option>Linea</option>
					    <option>Ruta</option>
					</select>

				</div>
				</br>
			<div class="form-group">
					<input type="text" class="form-control" placeholder= "Descripcion breve del recorrido ">	
				</div>

			</div>
			</div>
		</div>
	
	
	<div class="row">
		<div class="col-md-offset-5 col-md-5 form-group">
			<button type="button" class="btn btn-success">Guardar</button>
			<button type="button" class="btn btn-danger">Cancelar</button>	
		</div>
	</div>
	


	{!! Form::close() !!}
	
	

@endsection