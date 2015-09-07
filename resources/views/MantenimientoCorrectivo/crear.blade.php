@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
  <div class="col-md-12">
    <div class="panel panel-danger">
      <div class="panel-heading">Reporte de Falla </div>
      <div class="panel-body">
       @include('tools.errors')
        {!! Form::open(['route'=>'reparaciones.store','method'=>'POST']) !!}

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-danger">
              <div class="panel-heading">Datos del Supervisor</div>
              <div class="panel-body">
                <div class="col-md-6">
                  <input type="text" disabled value="{{ Auth::user()->persona->nombrecompleto }}" class="form-control">
                </div>
                <div class="col-md-6">
                  <input type="text" disabled value="{{ Auth::user()->persona->cedula }}" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-danger">
              <div class="panel-heading">Datos del Operador</div>
              <div class="panel-body">
                <div class="col-md-6">
                  <div class="form-group">
                      <span>Unidad: </span>
                      <select name="unidad" id="unidad" class="form-control">
                          <option default>Seleccione</option>
                              @foreach($unidades as $unidad)
                              <option value="{{ $unidad->id }}">{{ $unidad->nidentificacion }}</option>    
                              @endforeach
                      </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <span>Operador: </span>
                  <select name="serviciounidadoperador_id" id="serviciounidadoperador_id" class="form-control">
                        <option default>Seleccione</option>
                    </select>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-danger">
              <div class="panel-heading">Datos Básicos</div>
              <div class="panel-body">
                <div class="col-md-6">
                  <span>Lugar: </span>
                  {!! Form::text('lugar',null,['class'=>'form-control']) !!}
                </div>
                <div class="col-md-3">
                  <span>Hora: </span>
                  {!! Form::text('hora',null,['class'=>'form-control']) !!}
                </div>
                <div class="col-md-3">
                  <span>Fecha: </span>
                  <input  type="date" name="fecha" class="form-control" max="<?php echo date("Y-m-d");?>">
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
        @include('tools.botones-registrar')
        {!! Form::close() !!}
</div>
<script type="text/javascript">

$(document).ready(function(){
        $('#unidad').on('change',function(e){
        
            var marca_id = e.target.value;
            $.get('/ajax-operador?unidad='+unidad,function(data){
                //$('#modelo').empty();
                $.each(data,function(index,operadorObj){
                    $('#operador').append('<option value="'+operadorObj.id+'">'+operadorObj.operador_id+'</option>');
                });
            });
            console.log(e);
        });

    });</script>

@endsection