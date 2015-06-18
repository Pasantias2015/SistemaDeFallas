@extends('app') 

@include('tools.sidebar')



@section('content')
	
	{!! Form::open() !!}
	<div class="col-md-10 col-md-offset-1">
		
		<div class=""><h3>Registar Operador</h3></div>
		<div class="title"><h4>Datos Personales</h4></div>
			<div class="col-md-12 well">
				<div class="col-md-6">
							<!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
							
							<div class="input-field ">
					          <i class="mdi-action-picture-in-picture prefix"></i>
					          <input id="icon_prefix" type="text" class="validate">
					          <label for="icon_prefix">Documento de Identificacion</label>
					        </div>


					       	<div class="input-field ">
					          <i class="mdi-action-account-circle prefix"></i>
					          <input id="icon_prefix" type="text" class="">
					          <label for="icon_prefix">Primer Nombre</label>
					        </div>

							
							<div class="input-field ">
					          <i class="mdi-action-account-circle prefix"></i>
					          <input id="icon_prefix" type="text" class="validate">
					          <label for="icon_prefix">Primer Apellido</label>
					        </div>
							
							<div class="input-field ">
					          <i class="fa fa-calendar-o prefix"></i>
					          <input id="icon_prefix" type="text" class="validate">
					          <label for="icon_prefix">Fecha de Nacimiento</label>
					        </div>						
				</div>

				<div class="col-md-6">
							<div class="input-field ">
					          <i class="mdi-action-picture-in-picture prefix"></i>
					          <input id="icon_prefix" type="text" class="validate">
					          <label for="icon_prefix">Numero De Documento</label>
					        </div>
						
							<div class="input-field ">
					          <i class="mdi-action-account-circle prefix"></i>
					          <input id="icon_prefix" type="text" class="">
					          <label for="icon_prefix">Segundo Nombre</label>
					        </div>
							
							<div class="input-field ">
					          <i class="mdi-action-account-circle prefix"></i>
					          <input id="icon_prefix" type="text" class="">
					          <label for="icon_prefix">Segundo Apellido</label>
					        </div>
			 
			                <div class="input-field">
						          <i class="mdi-communication-phone prefix"></i>
						          <input id="icon_telephone" type="tel" class="validate">
						          <label for="icon_telephone">Telefono</label>
						    </div>			
				</div>
			</div>

		<div class="title"><h4>Datos Laborales</h4></div>
			<div class="col-md-12 well">
				<div class="col-md-6">
							<!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
							
							<div class="col-md-12" style="padding-left: 0px">
							
								<div class="scenter">
								
								  <select name="sources" id="sources" class="custom-select sources" placeholder="Cargo" style="width: 296px;height: 70px">
								    <option value="ho1">Horario 1</option>
								    <option value="ho2">Horario 2</option>
								    <option value="ho3">Horario 3</option>
								  </select>
								</div>
							
							</div>



					
				</div>

				<div class="col-md-6">
										 
			                <div class="input-field">
						          <i class="mdi-communication-phone prefix"></i>
						          <input id="icon_telephone" type="tel" class="validate">
						          <label for="icon_telephone">Telefono Laboral</label>
						    </div>			
				</div>


				<div class="row col-md-12">
					
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