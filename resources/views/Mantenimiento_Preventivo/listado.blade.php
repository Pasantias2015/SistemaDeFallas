@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
      <div class="panel panel-danger">
            <div class="panel-heading">Mantenimientos Preventivos Realizados</div>
            <div class="panel-body">
             @include('tools.errors')
            {!! Form::open() !!}
                  @include('Mantenimiento_Preventivo.preventivos')
            {!! Form::close() !!}
            </div>
      </div>
</div>
@endsection