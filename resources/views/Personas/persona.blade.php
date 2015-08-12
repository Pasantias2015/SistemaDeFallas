@extends('app') 
@include('tools.sidebar')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-danger">
					<div class="panel-heading">Registro de Personas</div>
					<div class="panel-body">
					<?php
					header('Content-Type: image/jpeg');

					

					?>	
      
     <img src="images/{{$persona->foto}}" width="290" height="290">
     
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection