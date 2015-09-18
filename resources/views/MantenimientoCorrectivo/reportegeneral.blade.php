@extends('app')
@include('tools.sidebar')
@section('content')
<div>
<div class="panel panel-danger">
            <div class="panel-heading">Mantenimientos Correctivos Realizados a la Unidad {{ $uni->nidentificacion }}</div>
            <div class="panel-body">
             @include('tools.errors')           
                  <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                              <tr>
                                <th>ID</th>
                                <th>Fecha</th>                                
                                <th>Lugar</th>
                                <th>Hora</th>
                                <th>Servicio - Operador</th>
                                <th>Sección</th>
                                <th>Frecuencia</th>
                                <th>Horas de Servicio</th>
                                <th>Observaciones</th>
                                <th>Acción</th>
                              </tr>
                              @foreach($correctivos as $correctivo)
                              <tr>                                
                                <td>{{ $correctivo->id }}</td>
                                <td>{{ $correctivo->fecha }}</td>
				<td>{{ $correctivo->lugar }}</td>
                                <td>{{ $correctivo->hora }}</td>
                                <td>{{ $correctivo->serviciounidadoperador->servicio->descripcion."-".$correctivo->serviciounidadoperador->operador->persona->nombrecompleto }}</td>
                                <td>{{ $correctivo->seccion->descripcion }}</td>
 				<td>{{ $correctivo->frecuencia }}</td>
                                <td>{{ $correctivo->hservicio }}</td>
                                <td>{{ $correctivo->otrasobs }}</td>
                              
                                <td>
                                  <a href="{{ route('correctivo.edit',$correctivo) }}" class="btn btn-info">Ver</a>
                                </td>                               
                              </tr>
                              @endforeach
                        </table>
                  </div>
                  {!! Form::close() !!}
            </div>
      </div>
<input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
</div>
@endsection