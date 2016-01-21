<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    {!! Html::style('css/bootstrap/theme.min.css') !!}
    {!! Html::style('css/style.css') !!}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" style="margin: 0; overflow-x: hidden;">
  <!-- Fixed navbar -->
  <nav id="transp" class="navbar transparent navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}" style="font-weight: bold; font-family: Helvetica; color: #FFF; font-size: 21px;">Bílaþjónusta Fitjavíkur</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="{{ url('about') }}" style="font-family: Sans-Serif; color: #FFF; font-size: 16px;">Um Okkur</a></li>
          <li><a href="{{ url('contact') }}" style="font-family: Sans-Serif; color: #FFF; font-size: 16px;">Hafa Samband</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ url('status') }}" style="font-family: Sans-Serif; color: #FFF; font-size: 16px;">Staða Bílaviðgerðar</a></li>
          <?php if (Auth::user()) { ?>
            <li><a href="{{ url('logout') }}" style="font-family: Sans-Serif; color: #FFF; font-size: 16px;">Skrá út</a></li>
          <?php } ?>
          <?php if (Auth::guest()) { ?>
            <li><a href="{{ url('login') }}" style="font-family: Sans-Serif; color: #FFF; font-size: 16px;">Innskráning</a></li>
          <?php } ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
