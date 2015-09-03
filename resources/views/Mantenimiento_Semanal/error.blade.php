@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
	<div class="panel panel-danger">
		<div class="panel-heading"><i class="fa fa-exclamation-triangle  fa-2x"></i>.:ERROR:.</div>
		<div class="panel-body">
		 @include('tools.errors')
            <div class="col-md-12">
                <h4> La Hora Introducida es Menor que la Anterior</h4>
                <div class="col-md-8 col-md-offset4">
                	<h3> ¡Verifique!</h3>
                </div>
            </div>
            <div>
            <input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
			</div>
		</div>
	</div>
</div>
@endsection