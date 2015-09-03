@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
      <div class="panel panel-danger">
            <div class="panel-heading">Solicitudes Pendientes</div>
            <div class="panel-body">
             @include('tools.errors')
              {!! Form::open(['route'=>'solicitud.edit','method'=>'POST']) !!}
                  <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                              <tr>
                                    <th>ID</th>
                                    <th>Fecha- Hora</th>
                                    <th>Usuario</th>
                                    <th>Mecánico</th>
                                    <th>Acción</th>
                              </tr>
                              @foreach($solicitudes as $solicitud)
                              <tr>                                
                                <td>{{ $solicitud->id }}</td>
                                <td>{{ $solicitud->fecha." - ".$solicitud->hora }}</td>
                                <td>{{ $solicitud->usuario->persona->pnombre." ".$solicitud->usuario->persona->papellido }}</td>
                                <td>{{ $solicitud->persona->pnombre." ".$solicitud->persona->papellido}}</td>
                                <td>
                                  <a href="{{ route('solicitud.edit',$solicitud) }}" class="btn btn-info">Ver Detalle</a>
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