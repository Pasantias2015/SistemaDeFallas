@extends('app') 
@include('tools.sidebar')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-danger">
					<div class="panel-heading">Registro de Personas</div>
					<div class="panel-body">
					{{ HTML::image($persona->getProfileImage(), '', array('height' => '50px')) }}
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection
