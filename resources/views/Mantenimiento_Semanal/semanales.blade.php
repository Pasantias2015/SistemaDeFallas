<div>
<div class="panel panel-danger">
            <div class="panel-heading">Mantenimientos Semanales Realizados</div>
            <div class="panel-body">
             @include('tools.errors')
            {!! Form::open() !!}
                  <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                              <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Unidad - Uso</th>
                                    <th>Acción</th>
                              </tr>
                              @foreach($semanales as $semanal)
                              <tr>                                
                                <td>{{ $semanal->id }}</td>
                                <td>{{ $semanal->fecha }}</td>
                                <td>{{ $semanal->serviciounidadoperador->unidad->nidentificacion." - ".$semanal->serviciounidadoperador->unidad->uso}}</td>
                                <td>
                                  <a href="{{ route('semanal.edit',$semanal) }}" class="btn btn-info">Ver</a>
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