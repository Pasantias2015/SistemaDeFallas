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
                        <span>Código: </span>
                        {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <span>Descripción: </span>
                        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                    </div>
                    @include('tools.botones-registrar')
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Código</th>                     
                            <th>Descripción</th>                     
                            <th>Acción</th>
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