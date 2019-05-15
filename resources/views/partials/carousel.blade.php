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
          <div class="model3D">
            <x3d id="element">
              <scene>
                <inline nameSpaceName="nintendo" mapDEFToID="true" url="{{asset('img/'.$product->slug.'/'.$product->slug.'-model.x3d')}}"></inline>
              </scene>
            </x3d>
          </div>
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
