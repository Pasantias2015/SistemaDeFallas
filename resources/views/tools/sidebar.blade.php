@section('sidebar')
<div class="col-md-11">
  <a title="Transbar C.A." href="http://www.transbarca.gob.ve/" target="_blank">
  <img src="{!! url('images/logo_transbarca.png') !!}" alt="Transbar C.A." target="_blank" class="img-responsive" /></a>
</div>
</br>
</br>
</br>
<div id="MainMenu" class="col-md-11">
  <div class="list-group panel">
    <!--  //principal -->

@if(Auth::user()->id != 3)



    <a href="#persona" class="list-group-item list-group-item-danger" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-user-plus right"></i> Persona </a>
    <div class="collapse" id="persona">
      
      <a href="{{ url('personas/create') }}" class="list-group-item">Registrar Empleado</a>
      <a href="{{ url('lpersonas') }}" class="list-group-item">Listado de Empleados</a>
      <a href="{{ url('usuario') }}" class="list-group-item">Crear Usuario</a>

      <a href="#SubSubMenuA" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-pencil-square-o left"></i> - <strong>Configuraciones</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenuA">
            <a href="{{ url('coordinaciones') }}" class="list-group-item">Registrar Coordinaciones</a>
            <a href="{{ url('cargos') }}" class="list-group-item">Registrar Cargos</a>
          </div>
      

    </div>
  

