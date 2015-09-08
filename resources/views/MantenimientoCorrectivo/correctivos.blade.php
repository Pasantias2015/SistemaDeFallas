<div class="panel panel-danger">
            <div class="panel-heading">Mantenimientos Correctivos Registrados</div>
            <div class="panel-body">
             @include('tools.errors')
            {!! Form::open() !!}
                  <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                              <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Servicio-Unidad-Operador</th>
                                    <th>Lugar Falla</th>
                                    <th>Pendiente</th>
                                    <th>Acción</th>
                              </tr>
                              @foreach($correctivos as $correctivo)
                              <tr>                                
                                <td>{{ $correctivo->id }}</td>
                                <td>{{ $correctivo->fecha }}</td>
                                <td>{{ $correctivo->serviciounidadoperador->unidad->nidentificacion." - ".$correctivo->serviciounidadoperador->unidad->uso." - ".$correctivo->serviciounidadoperador->operador->persona->nombrecompleto }}</td>
                                <td>{{ $correctivo->lugar }}</td> 
                                <td>{{ $correctivo->pendiente }}</td> 
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