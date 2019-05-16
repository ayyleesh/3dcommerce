@extends('layouts.app')

@section('title')
Dashboard
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center mt-5 py-4">
    <div class="card-deck">
      <!-- Card -->
      <div class="card card-image gradientsolid mx-4">
        <a href="{{route('cart.index')}}">
          <div class="text-white text-center align-items-center py-5 px-5 rounded mb-0">
            <span class="white-text display-4"><i class="fas fa-shopping-cart"></i></span>
            <h4 class="card-title text-center mt-3">View Cart</h4>
          </div>
        </a>
      </div>
      <div class="card card-image gradientsolid mx-4">
        <a href="{{route('orders.index')}}">
          <div class="text-white text-center align-items-center py-5 px-5 rounded mb-0">
            <span class="white-text display-4"><i class="fas fa-file-invoice"></i></span>
            <h4 class="card-title text-center mt-3">View Order</h4>
          </div>
        </a>
      </div>
      <div class="card card-image gradientsolid mx-4">
        <a href="{{route('users.edit')}}">
          <div class="text-white text-center align-items-center py-5 px-5 rounded mb-0">
            <span class="white-text display-4"><i class="far fa-user"></i></span>
            <h4 class="card-title text-center mt-3">Manage Profile</h4>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
