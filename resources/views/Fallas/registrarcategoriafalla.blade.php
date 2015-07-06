@extends('app') 

@include('tools.sidebar')



@section('content')
	
	{!! Form::open() !!}
	<div class=" col-md-12">
		<header ><h1>Registrar categoria de falla</h1></header>
		<div class="well col-md-offset-1 col-md-8">
			<div class="input-group">
	  			<input type="text"  placeholder="Descripcion de la categoria" class="col-md-12" >
				<table class="table table-bordered">
        <thead>
          <tr>
              <th data-field="id">Categorias Registradas</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Falla Mayor</td>
          </tr>
          <tr>
            <td>Falla Regular</td>
          </tr>
          <tr>
            <td>Falla Menor</td>
          </tr>
        </tbody>
      </table>
			</div>
			
			</div>
		</div>
	<div class="row">	
		<div class="col-md-offset-4 col-md-4 form-group">
			<button type="button" class="btn btn-success">Guardar</button>
			<button type="button" class="btn btn-danger">Cancelar</button>	
		</div>
	</div>


	


	{!! Form::close() !!}
	
	
	

@endsection