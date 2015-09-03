@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-9 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Marca</div>
        <div class="panel-body">
         @include('tools.errors')
            {!! Form::open(['route'=>'marcas.store','method'=>'POST']) !!}

                <div class="col-md-12">
                    <div class="form-group">
                        <span>Nombre de la Marca: </span>
                        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
                    </div>
                    @include('tools.botones-registrar')
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>                     
                            <th>Acción</th>
                        </tr>
                        @foreach($marcas as $marca)
                        <tr>                            
                            <td>{{ $marca->id }}</td>
                            <td>{{ $marca->nombre }}</td>  
                            <td>
                                <a href="{{ route('marcas.edit',$marca) }}" class="btn btn-info">Modificar</a>
                            </td>                           
                        </tr>
                        @endforeach
                    </table>
                    {!! $marcas->render() !!}
                </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>
@endsection