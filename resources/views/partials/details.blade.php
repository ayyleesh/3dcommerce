<ul class="nav nav-pills mb-4 mt-5 justify-content-center" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-history" role="tab" aria-controls="pills-home" aria-selected="true">History</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-specs" role="tab" aria-controls="pills-profile" aria-selected="false">Specification</a>
  </li>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-history" role="tabpanel" aria-labelledby="pills-home-tab">
    <p>
      {{$product->history}}
    </p>
  </div>
  <div class="tab-pane fade" id="pills-specs" role="tabpanel" aria-labelledby="pills-profile-tab">
    <h5>Specification</h5>
    <table class="table">
      <tbody>
        <tr>
          <th scope="row">CPU</th>
          <td>{{$product->cpu}}</td>
        </tr>
        <tr>
          <th scope="row">Memory</th>
          <td>{{$product->memory}}</td>
        </tr>
        <tr>
          <th scope="row">Screen</th>
          <td>{{$product->screen}}</td>
        </tr>
        <tr>
          <th scope="row">Size</th>
          <td>{{$product->size}}</td>
        </tr>
        <tr>
          <th scope="row">Weight</th>
          <td>{{$product->weight}}</td>
        </tr>
        <tr>
          <th scope="row">Power</th>
          <td>{{$product->power}}</td>
        </tr>
        <tr>
          <th scope="row">battery life</th>
          <td>{{$product->batterylife}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
