@extends('layouts.app')

@section('title')
Home
@endsection

@section('banner')
<!--full page banner-->
<div class="view intro-2">
  <div class="full-bg-img">
    <div class="mask rgba-black-light flex-center">
      <div class="container text-center white-text">
        <div class="white-text text-center wow fadeInUp">
          <h1>Hello</h1>
          <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('content')
<div class="container w-75">
  <!-- overview -->
  <section class="mt-5 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <h3 class="h3 text-center mb-5">About</h3>
    <div class="row my-5">
      <div class="col-md-6 mb-4">
        <img src="http://placehold.it/500x250" class="img-fluid z-depth-1-half" alt="">
      </div>
      <div class="col-md-6 mb-4 align-center text-center">
        <h3 class="mb-3">Title 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
    </div>
    <div class="row my-5">
      <div class="col-md-6 mb-4 align-center text-center">
        <h3 class="mb-3">Title 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
      <div class="col-md-6 mb-4">
        <img src="http://placehold.it/500x250" class="img-fluid z-depth-1-half" alt="">
      </div>
    </div>
  </section>
  <hr class="my-5">

  <section class="mb-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <h3 class="h3 text-center mb-5">Products</h3>
    <div class="row">
      @foreach ($products as $product)
      <div class="col-md-3 my-3">
        <a href="{{route('product.show', $product->slug)}}">
          <div class="card">
            <div class="view overlay">
              <img src="https://placehold.it/300x250" class="card-img-top" alt="">
              <div class="mask rgba-white-slight waves-effect waves-light"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title text-center">{{$product->name}}</h4>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </section>
</div>
@endsection
