<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú de Navegación</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="">                 
          <a href="{{ url(route('dashboard'))}}">
            <i class="fa  fa-home"></i> <span>Dashboard</span>
          </a>                 
        </li>            
        
        <li class="">                 
          <a href="{{ url(route('test_vista'))}}">
            <i class="fa fa-graduation-cap"></i> <span>Prueba</span>
          </a>                 
        </li>

        <li class="">                 
          <a href="{{ url(route('historial_vista'))}}">
            <i class="fa fa-line-chart"></i> <span>Historial</span>         
          </a>                 
        </li>

        <li class="">                 
          <a href="{{ url(route('cita_vista'))}}">
            <i class="fa fa-line-chart"></i> <span>Cita</span>         
          </a>                 
        </li>

        <!--<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>-->
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
