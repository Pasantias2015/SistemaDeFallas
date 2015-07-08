
	@section('sidebar')
	<div class="col-md-3">


<div class='sidebar-1'> 
  <div class='sidebar-menu'><i class="fa fa-car left"></i>Unidades<div class='expand'><i class="fa fa-angle-left"></i></div></div>
<div class='sub-menu'>
  <ul>
  <a href="{{ url('unidades/create') }}"><li>Registrar Unidad</li></a>
	<a href="{{ url('unidades/') }}"><li>Consultar Unidades</li></a>
	<a href="{{ url('uoperador') }}"><li>Asignar Unidad</li></a>
  </ul>
</div>
<div class='sidebar-menu'><i class="fa fa-exclamation-triangle left"></i></i>Fallas<div class='expand'><i class="fa fa-angle-left"></i></div></div>
<div class='sub-menu'>
  <ul>
  <a href="{{ url('rfalla') }}"><li>Nueva Falla</li></a>
  <a href="{{ url('rtfalla') }}"><li>Nuevo Tipo de Falla</li></a>
  <a href="{{ url('rcfalla') }}"><li>Nueva Categoria de Falla</li></a>
  <a href="{{ url('rfuoperador') }}"><li>Registrar Falla</li></a>
  
 
  </ul>
</div>
 <div class='sidebar-menu'><i class="fa fa-user  left"></i>Operadores<div class='expand'><i class="fa fa-angle-left"></i></div></div>
<div class='sub-menu'>
  <ul>
  <a href="{{ url('operadores/create') }}"><li>Registrar Operador</li></a>
  <a href="{{ url('operadores/') }}"><li>Operadores</li></a>
  </ul>
</div>
<div class='sidebar-menu'><i class="mdi-action-settings left"></i>Configuraciones<div class='expand'><i class="fa fa-angle-left"></i></div></div>
<div class='sub-menu'>
  <ul>
  <a href="{{ url('rusuario') }}"><li>Registrar Usuario</li></a>
  <a href=" "><li>Usuarios Registrado</li></a>
	
  </ul>

</div>

<div class='sidebar-menu' ><i class="fa fa-file-pdf-o left"></i>Reportes<div class='expand'><i class="fa fa-angle-left"></i></div></div>
<div class='sub-menu'>
  <ul>
  <a href="{{ url('reportes') }}"><li>Fallas Unidades</li></a>
  
  
  </ul>

</div>
</div>
</div>

@endsection
