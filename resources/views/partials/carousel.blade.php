<!-- Slider -->
<ul id="lightSlider">
  @for ($i = 0; $i < 4; $i++)
    <li data-toggle="modal" data-target="#carouselGallery" data-thumb="{{asset("img/$product->slug/$product->slug-gallery0$i.png")}}">
        <a href="#lightbox" data-slide-to="{{$i}}"><img class="img-fluid" src="{{asset("img/$product->slug/$product->slug-gallery0$i.png")}}" class="img-thumbnail my-3"></a>
    </li>
  @endfor
  <li data-toggle="modal" data-target="#open3dModel" data-thumb="http://placehold.it/450x300?text=View+3D+Model">
      <a href="#lightbox" data-slide-to="4"><img class="img-fluid" src="http://placehold.it/450x300?text=View+3D+Model" class="img-thumbnail my-3"></a>
  </li>
</ul>
<div class="row">


<!-- Carousel Modal -->
</div>
<!-- <div class="modal fade" id="carouselGallery" tabindex="-1" role="dialog" aria-labelledby="carouselGalleryLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
					<ol class="carousel-indicators">
            @for ($i = 0; $i < 4; $i++)
						<li data-target="#lightbox" data-slide-to="{{$i}}"></li>
            @endfor
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
</div> -->

<!-- 3d Model Modal -->
<div class="modal fade right" id="open3dModel" tabindex="-1" role="dialog" aria-labelledby="open3dModelLabel" aria-hidden="true" data-backdrop='false'>
  <div class="modal-dialog modal-fluid" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <div class="row d-flex flex-row justify-content-center">
          <div class="mx-2">
            <p class="text-center mb-1">View:</p>
            <select id="cameraSelect" onchange="changeCamera()" class="browser-default custom-select">
              <option value="" selected>Default</option>
              <option value="1">Front</option>
              <option value="2">Back</option>
              <option value="3">Left</option>
              <option value="4">Right</option>
              <option value="5">Top</option>
              <option value="6">Bottom</option>
            </select>
          </div>
          <div class="mx-2">
            <p class="text-center mb-1">Animate:</p>
            <select id="animSelect" onchange="playAnim()" class="browser-default custom-select">
              <option value="" selected>Default</option>
              <option value="1">Rotate X</option>
              <option value="2">Rotate Y</option>
              <option value="3">Rotate Z</option>
            </select>
          </div>
          <div class="mx-2">
            <p class="text-center mb-1">Render:</p>
            <button id="renderToggle" type="button" class="btn btn-sm btn-secondary" onclick="toggleRender()" aria-pressed="false" autocomplete="off">Render</button>
          </div>
        </div>
        <div class="align-center" style="padding: 10px 25%;">
          <x3d id="element">
            <scene>
              <inline nameSpaceName="nintendo" mapDEFToID="true" url="{{asset('img/'.$product->slug.'/'.$product->slug.'-model.x3d')}}"></inline>
            </scene>
          </x3d>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$('#lightSlider').lightSlider({
  gallery: true,
  item: 1,
  loop: true,
  slideMargin: 0,
  thumbItem: 9
});
</script>
