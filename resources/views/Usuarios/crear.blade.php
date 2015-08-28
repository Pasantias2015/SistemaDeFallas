@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Registra Usuario</div>
		<div class="panel-body">
		 @include('tools.errors')

            	<div class="col-md-12">
                        <div class="form-group">
                              <span>Persona: </span>
                              <select name="persona_id" id="persona_id" class="form-control">
                                    <option default>Seleccione</option>
                                    @foreach($personas as $persona)
                                    <option value="{{ $persona->id }}">{{ $persona->pnombre." - ".$persona->papellido." - ".$persona->profesion->descripcion}}</option>    
                                    @endforeach
                              </select>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group row">
                              <div class="col-md-5"><strong>Coordinacion</strong>  </div>
                               <div class="col-md-7">    
                                  <select name="rol" id="rol" class="form-control">
                                  @foreach($coords as $coord)
                                    <option value="{{ $coord->id }}">{{ $coord->nombre }}</option>            
                                  @endforeach
                                  </select>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <div class="col-md-5"><strong>Cargo</strong>  </div>
                               <div class="col-md-7">    
                                  <select name="rol" id="rol" class="form-control">
                                  @foreach($roles as $rol)
                                    <option value="{{ $rol->id }}">{{ $rol->descripcion }}</option>            
                                  @endforeach
                                  </select>
                              </div>
                          </div>
                        </div>
                        </div>
            		<div class="form-group">
                                <span>Pregunta Secreta: </span>
                                {!! Form::text('preguntas',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                                <span>Respuesta Secreta: </span>
                                {!! Form::text('respuestas',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
				        <span>Usuario: </span>
				        {!! Form::text('usuario',null,['class'=>'form-control']) !!}
				</div>
                        <div class="form-group">
                        <span>Contraseña: </span>
                            <div class="form-group">
                              <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                              <span class="help-block">Minimo 6 caracteres</span>
                            </div>
                        </div>
			@include('tools.botones-registrar')
            	</div>
		</div>
	</div>
</div>
@endsection