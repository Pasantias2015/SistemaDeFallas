@extends('app') 

@include('tools.sidebar')



@section('content')
	
	{!! Form::open() !!}
	<div class="col-md-offset-1 col-md-10 ">
		<header ><h1> Registrar puesto </h1></header>
	<!--'route'=> 'unidad.create -->
		<div class="col-md-12 well">
				
				
				<div class="col-md-3">	
					<label for="">Seleccionar Patio</label>			
					<label for="">Seleccionar Patio</label>			
					<label for="">Seleccionar Patio</label>			
				</div>	

				<div class="col-md-6">
			

				<select name="" id="" class="opciones">
					<option value="">1</option>
					<option value="">1</option>
					<option value="">2</option>
					<option value="">3</option>
				</select>
				</div>

		</div>
	</div>
	
	
	
	


	{!! Form::close() !!}
	
	

@endsection