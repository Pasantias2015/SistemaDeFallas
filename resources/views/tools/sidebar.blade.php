
	@section('sidebar')
	<div class="col-md-3">


<div class='sidebar-1'> 
  <div class='sidebar-menu'><i class="fa fa-car left"></i>Unidades<div class='expand'><i class="fa fa-angle-left"></i></div></div>
<div class='sub-menu'>
  <ul>
  <a href="{{ url('unidad') }}"><li>Registrar Unidad</li></a>
	
	<li>Asignar Unidad</li>
	<li>Reportar Unidad</li>
  </ul>
</div>
 <div class='sidebar-menu'><i class="fa fa-exclamation-triangle left"></i>Operadores<div class='expand'><i class="fa fa-angle-left"></i></div></div>
<div class='sub-menu'>
  <ul>
  <a href="{{ url('operadores/create') }}"><li>Registrar Operador</li></a>
  </ul>
</div>
<div class='sidebar-menu'><i class="mdi-action-settings left"></i>Configuraciones<div class='expand'><i class="fa fa-angle-left"></i></div></div>
<div class='sub-menu'>
  <ul>
  <a href="{{ url('auth/register') }}"><li>Registrar Usuario</li></a>
	
  </ul>
</div>
</div>
</div>

@endsection
