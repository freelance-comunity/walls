<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
    <a class="nav-link" href="{{url('/home')}}">
      <i class="fa fa-fw fa-dashboard"></i>
      <span class="nav-link-text">Inicio</span>
    </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Clientes">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseClients" data-parent="#exampleAccordion">
      <i class="fa fa-fw fa-users"></i>
      <span class="nav-link-text">Clientes</span>
    </a>
    <ul class="sidenav-second-level collapse" id="collapseClients">
      <li>
        <a href="{{url('admin/clients')}}">Ver</a>
      </li>
      <li>
        <a href="{{url('admin/quotes')}}">Citas</a>
      </li>
    </ul>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Barberos">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseBarbers" data-parent="#exampleAccordion">
      <i class="fa fa-fw fa-male"></i>
      <span class="nav-link-text">Barberos</span>
    </a>
    <ul class="sidenav-second-level collapse" id="collapseBarbers">
      <li>
        <a href="{{url('admin/barbers')}}">Ver</a>
      </li>
    </ul>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Almacen">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAlmacen" data-parent="#exampleAccordion">
      <i class="fa fa-fw fa-cube"></i>
      <span class="nav-link-text">Almacen</span>
    </a>
    <ul class="sidenav-second-level collapse" id="collapseAlmacen">
      <li>
        <a href="{{url('admin/providers')}}">Proveedores</a>
      </li>
      <li>
        <a href="#">Productos</a>
      </li>
    </ul>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administración">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseManagment" data-parent="#exampleAccordion">
      <i class="fa fa-fw fa-cogs"></i>
      <span class="nav-link-text">Administración</span>
    </a>
    <ul class="sidenav-second-level collapse" id="collapseManagment">
      <li>
        <a href="{{url('admin/users')}}">Usuarios</a>
      </li>
      <li>
        <a href="{{url('admin/roles')}}">Roles</a>
      </li>
      <li>
        <a href="{{url('admin/permissions')}}">Permisos</a>
      </li>
    </ul>
  </li>
</ul>
