@extends('app') 

@include('tools.sidebar')



@section('content')
	
	{!! Form::open() !!}
	<div class=" col-md-12">
		<header ><h1>Registrar Falla</h1></header>
		<!--'route'=> 'unidad.create -->
		<div class="row well">
		<h4 class="floating-label">Datos Basico</h4>
		<div class="form-group">
   			<div class="col-md-4">
   				<div class="input-group">
	                <span class="input-group-addon " id="basic-addon1">Lugar</span>
                    
                    <select class="selectpicker show-tick form-control" >
					    <option>Cabudare</option>
					    <option>Lara</option>
					    <option>Tamaca</option>
					</select>

				</div>
   			</div>
   			<div class="col-md-4 ">
   				<div class="form-group">
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">Fecha</span>
                    <input type="date" class="floating-label fom-control" >
				</div>
			</div>
   			</div>
   			<div class="col-md-4">
   				<div class="form-group">
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">Hora</span>
                    <input type="text" class="form-control" >
				</div>
			</div>
   			</div>
  		</div>
		</div>

		<div class="row well">
			<h4 class="floating-label">Datos Del Operador</h4>
			<div class="col-md-6">
				<div class="form-group">
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">Cedula De identidad</span>
  					
                    <input type="text" class="col-md-10 form-control" >
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">Primer Nombre</span>
  					
                    <input type="text" class="col-md-10 form-control" >
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1" >Primer Apellido</span>
  					
                    <input type="text" class="col-md-10 form-control" >
				</div>
			</div>
			
		</div>
		<div class="col-md-6">
		<div class="form-group">
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">Horario Laboral</span>
  					
                    <input type="text" class="col-md-6	 form-control" >
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">Segundo Nombre</span>
  					
                    <input type="text" class="col-md-10 form-control" >
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1" >Segundo Apellido</span>
  					
                    <input type="text" class="col-md-10 form-control" >
				</div>
			</div>
		</div>
	
	</div>
<!-- #####################################   Datos De La Unidad     ############################### -->
	<div class="row well">
		<h4 class="floating-label">Datos De La Unidad (Material Rodante)</h4>
		<div class="form-group  col-md-6 ">
				<div class="input-group">
  					<span class="input-group-addon floating-label" id="basic-addon1" >Unidad (Material Rodante)</span>
  					
                    <input type="text" class="col-md-4 form-control" >
				</div>
				</br>
				<div class="input-group">	
				<span class="input-group-addon floating-label" id="basic-addon1" >Seleccione El Tipo De Falla</span>
				<select class="selectpicker show-tick form-control"  >
					    <option>Neumatica</option>
					    <option>Mecanica</option>
					    <option>Electrica</option>
					</select>

				</div>
		</div>	
		<div class="form-group  col-md-6 ">
				<div class="input-group">
  					<span class="input-group-addon floating-label" id="basic-addon1" >Kiometraje</span>
  					
                    <input type="text" class="col-md-4 form-control" >
				</div>
				</br>
				<div class="input-group">	
				<span class="input-group-addon floating-label" id="basic-addon1" >Seleccione La Falla</span>
				<select class="selectpicker show-tick form-control"  >
					    <option>Caucho</option>
					    <option>rin</option>
					    <option>Puerta</option>
					</select>

				</div>
		</div>	
		<div class="row container">	
			<div class="col-md-9">	
			<textarea class="form-control floating-label" rows="3" placeholder="Observacion"></textarea>
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