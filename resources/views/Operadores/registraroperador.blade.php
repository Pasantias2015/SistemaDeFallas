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
									<div class="form-group row operador">
									      <div class="col-md-5"><strong>Telefono Laboral</strong></div>
									       <div class="col-md-7">    
									          {!! Form::text('telefono_laboral',null,['class'=>'form-control']) !!}
									      </div>
								    </div>
								    <div class="form-group row usuario">
									      <div class="col-md-5"><strong>Usuario</strong></div>
									       <div class="col-md-7">    
									          {!! Form::text('usuario',null,['class'=>'form-control']) !!}
									      </div>
								    </div>
								    
							  		</div>
						  	</div>

							<div class="col-md-12">
								<div class="col-md-offset-4 col-md-8 form-group">
									<button type="submit" class="btn btn-success">Crear</button>
									<button type="button" class="btn btn-danger">Cancelar</button>
								</div>
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection