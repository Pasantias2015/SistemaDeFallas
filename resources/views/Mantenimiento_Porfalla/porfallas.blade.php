<div>
<div class="panel panel-danger">
            <div class="panel-heading">Mantenimientos Correctivos Realizados</div>
            <div class="panel-body">
             @include('tools.errors')
            {!! Form::open() !!}
                  <div class="col-md-12">
                        <table class="table table-bordered table-striped">
                              <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Unidad</th>
                                    <th>Accion</th>
                              </tr>
                              @foreach($porfallas as $porfalla)
                              <tr>                                
                                <td>{{ $porfalla->id }}</td>
                                <td>{{ $porfalla->fecha }}</td>
                                <td>{{ $porfalla->unidad->nidentificacion }}</td>
                                <td>
                                  <a href="{{ route('porfalla.edit',$porfalla) }}" class="btn btn-info">Ver</a>
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