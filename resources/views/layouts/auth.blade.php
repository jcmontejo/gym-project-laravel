<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Login - FitnessWeb</title>

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
</head>

<body class="account-bg">
  <div class="navbar">
    <div class="container">
      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-cogs"></i>
        </button>

        <a class="navbar-brand navbar-brand-image" href="{{ url('home') }}">
          <img src="{{ asset('/img/logo.png') }}" alt="Site Logo">
        </a>

      </div> <!-- /.navbar-header -->

      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">   
        </ul>
      </div> <!--/.navbar-collapse -->

    </div> <!-- /.container -->

  </div> <!-- /.navbar -->

  <hr class="account-header-divider">

  <div class="account-wrapper">

    <div class="account-logo">
      <img src="{{ asset('/img/logo.png') }}" alt="Target Admin">
    </div>

    @yield('content')
    
  </div> <!-- /.account-wrapper -->
  <script src="{{asset('/js/libs/jquery-1.10.1.min.js')}}"></script>
  <script src="{{asset('/js/libs/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script src="{{asset('/js/libs/bootstrap.min.js')}}"></script>

  <!--[if lt IE 9]>
  <script src="./js/libs/excanvas.compiled.js"></script>
  <![endif]-->
  <!-- App JS -->
  <script src="{{asset('/js/target-admin.js')}}"></script>
  
  <!-- Plugin JS -->
  <script src="{{asset('/js/target-account.js')}}"></script>

  


  

</body>
</html>
