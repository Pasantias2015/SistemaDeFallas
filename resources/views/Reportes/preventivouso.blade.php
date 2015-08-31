@extends('app')
@include('tools.sidebar')
@section('content')
<div class="panel panel-danger">
  <div class="panel-heading">Reporte de Mantenimiento Preventivo - Fluidos Usados</div>
  @include('tools.errors')
  <div class="panel-body">
      <div class="col-md-11">
        {!! Form::open(['route'=>'rpreventivo.store','method'=>'POST']) !!}
        <div class="col-md-12">
           @include('tools.fecha')
        </div>
        <div class="col-md-2 col-md-offset-5">
                 <button id="registrar"type="submit" class="btn btn-success glyphicon glyphicon-stats">  Generar</button>
        </div>
        {!! Form::close() !!}
        </div>
    <div class="col-md-9 col-md-offset-1">
            @include('Mantenimiento_Preventivo.preventivos')
    </div>
  </div>
</div>
@endsection