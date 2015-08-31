<div class="col-md-12">
  <table class="table table-bordered table-striped">
    <tr>
      <th>ID</th>
      <th>Fecha</th>
      <th>Unidad</th>
      <th>Kilometraje</th>
      <th>Acción</th>
    </tr>
    @foreach($preventivos as $preventivo)
    <tr>                                
      <td>{{ $preventivo->id }}</td>
      <td>{{ $preventivo->fecha }}</td>
      <td>{{ $preventivo->serviciounidadoperador->servicio->descripcion." - ".$preventivo->serviciounidadoperador->unidad->nidentificacion." - ".$preventivo->serviciounidadoperador->operador->persona->pnombre  }}</td>
      <td>{{ $preventivo->kilometraje }}</td>
      <td>   <a href="{{ route('preventivo.edit',$preventivo) }}" class="btn btn-info">Ver</a>     </td>                               
    </tr>
    @endforeach
  </table>
</div>
<input action="action" type="button" value="Regresar" onclick="history.go(-1);" class="btn btn-danger" />
