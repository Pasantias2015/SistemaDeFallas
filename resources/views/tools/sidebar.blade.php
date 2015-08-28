@section('sidebar')
  <div class="col-md-10">
      <a title="Transbar C.A." href="http://www.transbarca.gob.ve/" target="_blank">
      <img src="/images/logo_transbarca.png" alt="Transbar C.A." target="_blank" class="img-responsive" /></a>
    </div>
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
    <div class='sidebar-menu'><i class="fa fa-user left"></i>Persona<div class='expand'><i class="fa fa-angle-left"></i></div></div>
      <div class='sub-menu'>
      <ul>
      <a href="{{ url('personas/create') }}"><li>Registrar Persona</li></a>
      <a href="{{ url('lpersonas') }}"><li>Listado</li></a>
      <a href="{{ url('usuario') }}"><li>Registrar Usuario</li></a>
      </ul>
      </div>
    <div class='sidebar-menu' ><i class="fa fa-folder-open-o left"></i>Reportes<div class='expand'><i class="fa fa-angle-left"></i></div></div>
      <div class='sub-menu'>
      <ul>
        <a href="{{ url('reportes') }}"><li>Unidades</li></a>
        <a href="{{ route('reportes.create') }}"><li>Incidencias</li></a>
        <a href="{{ url('rdiario') }}"><li>Mantenimiento Diario General</li></a>
        <a href="{{ url('rdiario1') }}"><li>Reporte Mto Diario: Fluidos Usados</li></a>
        <a href="{{ url('rdiario2') }}"><li>Reporte Mto Diario: Estado Fisico</li></a>
        <a href="{{ url('rdiario6') }}"><li>Reporte Mto Diario: Unidad</li></a>
      </ul>
      </div>
    <div class='sidebar-menu'><i class="fa fa-pencil-square-o left"></i>Mantenimientos Diario<div class='expand'><i class="fa fa-angle-left"></i></div></div>
      <div class='sub-menu'>
        <ul>
            <a href="{{ url('diario') }}"><li>Mantenimiento Diario </li></a>
            <a href="{{ url('ldiario') }}"><li>Mantenimientos Diarios Realizados </li></a>
        </ul>
      </div>
      <div class='sidebar-menu'><i class="fa fa-calendar left"></i>Mantenimientos Preventivo<div class='expand'><i class="fa fa-angle-left"></i></div></div>
      <div class='sub-menu'>
        <ul>
            <a href="{{ url('uniprev') }}"><li>Mantenimiento Preventivo Pendientes</li></a>
            <a href="{{ url('lpreventivos') }}"><li>Mantenimiento Preventivo Realizados</li></a>
        </ul>
      </div>
      <div class='sidebar-menu'><i class="fa fa-wrench left"></i>Mantenimientos Correctivo<div class='expand'><i class="fa fa-angle-left"></i></div></div>
      <div class='sub-menu'>
        <ul>
            <a href="{{ url('') }}"><li>Correctivo</li></a>
           <!--  <a href="{{ url('') }}"><li></li></a> -->
        </ul>
      </div>
      <div class='sidebar-menu'><i class="fa fa-car left"></i>Neoplan<div class='expand'><i class="fa fa-angle-left"></i></div></div>
      <div class='sub-menu'>
        <ul>
            <a href="{{ url('fallas') }}"><li>Fallas</li></a>
            <a href="{{ url('causas') }}"><li>Causas</li></a>
            <a href="{{ url('soluciones') }}"><li>Soluciones</li></a>
        </ul>
      </div>
    <div class='sidebar-menu'><i class="fa fa-archive left"></i>Almacen<div class='expand'><i class="fa fa-angle-left"></i></div></div>
    <div class='sub-menu'>
      <ul>
          <a href="{{ url('almacen') }}"><li>Ingresar Al Almacen </li></a>
          <a href="{{ url('solicitud') }}"><li>Solicitud Al Almacen </li></a>
          <a href="{{ url('solicitudp') }}"><li>Solicitudes Pendientes </li></a>
          <a href="{{ url('solicitude') }}"><li>Solicitudes Entregadas </li></a>
          <a href="{{ url('piezas') }}"><li>Registrar Piezas</li></a>
          <a href="{{ url('herramientas') }}"><li>Registrar Herramientas</li></a>
          <a href="{{ url('cajas') }}"><li>Registrar Cajas</li></a>
      </ul>
    </div>

    <div class='sidebar-menu'><i class="fa fa-cog fa-spin left"></i>Configuraciones<div class='expand'><i class="fa fa-angle-left"></i></div></div>
    
      <div class='sub-menu'>
      <ul>
      <a href="{{ route('servicios.index') }}"><li>Registrar Servicios</li></a>
      <a href="{{ route('servicios.index') }}"><li>Registrar Servicios</li></a>
      <a href="{{ route('lugares.index') }}"><li>Registrar Lugares</li></a>
      <a href="{{ route('patios.index') }}"><li>Registrar Patio</li></a>
      <a href="{{ route('puestos.index') }}"><li>Registrar Puesto</li></a>
      
      <a href="{{ url('rusuario') }}"><li>Registrar Usuario</li></a>
      <a href="{{ url('marcas') }}"><li>Registrar Marca</li></a>
      <a href="{{ url('modelos') }}"><li>Registrar Modelo</li></a>
      <a href="{{ url('secciones') }}"><li>Registrar Seccion</li></a>
      <a href="{{ url('grupos') }}"><li>Registrar Grupo</li></a>

      <a href="{{ url('coordinaciones') }}"><li>Registrar Coordinaciones</li></a>
               

      </ul>
      </div>
  </div>
@endsection
