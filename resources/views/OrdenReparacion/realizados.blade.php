@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
	<div class="panel panel-danger">
        <div class="panel-heading">Orden de Reparación Realizadas</div>
        <div class="panel-body">
            @include('tools.errors')
            {!! Form::open() !!}
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Trabajo a Realizar</th>
                            <th>Trabajo Realizado</th>
                            <th>Acción</th>
                        </tr>
                        @foreach($ordenes as $orden)
                        <tr>                                
                            <td>{{ $orden->id }}</td>
                            <td>{{ $orden->fecha }}</td>
                            <td>{{ $orden->descripcionuno }}</td>
                            <td>{{ $orden->descripciondos }}</td>
                            <td><a href="" class="btn btn-info">Ver</a></td>                               
                        </tr>
                        @endforeach
                    </table>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
<input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
</div>
@endsection