@endif


    <!--  //principal -->
    <a href="#unidades" class="list-group-item list-group-item-danger" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-bus right"></i> Unidades </a>
    <div class="collapse" id="unidades">
      
      <a href="{{ url('unidades/create') }}" class="list-group-item">Registrar Unidad</a>
      <a href="{{ url('unidades/') }}" class="list-group-item">Registradas</a>
       <a href="{{ url('operativa') }}" class="list-group-item">Operativas - Inoperativas</a>
	<a href="{{ url('unidadoperadores') }}" class="list-group-item">Asignar Unidad</a>
      <a href="{{ url('asignar') }}" class="list-group-item">Asignar C&oacutedigo del Sistema</a>
     

      <a href="#SubSubMenuB" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-pencil-square-o left"></i> - <strong>Configuraciones</strong> <i class="fa fa-caret-down"></i></a>
                  <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenuB">
            
          <a href="#SubSubMenu13a" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><strong>Generales</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu13a">
            <a href="{{ url('marcas') }}" class="list-group-item">Registrar Marca</a>
            <a href="{{ url('modelos') }}" class="list-group-item">Registrar Modelo</a>
            <a href="{{ route('servicios.index') }}" class="list-group-item">Registrar Servicios</a>
            <a href="{{ route('lugares.index') }}" class="list-group-item">Registrar Lugares</a>
            <a href="{{ route('patios.index') }}" class="list-group-item">Registrar Patio</a>
            <a href="{{ route('puestos.index') }}" class="list-group-item">Registrar Puesto</a>
          </div>  
       
        <a href="#SubSubMenu11a" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-bus left"></i> - <strong>Unidades Yutong</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu11a">
            <a href="{{ url('secciones') }}" class="list-group-item">Registrar Seccion </a>
            <a href="{{ url('grupos') }}" class="list-group-item">Registrar Grups </a>
            <a href="{{ url('piezas') }}" class="list-group-item">Registrar Pieza </a>
          </div>

        <a href="#SubSubMenu12a" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-bus left"></i> - <strong>Unidades Neoplan</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu12a">
            <a href="{{ url('fallas') }}" class="list-group-item">Registrar Fallas</a>
            <a href="{{ url('causas') }}" class="list-group-item">Registrar Causas</a>
            <a href="{{ url('soluciones') }}" class="list-group-item">Registrar Soluciones</a>
            <a href="{{ url('piezaneo') }}" class="list-group-item">Registrar Piezas Neoplan</a>
          </div>
        </div>
      

    </div>
    
    <!--  //principal -->
    <a href="#almacen" class="list-group-item list-group-item-danger" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-truck right"></i> Almacen </a>
    <div class="collapse" id="almacen">
      <a href="{{ url('almacen') }}" class="list-group-item">Actualizar </a>
      <a href="{{ url('solicitud') }}" class="list-group-item">Emitir Solicitud </a>
      <a href="{{ url('solicitudp') }}" class="list-group-item">Solicitudes Pendientes</a>
      <a href="{{ url('solicitude') }}" class="list-group-item">Solicitudes Entregadas</a>

        <a href="#SubSubMenuC" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-pencil-square-o left"></i> - <strong>Configuraciones</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenuC">
              <a href="{{ url('herramientas') }}" class="list-group-item">Registrar Equipos</a>
              <a href="{{ url('cajas') }}" class="list-group-item">Registrar Cajas</a>
          </div>
    </div>

   <!--  //principal -->
    <a href="#mto" class="list-group-item list-group-item-danger" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-cog left"></i> Mantenimientos </a>
    <div class="collapse" id="mto">
    <!-- //hijo de principal-->     
      <a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1"><i class="fa fa-bus right"></i> <strong>Unidades Yutong</strong> <i class="fa fa-caret-down"></i></a>
        <!-- Hijos de Submenu1 -->
        <div class="collapse list-group-submenu" id="SubMenu1">
          <!-- <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 1 a</a>
          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 2 b</a> -->
          <a href="#SubSubMenu11" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-calendar-check-o left"></i> - <strong>Mantenimiento Diario</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu11">
            <a href="{{ url('diario') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizar</a>
            <a href="{{ url('ldiario') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizados </a>
          </div>

          <a href="#SubSubMenu12" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-calendar left"></i> - <strong>Mantenimiento Preventivo</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu12">
            <a href="{{ url('uniprev') }}" class="list-group-item" data-parent="#SubSubMenu1">Pendientes</a>
            <a href="{{ url('lpreventivos') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizados </a>
          </div>

          <a href="#SubSubMenu13" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-wrench fa-rotate-270 left"></i> - <strong>Mantenimiento Correctivo</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu13">
            <a href="correctivo" class="list-group-item" data-parent="#SubSubMenu1">Reportar</a>
            <a href="correctivop" class="list-group-item" data-parent="#SubSubMenu1">Pendientes </a>
            <a href="correctivor" class="list-group-item" data-parent="#SubSubMenu1">Registrados </a>
          </div>

          <a href="#SubSubMenu14" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-wrench fa-rotate-270 left"></i> - <strong>Orden de Reparacion</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu14">
            <a href="reparaciones" class="list-group-item" data-parent="#SubSubMenu1">Pendientes </a>
          </div>
        </div>
      <!--       //hijo de principal-->     
      <a href="#SubMenu2" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu2"><i class="fa fa-bus right"></i> <strong>Unidades Neoplan</strong> <i class="fa fa-caret-down"></i></a>
        <!-- Hijos de Submenu1 -->
        <div class="collapse list-group-submenu" id="SubMenu2">
          <!-- <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 1 a</a>
          <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 2 b</a> -->
          <a href="#SubSubMenu21" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-calendar-check-o left"></i> - <strong>Mantenimiento Semanal</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu21">
            <a href="{{ url('semanal') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizar</a>
            <a href="{{ url('listasemanal') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizados</a>
          </div>

          <a href="#SubSubMenu22" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-calendar left"></i> - <strong>Mantenimiento Mensual</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu22">
            <a href="{{ url('mensual') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizar</a>
            <a href="{{ url('listamensual') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizados </a>
          </div>

          <a href="#SubSubMenu23" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1"><i class="fa fa-wrench fa-rotate-270 left"></i> <strong>Mantenimiento Correctivo</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu23">
            <a href="{{ url('porfalla') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizar</a>
            <a href="{{ url('listaporfalla') }}" class="list-group-item" data-parent="#SubSubMenu1">Realizados </a>
          </div>
        </div>
    </div>

  <!--  //principal -->
    <a href="#repor" class="list-group-item list-group-item-danger" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-folder-open-o right"></i> Reportes </a>
    <div class="collapse" id="repor">
       <a href="#SubMenu1a" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1a"><i class="fa fa-bus right"></i> <strong>Unidades Yutong</strong> <i class="fa fa-caret-down"></i></a>

        <div class="collapse list-group-submenu" id="SubMenu1a">
          
          <a href="#SubSubMenu11ba" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1a"><i class="fa fa-pie-chart left"></i> - <strong>Mantenimiento Diario</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu11ba">
            <a href="{{ url('rdiario') }}" class="list-group-item" data-parent="#SubSubMenu1a">General</a>
            <a href="{{ url('rdiario1') }}" class="list-group-item" data-parent="#SubSubMenu1a">Fluidos Usados </a>
            <a href="{{ url('rdiario2') }}" class="list-group-item" data-parent="#SubSubMenu1a">Estado Fisico </a>
            <a href="{{ url('rdiario6') }}" class="list-group-item" data-parent="#SubSubMenu1a"> Unidad</a>
          </div>

          <a href="#SubSubMenu11ab" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1a"><i class="fa fa-pie-chart left"></i> - <strong>Mantenimiento Preventivo</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu11ab">
            <a href="{{ url('rp1') }}" class="list-group-item" data-parent="#SubSubMenu1a">Fluidos Usados - Sustituciones</a>
            <a href="{{ url('rp2') }}" class="list-group-item" data-parent="#SubSubMenu1a">Mantenimiento Motor</a>
            <a href="{{ url('rp3') }}" class="list-group-item" data-parent="#SubSubMenu1a">Direcci&oacuten - Embrague - Enfriamiento - Luces</a>
            <a href="{{ url('rp4') }}" class="list-group-item" data-parent="#SubSubMenu1a">Suspensi&oacuten - Arbol - Eje y Rueda</a>
            <a href="{{ url('rp5') }}" class="list-group-item" data-parent="#SubSubMenu1a">Sistema Electrico y Frenos - Aire Acondicionado</a>
            <a href="{{ url('rp6') }}" class="list-group-item" data-parent="#SubSubMenu1a">Observaciones</a>
          </div> 
	
	<a href="#SubSubMenu11abc" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1a"><i class="fa fa-pie-chart left"></i> - <strong>Mantenimiento Correctivo</strong> <i class="fa fa-caret-down"></i></a>
            <!-- Hijos de SubSubMenu1 -->
          <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu11abc">
            <a href="{{ url('rcorrectivo1') }}" class="list-group-item" data-parent="#SubSubMenu1a">General</a>
            <a href="{{ url('rcorrectivo2') }}" class="list-group-item" data-parent="#SubSubMenu1a">Fallas por Sistemas</a>


          </div> 

      
        </div>
    </div>
    

  </div>
</div>
@endsection