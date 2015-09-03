@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-8 col-md-offset-1">
      <div class="panel panel-danger">
            <div class="panel-heading">Mantenimientos Preventivos Pendientes</div>
            <div class="panel-body">
             @include('tools.errors')
            {!! Form::open() !!}
                  <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                              <tr>
                                    <th>ID</th>
                                    <th>Identificacion</th>
                                    <th>Uso</th>
                                    <th>Año</th>
                                    <th>Modelo</th>
                                    <th>Acción</th>
                              </tr>
                              @foreach($preventivos as $preventivo)
                              <tr>                                
                                <td>{{ $preventivo->id }}</td>
                                <td>{{ $preventivo->nidentificacion }}</td>
                                <td>{{ $preventivo->uso }}</td>
                                <td>{{ $preventivo->year  }}</td>
                                <td>{{ $preventivo->modelo->descripcion." - ".$preventivo->modelo->dimension."mt - ".$preventivo->modelo->marca->nombre  }}</td>
                                <td>
                                  <a href="{{ route('preventivo.show',$preventivo) }}" class="btn btn-info">Ejecutar</a>
                                </td>                               
                              </tr>
                              @endforeach
                        </table>
                  </div>
                  {!! Form::close() !!}
            </div>

      </div>

</div>
@endsection