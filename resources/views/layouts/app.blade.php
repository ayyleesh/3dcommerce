<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') | [WebName]</title>

  <!-- Scripts -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet" >

</head>
<body>
  <nav class="mb-1 navbar fixed-top navbar-expand-lg navbar-dark brown">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        [WebName]
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Products</a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="#">Nintendo Gameboy Classic</a>
              <a class="dropdown-item" href="#">Nintendo Gameboy Advance SP</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-user"></i> Account
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
          </div>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
  </div>
</div>
</nav>

@yield('banner')

<main class="py-4 my-5">
  @yield('content')
</main>

<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark black mb-0">
  <a class="navbar-brand" href="#">© 2019</a>
  <ul class="navbar-nav ml-auto nav-flex-icons">
    <li class="nav-item">
      <a class="nav-link waves-effect waves-light">
        <i class="fab fa-twitter"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link waves-effect waves-light">
        <i class="fab fa-google-plus-g"></i>
      </a>
    </li>

  </ul>
</nav>
<!--/.Navbar -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
</body>
</html>