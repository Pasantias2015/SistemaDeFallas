@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
      @include('Mantenimiento_Semanal.semanales')
</div>
@endsection
