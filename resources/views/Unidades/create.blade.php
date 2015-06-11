@extends('app') 

@include('tools.sidebar')



@section('content')
	
	{!! Form::open() !!}
	<div class="col-md-offset-1 col-md-7">
		<header ><h1>Registrar Unidades</h1></header>
	<!--'route'=> 'unidad.create -->
	<div class="row">
		
			<div class=" col-md-12 well">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Serial De La Unidad">	
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Numero De VIN">	
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Serial Del Motor">	
				</div>

				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">Fecha De Fabricacion</span>
                    <input type="date" class="form-control" >
				</div>
				</br>
					

				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">Tama;o</span>
                    <select class="selectpicker col-md-offset-1 col-md-3 show-tick">
					    <option>12 Metro</option>
					    <option>8 Metros</option>					   
				 	</select>	

				 	<span class="input-group-addon col-md-offset-1 col-md-3" id="basic-addon1">Combustible</span>
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