@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-9 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Modelos</div>
        <div class="panel-body">
         @include('tools.errors')
            {!! Form::open(['route'=>'modelos.store','method'=>'POST']) !!}

                <div class="col-md-12">
                    <div class="form-group">
                        <span>Código del Modelo: </span>
                        {!! Form::text('codigo',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <span>Descripción: </span>
                        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <span>Marca: </span>
                        <select name="marca_id" class="form-control">
                            @foreach($marcas as $marca)
                                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Tipo de Combustible:</span>
                        <select name="combustible" id="" class="form-control">
                          <option>Gas</option>
                          <option>Diesel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <span>Tipo de Transmisión:</span>
                        <select name="transmision" id="" class="form-control">
                          <option>Automatico</option>
                          <option>Sincronico</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <span>Tamaño(Dimensión): </span>
                        {!! Form::text('dimension',null,['class'=>'form-control']) !!}
                    </div>
                    @include('tools.botones-registrar')
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Marca</th>
                            <th>Tipo de Combustible</th>
                            <th>Tipo de Transmision</th>
                            <th>Tamaño</th>                            
                            <th>Acción</th>
                        </tr>
                        @foreach($modelos as $modelo)
                        <tr>                            
                            <td>{{ $modelo->id }}</td>
                            <td>{{ $modelo->codigo }}</td>
                            <td>{{ $modelo->descripcion }}</td>
                            <td>{{ $modelo->marca->nombre }}</td>
                            <td>{{ $modelo->combustible }}</td>
                            <td>{{ $modelo->transmision }}</td>
                            <td>{{ $modelo->dimension }}</td>  
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