@extends('app')

@include('tools.sidebar')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-9 col-md-offset-1">
			<div class="panel panel-danger">
				<div class="panel-heading">Registrar Persona</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Error</strong> Has introducido algun dato incorrecto verifica.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal com-md-12" role="form" method="POST" action="{{ url('/auth/register') }}">
						<div class="row">
							<h3 class="title">
							Datos Personales
							</h3>
							<div class="progress">
						      <div class="indeterminate"></div>
						    </div>
							</div>
						<div class="col-md-6">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
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
							
							<div class="input-field col-md-12">
				                
			                    
			                    <select class="selectpicker show-tick floating-label form-control icon_prefix"  placeholder="DEPARTAMENTO" style="height: 43px">
								
								    <option disabled>Seleccione</option>
								    <option>Taller</option>
								    <option>Presidencia</option>
								    <option>Operaciones</option>
								    <option>Telecomunicacion</option>

								</select>
							</div>
							</div>
							<div class="row col-md-12" style="padding-left: 30px">
								<div class="input-field">
         				 	  <i class="mdi-maps-place prefix"></i>
				          	  <textarea id="textarea1" class="materialize-textarea"></textarea>
					          <label for="textarea1">Direccion</label>
					        </div>
							</div>
							<div class="col-md-12" style="padding-left: 0px">
							<h3 class="title" style="margin-top: 0px">Datos Laborales</h3>
							<div class="progress">
						      <div class="indeterminate"></div>
						    </div>
							</div>
							<div class="col-md-6"style="padding-left: 0px">
		<div class="input-field col-md-12">
				                
			                    
			                    <select class="selectpicker show-tick floating-label form-control icon_prefix"  placeholder="Cargo" style="height: 43px">
								
								    <option disabled>Seleccione</option>
								    <option>Taller</option>
								    <option>Presidencia</option>
								    <option>Operaciones</option>
								    <option>Telecomunicacion</option>

								</select>
							</div>
			                    
							</div>
							<div class="col-md-6">
								<div class="input-field">
						          <i class="mdi-communication-phone prefix"></i>
						          <input id="icon_telephone" type="tel" class="validate">
						          <label for="icon_telephone">Telefono</label>
						        </div>
								<div class="form-group">
									</br>
								<input type="text" class="form-control floating-label colornegro" placeholder="Semana" name="name" value="5-10">
							
								</div>
							</div>	
							<div class="col-md-12">
								<h3 class="title">Datos De usuario</h3>	
								<div class="col-md-12" style="padding-left: 0px">
									<div class="col-md-6">
										<div class="input-field">
								          <i class="fa fa-user prefix"></i>
								          <input id="icon_username" type="tel" class="validate">
								          <label for="icon_username">Nombre de Usuario</label>
								        </div>

								        <div class="input-field">
								          <i class="fa fa-key prefix"></i>
								          <input id="icon_key" type="password" class="validate">
								          <label for="icon_key">Contraseña</label>
								        </div>

								        <div class="input-field">
								          <i class="fa fa-key prefix"></i>
								          <input id="icon_keyc" type="password" class="validate">
								          <label for="icon_keyc">Confirmar contraseña</label>
								        </div>
								</div>
									<div class="col-md-6">
									<div class="input-field"><h5 class="title">Opciones de recuperacion</h5></br></div>
									
										<div class="input-field">
								          <i class="fa fa-key prefix"></i>
								          <input id="icon_ps" type="text" class="validate">
								          <label for="icon_ps">Pregunta de seguridad</label>
								        </div>

								        <div class="input-field">
								          <i class="fa fa-key prefix"></i>
								          <input id="icon_rs" type="text" class="validate">
								          <label for="icon_rs">Respuesta de seguridad</label>
								        </div>
	
									</div>
								</div>
							</div>
						</div>
						

						

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Guardar
								</button>
								<button type="submit" class="btn btn-danger">
									Cancelar
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
