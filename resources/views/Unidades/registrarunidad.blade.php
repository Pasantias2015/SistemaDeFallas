@extends('app') 

@include('tools.sidebar')



@section('content')
	
	{!! Form::open(['route'=>'unidades.store']) !!}
	<div class="col-md-offset-1 col-md-10">
		<header ><h1>Registrar Unidades</h1></header>
	<!--'route'=> 'unidad.create -->
	<div class="row well">
		
			<div class=" col-md-6">
				<div class="form-group">
				{!! Form::text('serial','',['class'=>'form-control validate', 'placeholder'=>'Serial de la Unidad']) !!}
				
					
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="vin" placeholder="Numero De VIN">	
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name ="serialmotor" placeholder="Serial Del Motor">	
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-6">
						{!! Form::text('potenciamotor','',['class'=>'form-control validate', 'placeholder'=>'Potencia Del Motor']) !!}
							
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="kilometraje" placeholder="Kilometraje">
						</div>
					</div>
				</div>
				
			</div>
			<div class=" col-md-6">
						<div class="col-md-6">
							<input type="text" class="form-control" name="cantpersona" placeholder="Cantidad De Personas">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="pesomax" placeholder="Peso Maximo ">
						</div>
			
			
			<div class="form-group">
				
  					<span class="col-md-12">Fecha De Fabricacion</span>
                    <input type="date" class="form-control"name='ffabricacion'>
				
			</div>

				</br>

				<div class="form-group">
					<span class="col-md-4 sinpadding">Fabricante</span>
					<select class="col-md-8" name='fabricante'>
					    <option>Yutong</option>
					    <option>Yutong2</option>
					</select>
				</div>
				</br>	
				<div class="form-group">
					<span class="col-md-4 sinpadding"  >Combustible</span>
					<select class="col-md-8" name="combustible">
					    <option>Diesel</option>
					    <option>Gasolina</option>
					</select>
				</div>
				</br>
				
				<div class="form-group">
					<span class="col-md-4 sinpadding" >Tamaño</span>
					<select class="col-md-8" name='longitud'>
					<option>8 metros</option>
					    <option>12 metros</option>
					    
					</select>
				</div>
		</div>
	
	
	<div class="col-md-12">
		<div class="col-md-offset-4 col-md-8 form-group">
			<button type="submit" class="btn btn-success">Guardar</button>
			<button type="button" class="btn btn-danger">Cancelar</button>	
		</div>
	</div>
	


	{!! Form::close() !!}
	
	

@endsection