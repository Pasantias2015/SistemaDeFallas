@section('sidebar')
<div class="col-md-11">
  <a title="Transbar C.A." href="http://www.transbarca.gob.ve/" target="_blank">
  <img src="/images/logo_transbarca.png" alt="Transbar C.A." target="_blank" class="img-responsive" /></a>
</div>
</br>
</br>
</br>
<div id="MainMenu" class="col-md-11">
  <div class="list-group panel">
    <!--  //principal -->
    <a href="#persona" class="list-group-item list-group-item-danger" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-user right"></i> Persona </a>
    <div class="collapse" id="persona">
      <a href="{{ url('personas/create') }}" class="list-group-item">Registrar Empleado</a>
      <a href="{{ url('lpersonas') }}" class="list-group-item">Listado de Empleados</a>
      <a href="{{ url('usuario') }}" class="list-group-item">Crear Usuario</a>
    </div>

    <!--  //principal -->
    <a href="#unidades" class="list-group-item list-group-item-danger" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-car right"></i> Unidades </a>
    <div class="collapse" id="unidades">
      <a href="{{ url('marcas') }}" class="list-group-item">Registrar Marca</a>
      <a href="{{ url('modelos') }}" class="list-group-item">Registrar Modelo</a>
      <a href="{{ url('unidades/create') }}" class="list-group-item">Registrar Unidad</a>
      <a href="{{ url('unidades/') }}" class="list-group-item">Consultar Unidades</a>
      <a href="{{ url('unidadoperadores') }}" class="list-group-item">Asignar Unidad</a>
      <a href="{{ url('asignar') }}" class="list-group-item">Asignar Codigo del Sistema</a>
    </div>
    
    <!--  //principal -->
    <a href="#almacen" class="list-group-item list-group-item-danger" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-truck right"></i> Almacen </a>
    <div class="collapse" id="almacen">
      <a href="{{ url('almacen') }}" class="list-group-item">Ingresar Al Almacen</a>
      <a href="{{ url('solicitud') }}" class="list-group-item">Solicitud Al Almacen</a>
      <a href="{{ url('solicitudp') }}" class="list-group-item">Solicitudes Pendientes</a>
      <a href="{{ url('solicitude') }}" class="list-group-item">Solicitudes Entregadas</a>
    </div>

   <!--  //principal -->
    <a href="#mto" class="list-group-item list-group-item-danger" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-cog fa-spin left"></i> Mantenimientos </a>
    <div class="collapse" id="mto">
    <!-- //hijo de principal-->     
      <a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1"><i class="fa fa-car right"></i> Unidades Yutong <i class="fa fa-caret-down"></i></a>
        <!-- Hijos de Submenu1 -->
        <div class="collapse list-group-submenu" id="SubMenu1">
          <!-- <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 1 a</a>
          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 2 b</a> -->
          <a href="#SubSubMenu11" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-pencil-square-o left"></i> - Mantenimiento Diario<i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu11">
            <a href="{{ url('diario') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizar</a>
            <a href="{{ url('ldiario') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizados </a>
          </div>

          <a href="#SubSubMenu12" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-calendar left"></i> - Mantenimiento Preventivo<i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu12">
            <a href="{{ url('uniprev') }}" class="list-group-item" data-parent="#SubSubMenu1">Pendientes</a>
            <a href="{{ url('lpreventivos') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizados </a>
          </div>

          <a href="#SubSubMenu13" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-wrench fa-rotate-270 left"></i> - Mantenimiento Correctivo<i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu13">
            <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Reportar</a>
            <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Pendientes </a>
          </div>
        </div>
      <!--       //hijo de principal-->     
      <a href="#SubMenu2" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu2"><i class="fa fa-car right"></i> Unidades Neoplan <i class="fa fa-caret-down"></i></a>
        <!-- Hijos de Submenu1 -->
        <div class="collapse list-group-submenu" id="SubMenu2">
          <!-- <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 1 a</a>
          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 2 b</a> -->
          <a href="#SubSubMenu21" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-pencil-square-o left"></i> - Mantenimiento Semanal<i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu21">
            <a href="{{ url('semanal') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizar</a>
            <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Realizados</a>
          </div>

          <a href="#SubSubMenu22" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-calendar left"></i> - Mantenimiento Mensual<i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu22">
            <a href="{{ url('mensual') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizar</a>
            <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Realizados </a>
          </div>

          <a href="#SubSubMenu23" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-wrench fa-rotate-270 left"></i>Mantenimiento Correctivo<i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu23">
            <a href="porfalla" class="list-group-item" data-parent="#SubSubMenu1">Realizar</a>
            <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Realizados </a>
          </div>
        </div>
    </div>

  <!--  //principal -->
    <a href="#repor" class="list-group-item list-group-item-danger" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-folder-open-o right"></i> Reportes </a>
    <div class="collapse" id="repor">
       <a href="#SubMenu1a" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1a"><i class="fa fa-car right"></i> Unidades Yutong <i class="fa fa-caret-down"></i></a>

        <div class="collapse list-group-submenu" id="SubMenu1a">
          <!-- <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 1 a</a>
          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 2 b</a> -->
          <a href="#SubSubMenu11a" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1a"><i class="fa fa-pencil-square-o left"></i> - Mantenimiento Diario<i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu11a">
            <a href="{{ url('rdiario') }}" class="list-group-item" data-parent="#SubSubMenu1a">General</a>
            <a href="{{ url('rdiario1') }}" class="list-group-item" data-parent="#SubSubMenu1a">Fluidos Usados </a>
            <a href="{{ url('rdiario2') }}" class="list-group-item" data-parent="#SubSubMenu1a">Estado Fisico </a>
            <a href="{{ url('rdiario6') }}" class="list-group-item" data-parent="#SubSubMenu1a"> Unidad</a>
          </div>

          <a href="#SubSubMenu11ab" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1a"><i class="fa fa-pencil-square-o left"></i> - Mantenimiento Preventivo<i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu11ab">
            <a href="{{ url('rp1') }}" class="list-group-item" data-parent="#SubSubMenu1a">Fluidos Usados - Sustitución</a>
            <a href="{{ url('rp2') }}" class="list-group-item" data-parent="#SubSubMenu1a">Mantenimiento Motor</a>
          </div>

         
        </div>





    </div>
    <!--  //principal -->
    <a href="#bd" class="list-group-item list-group-item-danger" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-database right"></i> Base de Datos </a>
    <div class="collapse" id="bd">
      <a href="{{ route('servicios.index') }}" class="list-group-item">Registrar Servicios</a>
      <a href="{{ route('lugares.index') }}" class="list-group-item">Registrar Lugares</a>
      <a href="{{ route('patios.index') }}" class="list-group-item">Registrar Patio</a>
      <a href="{{ route('puestos.index') }}" class="list-group-item">Registrar Puesto</a>
      <a href="{{ url('secciones') }}" class="list-group-item">Registrar Seccion Yutong</a>
      <a href="{{ url('grupos') }}" class="list-group-item">Registrar Grupo Yutong</a>
      <a href="{{ url('piezas') }}" class="list-group-item">Registrar Piezas Yutong</a>
      <a href="{{ url('herramientas') }}" class="list-group-item">Registrar Equipos</a>
      <a href="{{ url('cajas') }}" class="list-group-item">Registrar Cajas</a>
      <a href="{{ url('coordinaciones') }}" class="list-group-item">Registrar Coordinaciones</a>
      <a href="{{ url('fallas') }}" class="list-group-item">Registrar Fallas</a>
      <a href="{{ url('causas') }}" class="list-group-item">Registrar Causas</a>
      <a href="{{ url('soluciones') }}" class="list-group-item">Registrar Soluciones</a>
      <a href="{{ url('piezaneo') }}" class="list-group-item">Registrar Piezas Neoplan</a>
    </div>

  </div>
</div>
@endsection