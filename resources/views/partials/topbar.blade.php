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
          <i class="fas fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdown">
          <a href="{{route('home')}}">Dashboard</a>
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
    <li class="nav-item">
      <a class="nav-link" href="{{route('cart.index')}}">
        <i class="fas fa-shopping-cart"></i> Cart <span class="badge badge-warning ml-2">{{Cart::count()}}</span>
      </a>
    </li>
    @endguest
  </ul>
</div>
</div>
</nav>
