@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-9 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Mantenimiento</div>
        <div class="panel-body">
         @include('tools.errors')
            {!! Form::open(['route'=>'mantenimiento.store','method'=>'POST']) !!}

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
                        @foreach($mantenimientos as $mantenimiento)
                        <tr>                            
                            <td>{{ $mantenimiento->id }}</td>
                            <td>{{ $mantenimiento->nombre }}</td>
                            <td>{{ $mantenimiento->descripcion }}</td>                            
                            <td>
                                <a href="{{ route('mantenimiento.edit',$mantenimiento) }}" class="btn btn-info">Modificar</a>
                            </td>                           
                        </tr>
                        @endforeach
                    </table>
                    {!! $mantenimientos->render() !!}
                </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>
@endsection