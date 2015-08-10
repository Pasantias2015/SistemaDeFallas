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
		$('#pais').on('change',function(e){
		
		var pais_id = e.target.value;
		$.get('/ajax-subcat?pais_id='+pais_id,function(data){
			$('#estado').empty();
			$.each(data,function(index,estadoObj){
				$('#estado').append('<option value="'+estadoObj.id+'">'+estadoObj.name+'</option>');
			});
		});
	console.log(e);});
});
	

	</script>
@endsection

