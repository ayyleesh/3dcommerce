@extends('layouts.app')
@include('partials.sidebar')

@section('title')
Order History
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-9 offset-md-3 mt-5">
      <h3>Order History</h3>
      @foreach($orders as $order)
      <table class="table my-5">
        <th scope="col" colspan="2"><strong>Order ID:</strong> {{$order->id}}</th>
        <th scope="col" colspan="2"><strong>Ordered date:</strong> {{date('d F Y', strtotime($order->created_at))}}</th>
        <tbody>
          @foreach($order->product as $products)
          <tr>
            <td>
              <div class="row px-3">
                <img src="{{asset('img/'.$products->slug.'/'.$products->slug.'-gallery00.png')}}" alt="" class="img-fluid" style="height: 100px">

              </div>
            </td>
            <td>
              <div class="row">
                <h5>{{$products->name}}</h5>
              </div>
              <div class="row">
                <p>({{$products->details}})</p>
              </div>
              <div class="row">
                <p>{{$products->presentPrice()}}</p>
              </div>
            </td>
            <td>x {{$products->pivot->quantity}}</td>
            <td>{{presentPrice($products->pivot->quantity * $products->price)}}</td>
          </tr>
          @endforeach
          <tr class="grey lighten-3">
            <td class="text-right" colspan="3"><h5>Total:</h5></td>
            <td><h5>{{presentPrice($order->billing_total)}}</h5></td>
          </tr>
        </tbody>
      </table>
      @endforeach
    </div>
  </div>
</div>
@endsection
