<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="mb-1 navbar fixed-top navbar-expand-lg navbar-dark brown">
      <a class="navbar-brand" href="#">[Website name]</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
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
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="fas fa-user"></i> Account
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="#">Login</a>
              <a class="dropdown-item" href="#">Register</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    @yield('content')

    <!-- bottombar -->
    <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark black">
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
