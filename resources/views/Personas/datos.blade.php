<div class="row">
  
  <div class=" col-md-6">
    <div class="form-group contenedor-foto">
      <div class="fileinput  fileinput-new" data-provides="fileinput">
        <div class="foto-perfil fileinput-preview thumbnail " data-trigger="fileinput" ></div>
          <div class="custom-input-file btn btn-info form-control">
            <input type="file" src="/images/perfil.jpg" name="foto" size="1" class="input-file">
            Subir archivo 
          </div>
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <h4>Datos Basicos</h4>
    <!-- cedula -->
    <div class="form-group row">
        <div class="col-md-12 "><span>Cedula De identidad</span></div>
        <div class="col-md-3 ">  
          <select name="letracedula" id="letracedula" class="form-control">
            <option  value="V-">V</option>              
            <option value="E-">E</option>
          </select>
        </div>

      <div class="col-md-9 spl">
      <input type="text"  name="cedula" onkeypress='return event.charCode >= 48 && event.charCode <= 57'class="form-control"></input>
      </div>

    </div>
      <!--     rif -->
    <div class="form-group row">
        <div class="col-md-12 "><span>Numero De Registro Fiscal</span></div>
        <div class="col-md-3 ">  
          <select name="letrarif" id="letrarif" class="form-control">
            <option  value="V-">J</option>              
            <option value="E-">G</option>
            <option value="E-">V</option>
          </select>
        </div>

        <div class="col-md-9 spl">
          <input type="text"  name="rif" onkeypress='return event.charCode >= 48 && event.charCode <= 57'class="form-control"></input>
        </div>

      </div>
       <!-- fecha de nacimiento -->
       <div class="form-group row">
           <div class="col-md-6"><span>Fecha De Nacimiento</span>  </div> 
           <div class="col-md-6"><input type="date" class="form-control" name="fnacimiento" min="01-01-1915" max="01-01-2000"></div>  
       </div>

      <!-- sexo -->
     <div class="form-group row">
         <div class="col-md-5"><span>Sexo</span></div> 
          <div class="col-md-7">
              <select name="sexo" id="sexo" class="form-control">
             <option  value="Masculino">Masculino</option>              
             <option value="Femenino">Femenino</option>
              <option value="Otro">Otro</option>
            </select>
          </div>  
      </div>   
  </div>

</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <div class="col-md-5"><span>Primer Nombre</span>  </div>
       <div class="col-md-7">    
          <input type="text" name="pnombre" class="form-control" onkeypress="return soloLetras(event)">
       </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Primer Apellido</span>  </div>
       <div class="col-md-7">    
          <input type="text" name="papellido" class="form-control" onkeypress="return soloLetras(event)">
       </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Estado Civil</span>  </div>
       <div class="col-md-7">    
          <select name="estadocivil" id="estadocivil" class="form-control">
            <option value="soltero(a)">soltero(a)</option>
            <option value="casado(a)">casado(a)</option>
            <option value="divorciado(a)">divorciado(a)</option>
            <option value="viudo(a)">viudo(a)</option>
          </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Numero De Hijos</span>  </div>
       <div class="col-md-7">    
          {!! Form::text('correo-electronico',null,['class'=>'form-control']) !!}
       </div>
    </div>
    
    <div class="form-group row">
      <div class="col-md-5"><span>Profesion</span>  </div>
       <div class="col-md-7">    
          <select name="profesion_id" id="profesion_id" class="form-control">
          @foreach($profesiones as $profesion)
            <option value="{{ $profesion->id}}">{{ $profesion->descripcion }}</option>
          @endforeach
            </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Telf. Movil</span>  </div>
       <div class="col-md-7">    
          {!! Form::text('telefono-mov',null,['class'=>'form-control']) !!}
       </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Estado</span>  </div>
       <div class="col-md-7">    
          <select name="estado" id="estado" class="form-control">
          <option default>Seleccione</option>
            <option value=""></option>          
          </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Municipio</span>  </div>
       <div class="col-md-7">    
          <select name="municipio" id="municipio" class="form-control">
                    <option default>Seleccione</option>
            <option value=""></option>
           </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Coordinaciones</span>  </div>
       <div class="col-md-7">    
          <select name="coordinacion" id="coordinacion" class="form-control">
            <option default>Seleccione</option>
            @foreach($coordinaciones as $coordinacion)
            <option value="{{ $coordinacion->id}}">{{ $coordinacion->nombre }}</option>
            @endforeach
           </select>
      </div>
    </div>


  </div> 
  

  <div class="col-md-6">
    <div class="form-group row">
      <div class="col-md-5"><span>Segundo Nombre</span>  </div>
       <div class="col-md-7">    
          <input type="text" name="snombre" class="form-control" onkeypress="return soloLetras(event)">
       </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Segundo Apellido</span>  </div>
       <div class="col-md-7">    
          <input type="text" name="sapellido" class="form-control" onkeypress="return soloLetras(event)">
       </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Email</span>  </div>
       <div class="col-md-7">    
          {!! Form::text('correo-electronico',null,['class'=>'form-control']) !!}
       </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Nivel De Estudio</span>  </div>
       <div class="col-md-7">    
          <select name="nivel" id="nivel" class="form-control">
            <option value="ninguno">ninguno</option>
            <option value="bachiller">bachiller</option>
            <option value="universitario">universitario</option>
            <option value="viudo(a)">viudo(a)</option>
          </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Telf. Habitacion</span>  </div>
       <div class="col-md-7">    
          {!! Form::text('telefono-hab',null,['class'=>'form-control']) !!}
       </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Pais</span>  </div>
       <div class="col-md-7">    
          <select name="pais" id="pais" class="form-control">
            <option default>Seleccione</option>
            @foreach($paises as $pais)
            <option value="{{$pais->id}}">{{$pais->descripcion}}</option>
            @endforeach          
          </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Ciudad</span>  </div>
       <div class="col-md-7">    
          <select name="ciudad" id="ciudad" class="form-control">
          <option default>Seleccione</option>
           <option value=""></option>
          </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-5"><span>Parroquia</span>  </div>
       <div class="col-md-7">    
          <select name="parroquia_id" id="parroquia" class="form-control">
          <option default>Seleccione</option>
          <option value=""></option>
         </select>
      </div>
    </div>
     <div class="form-group row">
      <div class="col-md-5"><span>Cargo</span>  </div>
       <div class="col-md-7">    
          <select name="cargo_id" id="cargo_id" class="form-control">
          <option default>Seleccione</option>
          </select>
      </div>
    </div>
  </div> 

</div>  
<div class="col-md-12">
	<div class="form-group row">
		<div class="col-md-8 col-md-offset-1"><span>&iquestEsta Persona Tendr&aacute acceso al Sistema?</span></div>   
                                <div class="col-md-3">
                                    <span>Si:</span>{!! Form::radio('acceso', 'Si', false) !!}
                                    <span>No:</span>{!! Form::radio('acceso', 'No', false) !!}
                                </div>
  </div>
  <div class="form-group row">
      <span>Direccion Exacta</span>
          {!! Form::textarea('direccion',null,['class'=>'form-control','rows'=>3]) !!}
  </div>