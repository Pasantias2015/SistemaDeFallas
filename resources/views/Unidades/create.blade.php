@extends('app') 
@section('content')
	<div class="container">
		<header><h1>Registrar Unidades</h1></header>
	<!--'route'=> 'unidad.create -->
	{!! Form::open() !!}
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6 well">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Serial De La Unidad">	
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Numero De VIN">	
				</div>
				
				<div class="form-group">
       			 	<label class="col-md-2 control-label ">Tamaño</label>
       				<select class="selectpicker col-md-4 show-tick">
					    <option>12 Metro</option>
					    <option>8 Metros</option>					   
				 	</select>	
					
					<label class="col-md-2 control-label">Combustible</label>
				
					<select class="selectpicker col-md-3" style="float:right">
					    <option>Diesel</option>
					    <option>Gasolina</option>					   
				 	</select> 
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label ">Fecha De Fabricacion</label>
					<input data-provide="datepicker">
					
				</div>

				

				
			</div>
			<div class="col-md-5 well" style="float:right">dsad</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-offset4 col-md-4 form-group">
		 {!! Form::button('Guardar',['type' => 'submit', 'class' => 'btn btn-primary']) !!}
		 {!! Form::button('Cancelar',['type' => 'submit', 'class' => 'btn btn-danger']) !!}
		</div>
	</div>
	{!! Form::close() !!}
	</div>
	

@endsection