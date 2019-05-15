<!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-pause="true">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-example2" data-slide-to="1"></li>
    <li data-target="#video-carousel-example2" data-slide-to="2"></li>
    <li data-target="#video-carousel-example2" data-slide-to="3"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!-- First slide -->
    <div class="carousel-item active view">
      <!--Mask color-->
        <!--Video source-->
        <video class="video-fluid" controls>
          <source src="{{asset("img/$product->slug/videos/$product->slug-video01.mp4")}}" type="video/mp4" />
        </video>
    </div>
    <!-- /.First slide -->

    <!-- Second slide -->
    <div class="carousel-item">
      <!--Video source-->
      <video class="video-fluid" controls>
        <source src="{{asset("img/$product->slug/videos/$product->slug-video02.mp4")}}" type="video/mp4" />
      </video>
      <div class="mask rgba-purple-slight"></div>
    </div>
    <!-- /.Second slide -->

    <!-- Third slide -->
    <div class="carousel-item">
      <!--Video source-->
      <video class="video-fluid" controls>
        <source src="{{asset("img/$product->slug/videos/$product->slug-video03.mp4")}}" type="video/mp4" />
      </video>
      <div class="mask rgba-black-strong"></div>
    </div>
    <!-- /.Third slide -->

    <!-- Fourth slide -->
    <div class="carousel-item">
      <!--Video source-->
      <video class="video-fluid" controls>
        <source src="{{asset("img/$product->slug/videos/$product->slug-video04.mp4")}}" type="video/mp4" />
      </video>
      <div class="mask rgba-black-strong"></div>
    </div>
    <!-- /.Fourth slide -->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--Carousel Wrapper-->
