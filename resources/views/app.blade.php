<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transbarca</title>
	{!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}
<!--
{!! Html::style('materialize/css/materialize.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/roboto.min.css') !!}
{!! Html::style('bower_components/bootstrap-material-design/dist/css/material-fullpalette.min.css') !!}

-->
    {!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}

{!! Html::style('css/style.css') !!}

	<link rel="stylesheet"  href="{!! url('css/app.css') !!}"/>
	

	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,900' rel='stylesheet' type='text/css'>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar colornav text-blanco" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<span class="navbar-brand">Transbarca | <small>Sistema de Control y Gestion De Fallas</small></span>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ url('/home') }}" class="text-blanco">Inicio</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						
						<!--
						<li><a href="{{ url('/auth/register') }}">Registrarse</a></li>
						-->
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle text-blanco" data-toggle="dropdown" role="button" aria-expanded="false">Bienvenido {{ Auth::user()->persona->nombrecompleto }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('changepassword') }}">Cambiar Contraseña</a></li>
								<li><a href="{{ url('/auth/logout') }}">Cerrar Sesion</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
<div class="col-md-12">
	<div class="col-md-3">
		@yield('sidebar')
	</div>	

	<div class="col-md-9">
		@yield('content')
	</div>
</div>
	<!-- Scripts -->


	
	{!! Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') !!}
	{!! Html::script('js/sidebar.js') !!}
	
	{!! Html::script('materialize/js/materialize.min.js') !!}
	


</body>
</html>
