@extends('app')
@section('content')
<div class="container">
	<div class="col-md-offset-4 col-md-4">
			<div class=" panel-danger">
				<div class="panel-heading">Cambiar Contraseña</div>
					<div class="well">
					<form action="Registrar.update">
						<div class="input-field">
						<i class="fa fa-key prefix"></i>
						<input id="icon_key" name="password_actual" type="text" class="validate">
						<label for="icon_key">Contraseña Actual</label>
						</div>
						<div class="input-field">
						<i class="fa fa-key prefix"></i>
						<input id="icon_key" name="password" type="text" class="validate">
						<label for="icon_key">Nueva Contraseña</label>
						</div>
						<div class="input-field">
						<i class="fa fa-key prefix"></i>
						<input id="icon_key" name="password_confirmation" type="text" class="validate">
						<label for="icon_key">Confirmacion de Contraseña</label>
						</div>
						<button class="btn btn-success" type="submit">Activar Cuenta</button>
					</form>
					</div>
		</div>
	</div>
</div>
@endsection