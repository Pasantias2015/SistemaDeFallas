@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Causas de la Falla </div>
        <div class="panel-body">
         @include('tools.errors')
            {!! Form::open(['route'=>'causas.store','method'=>'POST']) !!}

                <div class="col-md-12">
                    
                        <div class="form-group">
                                <span>Falla: </span>
                                <select name="falla_id" class="form-control">
                                      @foreach($fallas as $falla)
                                      <option value="{{ $falla->id }}">{{ $falla->descripcion }}</option>    
                                      @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                                <span>Causa: </span>
                                {!! Form::text('causafalla',null,['class'=>'form-control']) !!}
                        </div>
                    @include('tools.botones-registrar')
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Causa</th>
                            <th>Falla</th>
                            <th>Acción</th>
                        </tr>
                        @foreach($causas as $causa)
                        <tr>                            
                            <td>{{ $causa->id }}</td>
                            <td>{{ $causa->causafalla }}</td>
                            <td>{{ $causa->falla->descripcion }}</td>
                            <td>
                                <a href="{{ route('causas.edit',$causa) }}" class="btn btn-info">Modificar</a>
                                <a href="" class="btn btn-danger">Eliminar</a>
                            </td>                           
                        </tr>
                        @endforeach
                    </table>
                    {!! $causas->render() !!}
                </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>
@endsection