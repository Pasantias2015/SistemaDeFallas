@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-9 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Tipos de Mantenimiento</div>
        <div class="panel-body">
         @include('tools.errors')
            {!! Form::open(['route'=>'tipoM.store','method'=>'POST']) !!}

                <div class="col-md-12">
                    <div class="form-group">
                        <span>Nombre: </span>
                        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <span>Descripcion: </span>
                        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                    </div>
                    @include('tools.botones-registrar')
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>                            
                            <th>Accion</th>
                        </tr>
                        @foreach($tipomantenimientos as $tipomantenimiento)
                        <tr>                            
                            <td>{{ $tipomantenimiento->id }}</td>
                            <td>{{ $tipomantenimiento->nombre }}</td>
                            <td>{{ $tipomantenimiento->descripcion }}</td>                            
                            <td>
                                <a href="{{ route('tipoM.edit',$tipomantenimiento) }}" class="btn btn-info">Modificar</a>
                            </td>                           
                        </tr>
                        @endforeach
                    </table>
                    {!! $tipomantenimientos->render() !!}
                </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>
@endsection