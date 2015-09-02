@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-9 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Pieza Neoplan</div>
        <div class="panel-body">
         @include('tools.errors')
            {!! Form::open(['route'=>'piezaneo.store','method'=>'POST']) !!}
                <div class="col-md-12">
                    <div class="form-group">
                        <span>Codigo: </span>
                        {!! Form::text('codigo',null,['class'=>'form-control']) !!}
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
                            <th>Codigo</th>                     
                            <th>Descripcion</th>                     
                            <th>Accion</th>
                        </tr>
                        @foreach($piezaneo as $pieza)
                        <tr>                            
                            <td>{{ $pieza->id }}</td>
                            <td>{{ $pieza->codigo }}</td>  
                            <td>{{ $pieza->descripcion }}</td>  
                           <td>
                                <a href="{{ route('piezaneo.edit',$pieza) }}" class="btn btn-info">Modificar</a>
                            </td>                          
                        </tr>
                        @endforeach
                    </table>
                    {!! $piezaneo->render() !!}
                </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>
@endsection