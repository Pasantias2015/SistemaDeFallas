@extends('app') 

@include('tools.sidebar')



@section('content')

	
	{!! Form::open(['route'=>'operadores.store']) !!}

	<div class="col-md-10 col-md-offset-1">
		
		<div class=""><h3>Registar Operador</h3></div>
		<div class="title"><h4>Datos Personales</h4></div>
			<div class="col-md-12 well">
				<div class="col-md-6">
							<!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
							
						<div class="input-field ">
					          <i class="mdi-action-picture-in-picture prefix"></i>
					          {!! Form::text('cedula','',['class'=>'validate']) !!}
					          {!! Form::label('cedula','Documento de Identificacion') !!}
					        </div>


					       	<div class="input-field ">
					          <i class="mdi-action-account-circle prefix"></i>
					          {!! Form::text('pnombre','',['class'=>'validate']) !!}
					          {!! Form::label('pnombre','Primer Nombre') !!}
					        </div>

							
							<div class="input-field ">
					          <i class="mdi-action-account-circle prefix"></i>
					          {!! Form::text('papellido','',['class'=>'validate']) !!}
					          {!! Form::label('papellido','Primer Apellido') !!}
					        </div>
							
							<div class="input-field ">
					          <i class="mdi-social-cake prefix"></i>
					          {!! Form::date('fnacimiento','Fecha de nacimiento',['class'=>'validate']) !!}
					          
					        </div>						
				</div>

				<div class="col-md-6">
							
						
							<div class="input-field ">
					          <i class="mdi-action-account-circle prefix"></i>
					          {!! Form::text('snombre','',['class'=>'validate']) !!}
					          {!! Form::label('snombre','Segundo Nombre') !!}
					        </div>							
							<div class="input-field ">
					          <i class="mdi-action-account-circle prefix"></i>
					          {!! Form::text('sapellido','',['class'=>'validate']) !!}
					          {!! Form::label('sapellido','Segundo Apellido') !!}
					        </div>
			 
			                <div class="input-field">
						          <i class="mdi-communication-phone prefix"></i>
						          {!! Form::text('telefono','',['class'=>'validate']) !!}
					          	  {!! Form::label('telofono','Telefono') !!}
						    </div>			
				</div>
				<div class="col-md-12" style="padding-left:0px">
					
							<div class="input-field ">
							<div class="col-md-1">
					          <i class="fa fa-map-marker prefix" ></i>
					    </div>
					    	<div class="col-md-11">
					          {!! Form::textarea('direccion',null,['rows'=>'4','class'=>'validate form-control floating-label', 'placeholder'=>'Direccion De Habitacion']) !!}
					          </div>
					        </div>
				</div>
			</div>

		<div class="title"><h4>Datos Laborales</h4></div>
			<div class="col-md-12 well">
				<div class="col-md-6">
							<!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
							
							<div class="col-md-12" style="padding-left: 0px">
							
								<div class="scenter">
								
								  <select name="sources" id="sources" class="custom-select sources" placeholder="Cargo" style="width: 296px;height: 70px">
								    <option value="ho1">Horario 1</option>
								    <option value="ho2">Horario 2</option>
								    <option value="ho3">Horario 3</option>
								  </select>
								</div>
							
							</div>



					
				</div>

				<div class="col-md-6">
										 
			                <div class="input-field">
						          <i class="mdi-communication-phone prefix"></i>
						          {!! Form::text('telefonolaboral','',['class'=>'validate']) !!}
					          	  {!! Form::label('telofonolaboral','Telefono Laboral') !!}
						    </div>			
				</div>


				<div class="row col-md-12">
					
				</div>
			</div>

	<div class="row">
		<div class="col-md-offset-5 col-md-5 form-group">
			<button type="submit" class="btn btn-success">Guardar</button>
			<button type="submit" class="btn btn-danger">Cancelar</button>	
		</div>
	</div>
	
	</div>





	
	

	{!! Form::close() !!}

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>	
	

@endsection