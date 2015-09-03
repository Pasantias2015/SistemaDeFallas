@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-danger">
        <div class="panel-heading">Soluciones para las Fallas</div>
        <div class="panel-body">
         @include('tools.errors')
            {!! Form::open(['route'=>'soluciones.store','method'=>'POST']) !!}

                <div class="col-md-12">
                    
                        <div class="form-group">
                                <span>Causa: </span>
                                <select name="causa_id" class="form-control">
                                      @foreach($causas as $causa)
                                      <option value="{{ $causa->id }}">{{ $causa->causafalla }}</option>    
                                      @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                                <span>Solución: </span>
                                {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                        </div>
                    @include('tools.botones-registrar')
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Solución</th>
                            <th>Causa</th>
                            <th>Acción</th>
                        </tr>
                        @foreach($soluciones as $solucion)
                        <tr>                            
                            <td>{{ $solucion->id }}</td>
                            <td>{{ $solucion->descripcion }}</td>
                            <td>{{ $solucion->causa->causafalla }}</td>
                            <td>
                                <a href="{{ route('soluciones.edit',$solucion) }}" class="btn btn-info">Modificar</a>
                                <a href="" class="btn btn-danger">Eliminar</a>
                            </td>                           
                        </tr>
                        @endforeach
                    </table>
                    {!! $soluciones->render() !!}
                </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>
@endsection