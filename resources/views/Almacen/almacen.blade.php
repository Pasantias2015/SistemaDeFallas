@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-10">
	<div class="panel panel-danger">
		<div class="panel-heading">Almacen </div>
		<div class="panel-body">
		 @include('tools.errors')
            {!! Form::open() !!}
<!-- ['route'=>'herramientas.store','method'=>'POST'] -->
            	<div class="col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Pieza </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <span>Codigo: </span>
                                {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <span>Descripcion: </span>
                                {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <span>Cantidad: </span>
                                {!! Form::text('cantidad',null,['class'=>'form-control']) !!}
                            </div>
    					    @include('tools.botones-registrar')
            	        </div>
                    </div>
                </div>
            	<div class="col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">Herramienta </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <span>Codigo: </span>
                                {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <span>Descripcion: </span>
                                {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <span>Cantidad: </span>
                                {!! Form::text('cantidad',null,['class'=>'form-control']) !!}
                            </div>
                            @include('tools.botones-registrar')
                        </div>
                    </div>
                </div>
 			{!! Form::close() !!}
		</div>

	</div>

</div>
@endsection