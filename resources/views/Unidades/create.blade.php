@extends('app') 
@section('content')
	
	{!! Form::open() !!}
	<div class="container">
		<header style="text-align:center"><h1>Registrar Unidades</h1></header>
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


				<div class="form-group">
					<label class="col-md-6">Fecha De Fabricacion:</label>
					<div class="col-md-6" style="padding-right: 0px">
						<input type="date" name="bday" class="col-md-6 form-control" style=" margin-bottom: 15px">
					</div>
					
					
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


			</div>
			
		</div>
	
	
	<div class="row">
		<div class="col-md-offset-5 col-md-5 form-group">
		 {!! Form::button('Guardar',['type' => 'submit', 'class' => 'btn btn-primary']) !!}
		 {!! Form::button('Cancelar',['type' => 'submit', 'class' => 'btn btn-danger']) !!}
		</div>
	</div>
	</div>
	{!! Form::close() !!}
	
	

@endsection