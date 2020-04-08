<!-- 

  nav selecionada https://codepen.io/azouaoui-med/pen/wpBadb
--->
  
 <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-dark">
  <div class="container">

    <a class="navbar-brand h1 mb-0" href="#">Inter Eventos</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
      <span class="navbar-toggler-icon"></span>        
    </button>

    <div class="collapse navbar-collapse" id="navbarSite">

      <ul class="navbar-nav" mr-auto>
       <li class="nav-item ">
        <a class="nav-link text-light" href="index.php">Início</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="login.php">Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Serviços</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Depoimentos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Sobre nós</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="forum.php">Forum</a>
      </li> 
  </div>
</div>
</nav> -->

<div class="page-wrapper chiller-theme">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand"> 
        <!-- <a href="#">A festa começa AQUI </a> -->
        <div id="close-sidebar" style="text-align: end;width: 100%;">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span> Geral </span>
          </li>
          <li>
            <a href="index.php">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
          </li>
          <?php if (isLoggedIn() == true) { ?>
          <li>
            <a href="index.php">
              <i class="fa fa-tachometer-alt"></i>
              <span>Perfil</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
          </li>
          <?php } ?>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Baladas</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Cadastrar Baladas</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
  