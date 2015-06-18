@extends('app') 

@include('tools.sidebar')



@section('content')
	
	{!! Form::open() !!}
	<div class=" col-md-12">
		<header ><h1>Registrar categoria de falla</h1></header>
		<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">Descripcion de la categoria </span>
  					
                    <input type="text" class="col-md-10 form-control" >
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