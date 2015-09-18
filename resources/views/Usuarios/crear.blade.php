@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading">Registra Usuario</div>
		<div class="panel-body">
		 @include('tools.errors')
 {!! Form::open(['route'=>'user.store','method'=>'POST']) !!}

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
                        <span>Contrase&ntildea: </span>
                            <div class="form-group">
                              <input name="password" type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Clave" required>
                              <span class="help-block">Minimo 6 caracteres</span>
                            </div>
                        </div>
			@include('tools.botones-registrar')
{!! Form::close() !!}
            	</div>
		</div>
	</div>
</div>
@endsection