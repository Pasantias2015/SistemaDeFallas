@extends('app') 

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-danger">
				<div class="panel-heading">Ingreso Al Sistema</div>
				<div class="panel-body">
					@include('tools.errors')

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Usuario</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="usuario">
							</div>

						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Recordarme	
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-offset-4">
								<button type="submit" class="btn btn-success">Entrar</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">¿Olvidó su contraseña?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
