@extends('layouts.app')

@section('title')
Checkout
@endsection

@section('content')
<div class="container w-75">
  <div class="row">
    <div class="col-md-7">
      <form>
        <h3>Shipping Details</h3>
        <sub>*for privacy reasons all informations on this page will not be recorded</sub>
        <!-- Grid row -->
        <div class="form-row">
          <!-- Grid column -->
          <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
              <input type="text" class="form-control" id="firstnameinput">
              <label for="firstnameinput">First name</label>
            </div>
          </div>
          <!-- /.Grid column -->

          <!-- Grid column -->
          <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
              <input type="text" class="form-control" id="lastnameinput">
              <label for="lastnameinput">Last name</label>
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
              <input type="text" class="form-control" id="addressinput">
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
              <input type="text" class="form-control" id="address2input">
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
              <input type="text" class="form-control" id="cityinput" required>
              <label for="cityinput">City</label>
            </div>
          </div>
          <!-- /.Grid column -->

          <!-- Grid column -->
          <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
              <input type="text" class="form-control" id="zipcode" required>
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
              <input type="text" class="form-control" id="cardnumberinput" required>
              <label for="cardnumberinput">Card number</label>
            </div>
          </div>
        </div>
        <!-- /.Grid row -->

        <!-- Grid row -->
        <div class="form-row">
          <div class="col-md-12">
            <div class="md-form form-group">
              <input type="text" class="form-control" id="cardholdernameinput" required>
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
              <input type="password" class="form-control" id="cvvinput" required>
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
                  <input type="text" class="form-control" id="expirymonth" MM>
                  <label for="expirymonth">MM</label>
                </div>
                <!-- Grid column -->
                <div class="col-md-3">
                  <input type="text" class="form-control" id="expiryyear" MM>
                  <label for="expiryyear">YY</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.Grid row -->
        <button type="submit" class="btn btn-primary btn-lg">Check Out</button>
      </form>
    </div>
    <div class="col-md-5">
      <h3>Your Order</h3>
      <!-- Table header -->
      <div class="row">
        <div class="col-md-8">
          <h5 class="text-center">Item name</h5>
        </div>
        <div class="col-md-2">
          <h5>Qty.</h5>
        </div>
        <div class="col-md-2">
          <h5>Price</h5>
        </div>
      </div>
      <!-- /.Table header -->

      <!-- Table content -->
      <hr class="mt-0">
      @foreach(Cart::content() as $item)
        <div class="row">
          <div class="col-md-4">
            <img src="http://placehold.it/100" alt="">
          </div>
          <div class="col-md-4">
            {{$item->model->name}}
          </div>
          <div class="col-md-2">
            {{$item->qty}}
          </div>
          <div class="col-md-2">
            {{$item->subtotal}}
          </div>
        </div>
      <hr>
      @endforeach
      <!-- /.Table content -->

      <!-- Subtotal -->
      <div class="row">
        <div class="col-md-10">
          <h5 class="text-left">Total</h5>
        </div>
        <div class="col-md-2">
          <h5 class="text-right">{{$item->total}}</h5>
        </div>
      </div>
      <!-- /.Subtotal -->

    </div>
  </div>
</div>
<!-- Extended material form grid -->
@endsection
