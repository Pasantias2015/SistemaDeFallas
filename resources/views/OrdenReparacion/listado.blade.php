@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
	<div class="panel panel-danger">
        <div class="panel-heading">Mantenimientos Orden de Reparación Pendientes</div>
        <div class="panel-body">
            @include('tools.errors')
            {!! Form::open() !!}
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Trabajo a Realizar</th>
                            <th>Acción</th>
                        </tr>
                        @foreach($ordenes as $orden)
                        <tr>                                
                            <td>{{ $orden->id }}</td>
                            <td>{{ $orden->fecha }}</td>
                            <td>{{ $orden->descripcionuno }}</td>
                            <td><a href="{{ route('reparaciones.edit',$orden) }}" class="btn btn-info">Ejecutar</a></td>                               
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
