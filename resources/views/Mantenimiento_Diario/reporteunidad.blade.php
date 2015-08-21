@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
	<div class="panel panel-danger">
			<div class="panel-heading">Reporte General de Mantenimiento Diario De La Unidad {{$uni->nidentificacion}}</div>
			<div class="panel-body">
				<div class="col-md-10 col-md-offset-1">
				      @include('Mantenimiento_Diario.diarios')
				</div>
			</div>
	</div>
</div>

@endsection