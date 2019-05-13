<!-- Gallery Thubmbail -->
@for ($i = 0; $i < 4; $i++)
<div class="col-lg-6 col-md-6 col-sm-6" data-toggle="modal" data-target="#modal">
  <a href="#lightbox" data-slide-to="{{$i}}"><img src="{{asset("img/$product->slug/$product->slug-gallery0$i.png")}}" class="img-thumbnail my-3"></a>
</div>
@endfor

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
					<ol class="carousel-indicators">
						<li data-target="#lightbox" data-slide-to="0"></li>
						<li data-target="#lightbox" data-slide-to="1"></li>
						<li data-target="#lightbox" data-slide-to="2"></li>
						<li data-target="#lightbox" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
            <div class="carousel-item active"><img src="{{asset("img/$product->slug/$product->slug-gallery00.png")}}" class="w-100"
							 alt="image00"></div>
            @for ($i = 1; $i < 4; $i++)
						<div class="carousel-item"><img src="{{asset("img/$product->slug/$product->slug-gallery0$i.png")}}" class="w-100"
							 alt="image0{{$i}}"></div>
            @endfor
					</div>
					<a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
					<a class="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
