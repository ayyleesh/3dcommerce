@extends('layouts.app');


@section('title')
Cart
@endsection

@section('content')
<div class="container w-75">
  @if (session()->has('success_message'))
    <div class="alert alert-success">
      {{session()->get('success_message')}}
    </div>
  @endif

  @if (Cart::count() > 0)
    <h3>{{Cart::count()}} item(s) in the shopping cart</h3>
    @include('partials.cart');
  @else
    <h3>No items in cart</h3>
  @endif
  
</div>
@endsection
