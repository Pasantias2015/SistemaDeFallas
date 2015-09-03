<div>
<div class="panel panel-danger">
            <div class="panel-heading">Mantenimientos Diarios Realizados</div>
            <div class="panel-body">
             @include('tools.errors')
            {!! Form::open() !!}
                  <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                              <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Servicio - Unidad - Uso- Año</th>
                                    <th>Acción</th>
                              </tr>
                              @foreach($diarios as $diario)
                              <tr>                                
                                <td>{{ $diario->id }}</td>
                                <td>{{ $diario->fecha }}</td>
                                <td>{{ $diario->serviciounidadoperador->servicio->descripcion." - ".$diario->serviciounidadoperador->unidad->nidentificacion." - ".$diario->serviciounidadoperador->unidad->uso." - ".$diario->serviciounidadoperador->unidad->year }}</td>
                                <td>
                                  <a href="{{ route('diario.edit',$diario) }}" class="btn btn-info">Ver</a>
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