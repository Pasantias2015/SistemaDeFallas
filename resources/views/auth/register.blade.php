@extends('app')

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
						<div class="row"><h3 class="title">Datos Personales</h3></div>
						<div class="col-md-6">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						<div class="form-group">
							
							<div class="">
								<input type="text" class="form-control floating-label colornegro" placeholder="Documento De identidad" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							
							<div class="">
								<input type="text" class="form-control floating-label colornegro" placeholder="Primer Nombre" name="name" value="{{ old('name') }}">
							</div>
						</div>

						
						<div class="form-group">
							
							<div class="">
								<input type="text" class="form-control floating-label colornegro" placeholder="Primer Apellido" name="name" value="{{ old('name') }}">
							</div>
						</div>
						
						<div class="form-group">
							
							<div class="">
								<input type="text" class="form-control floating-label colornegro" placeholder="Fecha de Nacimiento" name="name" value="{{ old('name') }}">
							</div>
						</div>
						<div class="form-group">
							
							<div class="">
							<textarea class="form-control floating-label" placeholder="Direccion" rows="2"  ></textarea>								
							</div>
						</div>
						</div>
						<div class="col-md-6">
						
							</br>	</br>
						
							<div class="form-group">
							
								<div class="">
									<input type="text" class="form-control floating-label colornegro" placeholder="Segundo Nombre" name="name" value="{{ old('name') }}">
								</div>
							</div>
							<div class="form-group">
							
								<div class="">
									<input type="text" class="form-control floating-label colornegro" placeholder="Segundo Apellido" name="name" value="{{ old('name') }}">
								</div>
							</div>
							</div>
							<div class="input-group">
				                
			                    </br>
			                    <select class="selectpicker show-tick floating-label form-control " placeholder="DEPARTAMENTO" >
								    <option>Taller</option>
								    <option>Presidencia</option>
								    <option>Operaciones</option>
								    <option>Telecomunicacion</option>

								</select>
							</div>
							<div class="col-md-12" style="padding-left: 0px">
							<h3 class="title" style="margin-top: 0px">Datos Laborales</h3>
							<div class="col-md-6"style="padding-left: 0px">
								<div class="input-group">
				                
			                    </br>
			                    <select class="selectpicker show-tick floating-label form-control " placeholder="CARGO" >
								    <option>Taller</option>
								    <option>Presidencia</option>
								    <option>Operaciones</option>
								    <option>Telecomunicacion</option>

								</select>
								</br>
			                    <select class="selectpicker show-tick floating-label form-control " placeholder="Horario" >
								    <option>Diurno</option>
								    <option>Nocturno</option>
								    

								</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
							
								<input type="text" class="form-control floating-label colornegro" placeholder="Telefono" name="name" value="{{ old('name') }}">
							
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
										<div class="form-group">
											<input type="text" class="form-control floating-label colornegro" placeholder="Nombre De usuario" name="name" value="{{ old('name') }}">
									    </div>
										<div class="form-group">
											<input type="password" placeholder="Contraseña" class="form-control floating-label" name="password">
										
										</div>
										<div class="form-group">
											<input type="password" placeholder="Confirmar Contraseña" class="form-control floating-label" name="password">
											
										</div>
									</div>	
									<div class="col-md-6">
										<div class="form-group">
											<input type="password" placeholder="Pregunta de seguridad" class="	form-control floating-label" name="password">
											
										</div>
										<div class="form-group">
											<input type="password" placeholder="Respuesta" class="	form-control floating-label" name="password">
											
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
