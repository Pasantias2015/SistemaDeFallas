<div class=" col-md-6">
  <div class="form-group">
      <span>Cedula</span>
          {!! Form::text('cedula',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      <span>Rif</span>
          {!! Form::text('rif',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      <span>Pasaporte</span>
          {!! Form::text('pasaporte',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      <span>Primer Nombre</span>
          {!! Form::text('pnombre',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      <span>Segundo Nombre</span>
          {!! Form::text('snombre',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      <span>Primer Apellido</span>
          {!! Form::text('papellido',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      <span>Segundo Apellido</span>
          {!! Form::text('sapellido',null,['class'=>'form-control']) !!}
  </div>
  
</div>
<div class="col-md-6">
  <div class="form-group">
    <span>Fecha De Nacimiento</span>
      {!! Form::date('fnacimiento','Fecha de nacimiento',['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    <span>Sexo</span>
    <select name="sexo" id="">
      <option>Hombre</option>
      <option>Mujer</option>
    </select>
  </div>
  <div class="form-group">
    <span>Estado Civil</span>
    <select name="estadocivil" id="">
      <option>casado(a)</option>
      <option>divorciado(a)</option>
      <option>soltero(a)</option>
      <option>viudo(a)</option>
    </select>
  </div>
  <div class="form-group">
      <span>Correo-Electronico</span>
          {!! Form::text('sapellido',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
    <span>Pais</span>
    <select name="pais" id="">
      <option>Venezuela</option>
    </select>
  </div>
  <div class="form-group">
    <span>Estado</span>
    <select name="estado" id="">
      <option>Lara</option>
    </select>
  </div>
  <div class="form-group">
    <span>Ciudad</span>
    <select name="ciudad" id="">
      <option>Cabudare</option>
    </select>
  </div>
  <div class="form-group">
      <span>Direccion</span>
          {!! Form::text('direccion',null,['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
      <span>Telefono</span>
          {!! Form::text('telefono',null,['class'=>'form-control']) !!}
  </div>
</div>

