@extends('layouts.app')

@section('title')
{{$product->name}}
@endsection

@section('extra-css')
<link rel="stylesheet" href="{{asset('css/x3dom.css')}}">
<link rel="stylesheet" href="{{asset('css/lightslider.css')}}">
<script src="{{asset('js/lightslider.js')}}" charset="utf-8"></script>

@endsection

@section('banner')
<!-- banner -->
<div class="productbanner h-50" style="background: url('{{asset("img/$product->slug/$product->slug-banner.png")}}')">
  <div class="full-bg-img flex-center">
    <div class="container text-center white-text">
      <div class="white-text text-center wow fadeInUp">
        <h1>{{$product->name}}</h1>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="container w-75">
  <!-- product desc -->
  <div class="row my-5">
    <div class="col-md-6 align-middle text-right px-4">
      <h3>{{$product->name}}</h3>
      <h5>{{$product->price}}</h5>
      <p>{{$product->description}}</p>
      <form class="" action="{{route('cart.store')}}" method="post">
        {{ csrf_field()}}
        <input type="hidden" name="id" value="{{$product->id}}">
        <input type="hidden" name="name" value="{{$product->name}}">
        <input type="hidden" name="price" value="{{$product->price}}">
        <button type="submit" class="btn btn-unique">add to cart</button>
      </form>
    </div>
    <div class="col-md-6 px-4">
      @include('partials.carousel')
    </div>
  </div>
</div>

  <hr>
  <h3 class="text-center">Gallery</h3>
  <div class="row my-5">
  <!-- carousel -->
    @include('partials.gallery')
  </div>

  <hr>
</div>
@endsection

@section('extra-js')
<script src="{{asset('js/x3dom.js')}}" charset="utf-8"></script>
<script src="{{asset('js/control3dModel.js')}}" charset="utf-8"></script>
@endsection
