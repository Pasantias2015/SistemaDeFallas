@extends('app')
@include('tools.sidebar')
@section('content')
<div class="col-md-11">
<div class="panel panel-danger">
            <div class="panel-heading">Mantenimientos Correctivos Pendientes</div>
            <div class="panel-body">
             @include('tools.errors')
            {!! Form::open() !!}
                  <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                              <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Servicio-Unidad-Operador</th>
                                    <th>Año</th>
                                    <th>Lugar Falla</th>
                                    <th>Pendiente</th>
                                    <th>Acción</th>
                              </tr>
                              @foreach($correctivos as $correctivo)
                              <tr>                                
                                <td>{{ $correctivo->id }}</td>
                                <td>{{ $correctivo->fecha }}</td>
                                <td>{{ $correctivo->serviciounidadoperador->unidad->nidentificacion." - ".$correctivo->serviciounidadoperador->unidad->uso." - ".$correctivo->serviciounidadoperador->operador->persona->nombrecompleto }}</td>
                                <td>{{ $correctivo->serviciounidadoperador->unidad->year }}</td> 
                                <td>{{ $correctivo->lugar }}</td> 
                                <td>{{ $correctivo->pendiente }}</td> 
                                <td>
                                  <a href="{{ route('correctivo.show',$correctivo) }}" class="btn btn-info">Generar Orden</a>
                                </td>                               
                              </tr>
                              @endforeach
                        </table>
                  </div>
                  {!! Form::close() !!}
            </div>
      </div>
<input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" /></div>
@endsection