@extends('layouts.app')
@include('partials.sidebar')

@section('title')
Order History
@endsection

@section('content')
<div class="container h-75">
  <div class="row justify-content-center">
    <div class="col-md-8 offset-md-2">
      <h3>Order History</h3>
      @foreach($orders as $order)
        <div>{{$order->id}}</div>
        <div>{{$order->billing_total}}</div>

        @foreach($order->product as $products)
          <div>{{$products->name}}</div>
        @endforeach
      @endforeach
    </div>
  </div>
</div>
@endsection
