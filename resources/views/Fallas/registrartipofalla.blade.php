@extends('app') 

@include('tools.sidebar')



@section('content')
	
	{!! Form::open() !!}
	<div class="col-md-offset-1 col-md-10">
		<header ><h1>Registrar tipo falla</h1></header>
	<!--'route'=> 'unidad.create -->
	<div class="row well">
	
				<div class="form-group">
					<input type="text" class="" placeholder= "Descripcion tipo de falla">	
				</br> 
				<!--Aqui es un listado de tipo de fallas-->
				  <table class="table table-bordered">
        <thead>
          <tr>
              <th data-field="id">Lista de tipo falla</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Sistema Neumatico</td>
          </tr>
          <tr>
            <td>Sistema Hidromatico</td>
          </tr>
          <tr>
            <td>Sistema Carroceria</td>
          </tr>
        </tbody>
      </table>
				
			</div>
		
	
	
	<div class="row">
		<div class="col-md-offset-5 col-md-5 form-group">
			<button type="button" class="btn btn-success">Guardar</button>
			<button type="button" class="btn btn-danger">Cancelar</button>	
		</div>
	</div>
	


	{!! Form::close() !!}
	
	

@endsection