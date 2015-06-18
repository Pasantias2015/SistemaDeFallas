@extends('app') 

@include('tools.sidebar')



@section('content')
	
	{!! Form::open() !!}
	<div class="col-md-10 col-md-offset-1">
		
		<div class=""><h3>Registar Servicio</h3></div>
		
		<div class="col-md-8 well">
			
			 <div class="input-group">	
				<span class="input-group-addon floating-label" id="basic-addon1" >Seleccione tipo de servicio</span>
				<select class="selectpicker show-tick form-control"  >
					    <option>Ruta</option>
					    <option>Linea</option>
					    <option>Especial</option>
					</select>

				</div>	
				<div class="input-field ">
					          <i class="fa fa-subway prefix"></i>
					          <input id="icon_prefix" type="text" class="validate">
					          <label for="icon_prefix">Descripcion</label>
				</div>

		</div>

		<div class="row">
			<div class="col-md-offset-5 col-md-5 form-group">
				<button type="button" class="btn btn-success">Guardar</button>
				<button type="button" class="btn btn-danger">Cancelar</button>	
			</div>
		</div>
	</div>

	
	

	{!! Form::close() !!}


@endsection