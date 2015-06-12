@extends('app') 

@include('tools.sidebar')



@section('content')
	
	{!! Form::open() !!}
	<div class="col-md-offset-1 col-md-10">
		<header ><h1>Registrar Unidades</h1></header>
	<!--'route'=> 'unidad.create -->
	<div class="row well">
		
			<div class=" col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Serial De La Unidad">	
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Numero De Identificacion ejemplo: YM-124">	
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Numero De VIN">	
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Serial Del Motor">	
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Potencia Del Motor">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Kilometraje">
						</div>
					</div>
				</div>
				
			</div>
			<div class=" col-md-6">
			<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Cantidad De Personas">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Peso Maximo ">
						</div>
			</div>
			</br>
			<div class="form-group">
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">Fecha De Fabricacion</span>
                    <input type="date" class="form-control" >
				</div>
			</div>

				</br>
				<div class="input-group">
	                <span class="input-group-addon " id="basic-addon1">Fabricante</span>
                    
                    <select class="selectpicker show-tick" >
					    <option>Yuton</option>
					</select>

				</div>
				</br>

			<div class="input-group">

  					<span class="input-group-addon" id="basic-addon1">Tama;o</span>
                    <select class="selectpicker col-md-offset-1 col-md-3 show-tick">
					    <option>12 Metro</option>
					    <option>8 Metros</option>					   
				 	</select>	

				 	<span class="input-group-addon col-md-offset-1 col-md-2" id="basic-addon1">Combustible</span>
					<select class="selectpicker col-md-3" style="float:right">
					    <option>Diesel</option>
					    <option>Gasolina</option>					   
				 	</select> 
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