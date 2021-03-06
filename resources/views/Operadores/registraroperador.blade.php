@extends('app') 

@include('tools.sidebar')



@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-danger">
					<div class="panel-heading">Registro De Operador</div>
					<div class="panel-body">
						@include('tools.errors')
						{!! Form::open(['route'=>'operadores.store','method'=>'POST']) !!}
							@include('Personas.create')

							<div class="row">
								<div class="col-md-6">
									<div class="form-group row usuario">
									      <div class="col-md-5"><strong>Usuario</strong></div>
									       <div class="col-md-7">    
									          {!! Form::text('usuario',null,['class'=>'form-control']) !!}
									      </div>
								    </div>
								    
							  		</div>
						  	</div>

							@include('tools.botones-registrar')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function(){
		
    
    
    $(".usuario").toggle();

	   $('#rol').on('change', function() {
	   	 if(this.value == 2){
	   $(".usuario").toggle();	   
	   }
	   else{
	   	$(".usuario").toggle();	   
	   };
	   	    
    
});
});</script>
@endsection

