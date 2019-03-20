@extends('master')

@section('title')
Product
@endsection

@section('content')
    <!-- banner -->
    <div class="productbanner h-50">
      <div class="full-bg-img flex-center">
          <div class="container text-center white-text">
              <div class="white-text text-center wow fadeInUp">
                  <h1>Product</h1>
              </div>
          </div>
      </div>
    </div>

    <div class="container w-75">
      <!-- product desc -->
      <div class="row my-5">
        <div class="col-md-8 align-middle text-right">
          <h3>Product name</h3>
          <h5>$price</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-4 h-25">
          <img class="img-fluid" src="http://placehold.it/300" alt="">
        </div>
      </div>

      <hr>
      <!-- carousel -->
      <div class="row my-5">
        <!--Carousel Wrapper-->
        <div class="col-md-12">
          <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-1z" data-slide-to="1"></li>
              <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <!--First slide-->
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://placehold.it/500x250/000000" alt="First slide">
              </div>
              <!--/First slide-->
              <!--Second slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="https://placehold.it/500x250/ff0000" alt="Second slide">
              </div>
              <!--/Second slide-->
              <!--Third slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="https://placehold.it/500x250/0000ff" alt="Third slide">
              </div>
              <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
          </div>
        </div>
      </div>

      <hr>

        <!-- 3d model -->
        <div class="row my-5">
          <div class="col-md-8 align-middle text-center">
            <img class="img-fluid" src="http://placehold.it/500" alt="">
            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-unique btn-sm">Left</button>
              <button type="button" class="btn btn-unique btn-sm">Top</button>
              <button type="button" class="btn btn-unique btn-sm">Right</button>
              <button type="button" class="btn btn-unique btn-sm">Reset</button>
            </div>
          </div>
          <div class="col-md-4 align-middle">
            <div class="align-center">
              <select class="browser-default custom-select">
                <option selected>Choose color</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <button class="btn btn-unique">add to cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
