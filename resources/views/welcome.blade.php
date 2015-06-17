<html>
	<head>
		<title>.:Sistema de gestion de Fallas:.</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
		{!! Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css') !!}
		{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
		{!! Html::style('bower_components/bootstrap-material-design/dist/css/roboto.min.css') !!}
		{!! Html::style('bower_components/bootstrap-material-design/dist/css/material-fullpalette.min.css') !!}
		{!! Html::style('css/style.css') !!}
		{!! Html::style('css/slider.css') !!}
		{!! Html::style('materialize/css/materialize.css') !!}

		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,900' rel='stylesheet' type='text/css'>

	</head>
	<body>
		<div class="navbar-fixed">
		 <nav>
		    <div class="nav-wrapper">
		      <a href="#!" class="brand-logo">Transbarca</a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="#"><i class="fa fa-home left"></i>Inicio</a></li>
		        <li><a href="{{ url('auth/login') }}"><i class="fa fa-user left"></i>Ingresar</a></li>
		      </ul>
		    </div>
		  </nav>
		</div>
		<div class="slider">
			<div class="container-fluyd">
				<!-- Slider Container -->
	<section class="slider-container">
		<ul id="slider" class="slider-wrapper">
			<li class="slide-current">
				<img src="images/1.jpg" alt="Slider Imagen 1">
				<div class="caption">
					<h3 class="caption-title">Diseño web</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
				</div>
			</li>

			<li>
				<img src="images/2.jpg" alt="Slider Imagen 1">
				<div class="caption">
					<h3 class="caption-title">Desarrollo web</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
				</div>
			</li>

			<li>
				<img src="images/3.jpg" alt="Slider Imagen 1">
				<div class="caption">
					<h3 class="caption-title">Javascript</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
				</div>
			</li>

			<li>
				<img src="images/4.jpg" alt="Slider Imagen 1">
				<div class="caption">
					<h3 class="caption-title">Maquetacion</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
				</div>
			</li>
		</ul>

		<!-- Sombras 
		<div class="shadow"></div>
-->
		<!-- Controles -->
		<ul id="slider-controls" class="slider-controls"></ul>
			</div>
		</div>
<!-- Scripts -->


	{!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}
	{!! Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}
	{!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') !!}
	{!! Html::script('js/slider.js') !!}
	
	{!! Html::script('materialize/js/materialize.min.js') !!}
<script>
	$(document).ready(function(){
		$.material.init();

	});
</script>
	</body>
</html>
