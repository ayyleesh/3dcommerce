@extends('layouts.app')

@section('title')
Checkout
@endsection

@section('extra-css')
<script src="https://js.stripe.com/v3" charset="utf-8"></script>
@endsection

@section('content')
<div class="container w-75">
  <div class="row">
    <div class="col-md-7">
      <form action="{{route('checkout.store')}}" method="POST">
        {{csrf_field()}}
        <h3>Shipping Details</h3>
        <sub>*for privacy reasons all informations on this page will not be recorded</sub>
        <!-- Grid row -->
        <div class="form-row">
          <!-- Grid column -->
          <div class="col-md-12">
            <!-- Material input -->
            <div class="md-form form-group">
              <input type="text" class="form-control" id="nameinput" name="name" value="">
              <label for="firstnameinput">Full name</label>
            </div>
          </div>
          <!-- /.Grid column -->
        </div>
        <!-- /.Grid row -->

        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-12">
            <!-- Material input -->
            <div class="md-form form-group">
              <input type="text" class="form-control" id="addressinput" name="address" value="">
              <label for="addressinput">Address</label>
            </div>
          </div>
          <!-- /.Grid column -->
        </div>
        <!-- /.Grid row -->

        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-12">
            <!-- Material input -->
            <div class="md-form form-group">
              <input type="text" class="form-control" id="address2input" name="address2" value="">
              <label for="address2input">Address 2</label>
            </div>
          </div>
          <!-- /.Grid column -->
        </div>
        <!-- /.Grid row -->

        <!-- Grid row -->
        <div class="form-row">
          <!-- Grid column -->
          <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
              <input type="text" class="form-control" id="cityinput" name="city" value="">
              <label for="cityinput">City</label>
            </div>
          </div>
          <!-- /.Grid column -->

          <!-- Grid column -->
          <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
              <input type="text" class="form-control" id="zipcode" name="zip" value="">
              <label for="zipcode">Zip</label>
            </div>
          </div>
          <!-- /.Grid column -->
        </div>
        <!-- /.Grid row -->

        <hr>
        <h3>Payment Details</h3>
        <!-- Grid row -->
        <div class="form-row">
          <div class="col-md-12">
            <div class="md-form form-group">
              <input type="text" class="form-control" id="cardnumberinput" name="cardnumber" value="">
              <label for="cardnumberinput">Card number</label>
            </div>
          </div>
        </div>
        <!-- /.Grid row -->

        <!-- Grid row -->
        <div class="form-row">
          <div class="col-md-12">
            <div class="md-form form-group">
              <input type="text" class="form-control" id="cardholdernameinput" name="cardname" value="">
              <label for="cardholdernameinput">Cardholder name</label>
            </div>
          </div>
        </div>
        <!-- /.Grid row -->

        <!-- Grid row -->
        <div class="form-row">
          <!-- Grid column -->
          <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
              <input type="password" class="form-control" id="cvvinput" name="cvv" value="">
              <label for="cvvinput">CVV</label>
            </div>
          </div>
          <!-- Grid column -->
          <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
              <div class="form-row">
                <!-- Grid column -->
                <div class="col-md-6 ">
                  <span class="my-0 py-0">Expiry month:</span>
                </div>
                <!-- Grid column -->
                <div class="col-md-3">
                  <input type="text" class="form-control" id="expirymonth" name="expm" value="">
                  <label for="expirymonth">MM</label>
                </div>
                <!-- Grid column -->
                <div class="col-md-3">
                  <input type="text" class="form-control" id="expiryyear" name="expy" value="">
                  <label for="expiryyear">YY</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.Grid row -->

    </div>
    <div class="col-md-5 text-center">
      <div class="card position-fixed">
        <div class="card-body grey lighten-3 table-responsive text-nowrap">
          <table class="table">
            <!-- Cart items -->
            @foreach(Cart::content() as $item)
            <tr>
              <td>
                <img src="{{asset('img/'.$item->model->slug.'/'.$item->model->slug.'-gallery00.png')}}" alt="" width="100px">
              </td>
              <td>
                <div class="row">
                  <strong>{{$item->model->name}}</strong>
                </div>
                <div class="row">
                  <small>({{$item->model->details}})</small>
                </div>
                <div class="row">
                  <small>Price: {{$item->model->presentPrice()}}</small>
                </div>
              </td>

              <td>x {{$item->qty}}</td>
              <td>{{presentPrice($item->subtotal)}}</td>
            </tr>
            @endforeach
            <!-- subtotals -->
            <tr>
              <td colspan="2" class="py-3 pr-4 text-left">Subtotal</td>
              <td colspan="2" class="py-3 pl-4 text-right">{{presentPrice(Cart::subtotal())}}</td>
            </tr>
            <tr>
              <td colspan="2" class="py-3 pr-4 text-left">Tax (8%)</td>
              <td colspan="2" class="py-3 pl-4 text-right">{{presentPrice(Cart::tax())}}</td>
            </tr>
            <tr>
              <td colspan="2" class="py-3 pr-4 text-left"><h5>Total</h5></td>
              <td colspan="2" class="py-3 pl-4 text-right"><h5>{{presentPrice(Cart::total())}}</h5></td>
            </tr>
          </table>
          <button type="submit" class="btn btn-outline-unique btn-lg btn-block">Check Out</button>
        </form>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Extended material form grid -->
@endsection
