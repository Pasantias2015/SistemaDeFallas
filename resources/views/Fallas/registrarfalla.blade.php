@extends('app') 

@include('tools.sidebar')



@section('content')
	
	{!! Form::open() !!}
	<div class="col-md-offset-1 col-md-10">
		<header ><h1>Nueva falla</h1></header>
	<!--'route'=> 'unidad.create -->
	<div class="row well">
		
			

			     <div class="input-group">
	                <span class="input-group-addon " id="basic-addon1">Selecionar tipo de falla</span>
                    
                    <select class="selectpicker show-tick" >
					    <option>Sistema Neumatico</option>
					    <option>Sistema Hidromatico</option>
					    <option>Sistema Carroceria</option>
					    <option>Sistema Electronico</option>
					    <option>Sistema Proporsor</option>
					</select>

				</div>
				<div class="form-group">
					<input type="text" class="col-md-12" placeholder="Descripcion de falla">	
				</div>	
			     <div class="input-group">
	                <span class="input-group-addon " id="basic-addon1">Selecionar Categoria</span>
                    
                    <select class="selectpicker show-tick" >
					    <option> Falla menor </option>
					    <option> Fallas ragular</option>
					    <option> Falla mayor</option>
					</select>

				</div>
				</br> 
				<!--Aqui es un listado de las fallas registradas por tipo de fallas-->
				  <table class="table table-bordered">
        <thead>
          <tr>
              <th data-field="id">Tipo falla</th>
              <th data-field="name"> Descripcion de la falla</th>
              <th data-field="price"> Categoria de falla</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Sistema Neumatico</td>
            <td>Frenos</td>
            <td>Falla menor</td>
          </tr>
          <tr>
            <td>Sistema Neumatico</td>
            <td>Valvula</td>
            <td>Falla regular</td>
          </tr>
          <tr>
            <td>Sistema Neumatico</td>
            <td>Bujias</td>
            <td>Falla mayor</td>
          </tr>
        </tbody>
      </table>
				
			</div>
		
	
	
	<div class="row">
		<div class="col-md-offset-4 col-md-4 form-group">
			<button type="button" class="btn btn-success">Guardar</button>
			<button type="button" class="btn btn-danger">Cancelar</button>	
		</div>
	</div>
	


	{!! Form::close() !!}
	
	

@endsection