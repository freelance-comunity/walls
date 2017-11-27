<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
    <a class="nav-link" href="{{url('/home')}}">
      <i class="fa fa-fw fa-dashboard"></i>
      <span class="nav-link-text">Inicio</span>
    </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
      <i class="fa fa-fw fa-users"></i>
      <span class="nav-link-text">Clientes</span>
    </a>
    <ul class="sidenav-second-level collapse" id="collapseComponents">
      <li>
        <a href="{{url('admin/clients')}}">Ver</a>
      </li>
      <li>
        <a href="#">Citas</a>
      </li>
    </ul>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
      <i class="fa fa-fw fa-male"></i>
      <span class="nav-link-text">Barberos</span>
    </a>
    <ul class="sidenav-second-level collapse" id="collapseExamplePages">
      <li>
        <a href="{{url('admin/barbers')}}">Ver</a>
      </li>
    </ul>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
      <i class="fa fa-fw fa-cube"></i>
      <span class="nav-link-text">Almacen</span>
    </a>
    <ul class="sidenav-second-level collapse" id="collapseMulti">
      <li>
        <a href="{{url('admin/providers')}}">Proveedores</a>
      </li>
      <li>
        <a href="#">Productos</a>
      </li>
    </ul>
  </li>
</ul>
