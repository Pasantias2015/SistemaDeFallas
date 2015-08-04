@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Modelos</div>
        <div class="panel-body">
         @include('tools.errors')
            {!! Form::open(['route'=>'modelos.store','method'=>'POST']) !!}

                <div class="col-md-12">
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
                            <th>Descripcion</th>
                            <th>Accion</th>
                        </tr>
                        @foreach($modelos as $modelo)
                        <tr>                            
                            <td>{{ $modelo->id }}</td>
                            <td>{{ $modelo->descripcion }}</td>
                            <td>
                                <a href="{{ route('modelos.edit',$modelo) }}" class="btn btn-info">Modificar</a>
                            </td>                           
                        </tr>
                        @endforeach
                    </table>
                    {!! $modelos->render() !!}
                </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>
@endsection