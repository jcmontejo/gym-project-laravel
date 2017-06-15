<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>FitnessWeb - Admin</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

  <!-- App CSS -->
  <link rel="stylesheet" href="{{ asset('/css/target-admin.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <div class="navbar">

    <div class="container">

      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-cogs"></i>
        </button>

        <a class="navbar-brand navbar-brand-image" href="{{ url('/') }}">
          <img src="{{ asset('/img/logo.png') }}" alt="Site Logo">
        </a>

      </div> <!-- /.navbar-header -->

      <div class="navbar-collapse collapse">



        <ul class="nav navbar-nav noticebar navbar-left">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell"></i>
              <span class="navbar-visible-collapsed">&nbsp;Notifications&nbsp;</span>
              <span class="badge">3</span>
            </a>

            <ul class="dropdown-menu noticebar-menu" role="menu">
              <li class="nav-header">
                <div class="pull-left">
                  Notifications
                </div>

                <div class="pull-right">
                  <a href="javascript:;">Mark as Read</a>
                </div>
              </li>

              <li>
                <a href="#" class="noticebar-item">
                  <span class="noticebar-item-image">
                    <i class="fa fa-cloud-upload text-success"></i>
                  </span>
                  <span class="noticebar-item-body">
                    <strong class="noticebar-item-title">Templates Synced</strong>
                    <span class="noticebar-item-text">20 Templates have been synced to the Mashon Demo instance.</span>
                    <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 12 minutes ago</span>
                  </span>
                </a>
              </li>

              <li>
                <a href="#" class="noticebar-item">
                  <span class="noticebar-item-image">
                    <i class="fa fa-ban text-danger"></i>
                  </span>
                  <span class="noticebar-item-body">
                    <strong class="noticebar-item-title">Sync Error</strong>
                    <span class="noticebar-item-text">5 Designs have been failed to be synced to the Mashon Demo instance.</span>
                    <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 minutes ago</span>
                  </span>
                </a>
              </li>

              <li class="noticebar-menu-view-all">
                <a href="#">View All Notifications</a>
              </li>
            </ul>
          </li>


          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope"></i>
              <span class="navbar-visible-collapsed">&nbsp;Messages&nbsp;</span>
            </a>

            <ul class="dropdown-menu noticebar-menu" role="menu">                
              <li class="nav-header">
                <div class="pull-left">
                  Messages
                </div>

                <div class="pull-right">
                  <a href="javascript:;">New Message</a>
                </div>
              </li>

              <li>
                <a href="#" class="noticebar-item">
                  <span class="noticebar-item-image">
                    <img src="./img/avatars/avatar-1-md.jpg" style="width: 50px" alt="">
                  </span>

                  <span class="noticebar-item-body">
                    <strong class="noticebar-item-title">New Message</strong>
                    <span class="noticebar-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>
                    <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 minutes ago</span>
                  </span>
                </a>
              </li>

              <li>
                <a href="#" class="noticebar-item">
                  <span class="noticebar-item-image">
                    <img src="./img/avatars/avatar-2-md.jpg" style="width: 50px" alt="">
                  </span>

                  <span class="noticebar-item-body">
                    <strong class="noticebar-item-title">New Message</strong>
                    <span class="noticebar-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>
                    <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 5 hours ago</span>
                  </span>
                </a>
              </li>

              <li class="noticebar-menu-view-all">
                <a href="#">View All Messages</a>
              </li>
            </ul>
          </li>


          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-exclamation-triangle"></i>
              <span class="navbar-visible-collapsed">&nbsp;Alerts&nbsp;</span>
            </a>

            <ul class="dropdown-menu noticebar-menu noticebar-hoverable" role="menu">                
              <li class="nav-header">
                <div class="pull-left">
                  Alerts
                </div>
              </li>

              <li class="noticebar-empty">                  
                <h4 class="noticebar-empty-title">No alerts here.</h4>
                <p class="noticebar-empty-text">Check out what other makers are doing on Explore!</p>                
              </li>
            </ul>
          </li>

        </ul>

        <ul class="nav navbar-nav navbar-right">   
          <li class="dropdown navbar-profile">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
              <img src="./img/avatars/avatar-1-xs.jpg" class="navbar-profile-avatar" alt="">
              <span class="navbar-profile-label">{{ Auth::user()->name }}</span>
              <i class="fa fa-caret-down"></i>
            </a>

            <ul class="dropdown-menu" role="menu">

              <li>
                <a href="#">
                  <i class="fa fa-user"></i> 
                  &nbsp;&nbsp;My Profile
                </a>
              </li>

              <li>
                <a href="#">
                  <i class="fa fa-dollar"></i> 
                  &nbsp;&nbsp;Plans &amp; Billing
                </a>
              </li>

              <li>
                <a href="#">
                  <i class="fa fa-cogs"></i> 
                  &nbsp;&nbsp;Settings
                </a>
              </li>

              <li class="divider"></li>

              <li>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>

          </ul>

        </li>

      </ul>







    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->

<div class="mainbar">

  <div class="container">

    <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
      <i class="fa fa-bars"></i>
    </button>

    <div class="mainbar-collapse collapse">

      <ul class="nav navbar-nav mainbar-nav">

        <li class="active">
          <a href="#">
            <i class="fa fa-dashboard"></i>
            Resumen
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-building-o"></i>
            Sucursales
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-tags"></i>
            Planes
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-user"></i>
            Empleados
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-group"></i>
            Socios
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-bar-chart-o"></i>
            Reportes
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-wrench"></i>
            Configuración
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            Punto de Venta
          </a>
        </li>
      </ul>

    </div> <!-- /.navbar-collapse -->   

  </div> <!-- /.container --> 

</div> <!-- /.mainbar -->


<div class="container">

  <div class="content">

    <div class="content-container">



      <div class="content-header">
      <h2 class="content-header-title">Tablero <i class=""></i></h2>
        <ol class="breadcrumb">
          <li><a href="./index.html">Home</a></li>
          <li><a href="javascript:;">Extra Pages</a></li>
          <li class="active">Blank Page</li>
        </ol>
        @yield('content')
      </div> <!-- /.content-header -->





    </div> <!-- /.content-container -->

  </div> <!-- /.content -->

</div> <!-- /.container -->


<footer class="footer">

  <div class="container">



  </div> <!-- /.container -->

</footer>

<script src="{{asset('/js/libs/jquery-1.10.1.min.js')}}"></script>
<script src="{{asset('/js/libs/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script src="{{asset('/js/libs/bootstrap.min.js')}}"></script>

  <!--[if lt IE 9]>
  <script src="./js/libs/excanvas.compiled.js"></script>
  <![endif]-->
  <!-- App JS -->
  <script src="{{asset('/js/target-admin.js')}}"></script>
  


  
</body>
</html>
