@extends('layouts.app')

@section('title')
Home
@endsection

@section('banner')
<!--full page banner-->
<div class="view intro-2">
  <div class="full-bg-img">
    <div class="mask flex-center">
      <div class="container text-center white-text">
        <div class="white-text text-center wow fadeInUp">
          <h1>Welcome</h1>
          <h5>to your only place to find high quality retro game consoles.</h5>
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
      <div class="col-md-4 mb-4 text-center">
        <h1 class="display-1 text-center purple-text"><i class="fas fa-shopping-bag"></i></h1>
      </div>
      <div class="col-md-8 mb-4 align-center text-center">
        <h3 class="mb-3">Why us</h3>
        <p>For those who missed your childhood game consoles, we have a solution for you. We built our own replicas of these game consoles. And we assure you that our replicas are 100% functional. You can pop in your old game cassette and play like it's 1990s!</p>
      </div>
    </div>
    <div class="row my-5">
      <div class="col-md-8 mb-4 align-center text-center">
        <h3 class="mb-3">Satisfaction Guarantee</h3>
        <p>We 3D print our models with the finest material. We made sure that everything is flawless and working, without any scratches. No matter your console is from 1980s or 2000s, you will get a 2 year guarantee with us.</p>
      </div>
      <div class="col-md-4 mb-4">
        <h1 class="display-1 text-center purple-text"><i class="fas fa-thumbs-up"></i></h1>
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
          <div class="card card-image overlay" style="background: url('{{asset("img/$product->slug/$product->slug-gallery00.png")}}');">
            <div class="text-white text-center mask d-flex align-items-center gradientmask py-5 px-4">
              <div>
                <h3 class="card-title pt-2"><strong>{{$product->name}}</strong></h3>
              </div>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </section>
</div>
@endsection
