@section('sidebar')
  <div class='sidebar-1'> 
    <div class='sidebar-menu'><i class="fa fa-car left"></i>Unidades<div class='expand'><i class="fa fa-angle-left"></i></div></div>
      <div class='sub-menu'>
    <ul>
    <a href="{{ url('unidades/create') }}"><li>Registrar Unidad</li></a>
  	<a href="{{ url('unidades/') }}"><li>Consultar Unidades</li></a>
  	<a href="{{ url('unidadoperadores') }}"><li>Asignar Unidad</li></a>
    <a href="{{ url('asignar') }}"><li>Asignar Codigo del Sistema</li></a>

    </ul>
      </div>
    <div class='sidebar-menu'><i class="fa fa-exclamation-triangle left"></i></i>Fallas<div class='expand'><i class="fa fa-angle-left"></i></div></div>
      <div class='sub-menu'>
        <ul>
        <a href="{{ route('fallas.create') }}"><li>Nueva Falla</li></a>
        <a href="{{ route('tipos.create') }}"><li>Nuevo Tipo de Falla</li></a>
        <a href="{{ route('categorias.create') }}"><li>Nueva Categoria de Falla</li></a>
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
    <div class='sidebar-menu' ><i class="fa fa-file-pdf-o left"></i>Reportes<div class='expand'><i class="fa fa-angle-left"></i></div></div>
      <div class='sub-menu'>
      <ul>
      <a href="{{ url('reportes') }}"><li>Unidades</li></a>
      <a href="{{ route('reportes.create') }}"><li>Incidencias</li></a>
      
      
      
      </ul>
      </div>
    
    <div class='sidebar-menu'><i class="mdi-action-settings left"></i>Configuraciones<div class='expand'><i class="fa fa-angle-left"></i></div></div>
      <div class='sub-menu'>
      <ul>
      <a href="{{ route('servicios.index') }}"><li>Registrar Servicios</li></a>
      <a href="{{ route('servicios.index') }}"><li>Registrar Servicios</li></a>
      <a href="{{ route('lugares.index') }}"><li>Registrar Lugares</li></a>
      <a href="{{ route('patios.index') }}"><li>Registrar Patio</li></a>
      <a href="{{ route('puestos.index') }}"><li>Registrar Puesto</li></a>
      
      <a href="{{ url('rusuario') }}"><li>Registrar Usuario</li></a>
     
      <a href="{{ url('modelos') }}"><li>Registrar Modelo</li></a>
      <a href="{{ url('secciones') }}"><li>Registrar Seccion</li></a>
      <a href="{{ url('grupos') }}"><li>Registrar Grupo</li></a>
      <a href="{{ url('piezas') }}"><li>Registrar Piezas</li></a>
      <a href="{{ url('herramientas') }}"><li>Registrar Herramientas</li></a>
      <a href="{{ url('mantenimiento') }}"><li>Registrar Mantenimiento</li></a>
      <a href="{{ url('cajas') }}"><li>Registrar Cajas</li></a>
      <a href="{{ url('coordinaciones') }}"><li>Registrar Coordinaciones</li></a>
      <a href="{{ url('almacen') }}"><li>Almacen </li></a>
      <a href="{{ url('items') }}"><li>Registrar Item </li></a>
      <a href="{{ url('preventivo') }}"><li>Mantenimiento Preventivo </li></a>
      <a href="{{ url('lpreventivos') }}"><li>Listado Mantenimiento Preventivo </li></a>
      <a href="{{ url('diario') }}"><li>Mantenimiento Diario </li></a>
      <a href="{{ url('ldiario') }}"><li>Listado Mantenimiento Diario </li></a>
      <a href="{{ url('marcas') }}"><li>Registrar Marca</li></a>
                



      </ul>
      </div>
  </div>
@endsection
