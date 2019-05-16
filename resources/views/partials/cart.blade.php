<div class="row">
  <div class="col-md-8 text-left table-responsive text-nowrap mb-5">
    <table class="table w-auto">
      @foreach (Cart::content() as $item)
      <tr>
        <th>
          <a href="{{route('product.show', $item->model->slug)}}">
            <img src="{{asset('img/'.$item->model->slug.'/'.$item->model->slug.'-gallery00.png')}}" alt="" class="img-fluid">
          </a>
        </th>
        <td class="align-middle">
          <div class="row">
            <a href="{{route('product.show', $item->model->slug)}}">
              <h5><strong class="indigo-text">{{$item->model->name}}</strong></h5>
            </a>
          </div>
          <div class="row my-0">
            <p>({{$item->model->details}})</p>
          </div>
          <div class="row">
            <p>Price: {{$item->model->presentPrice()}}</p>
          </div>
        </td>
        <td class="align-middle">
          <input type="number" value="{{$item->qty}}" data-id="{{$item->rowId}}" aria-label="Search" class="form-control quantity" style="width: 75px">
        </td>
        <td class="px-5 align-middle">
          <div class="row my-0">
            <p><strong>Subtotal:</strong></p>
          </div>
          <div class="row">
            <p>{{presentPrice($item->subtotal)}}</p>
          </div>
        </td>
        <td class="align-middle">
          <form class=""  action="{{route('cart.destroy', $item->rowId)}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove item">Delete
          </form>
          </button>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  <div class="col-md-4 text-center">
    <div class="card position-fixed">
      <div class="card-body grey lighten-3 table-responsive text-nowrap">
        <table class="table">
          <tr>
            <td class="py-3 pr-4 text-left">Subtotal</td>
            <td class="py-3 pl-4 text-right">JPY{{Cart::subtotal()}}</td>
          </tr>
          <tr>
            <td class="py-3 pr-4 text-left">Tax (8%)</td>
            <td class="py-3 pl-4 text-right">JPY{{Cart::tax()}}</td>
          </tr>
          <tr>
            <td class="py-3 pr-4 text-left"><strong>Total</strong></td>
            <td class="py-3 pl-4 text-right">JPY{{Cart::total()}}</td>
          </tr>
        </table>
        <a href="{{route('checkout.index')}}" class="btn btn-primary btn-outline-unique">
          Complete purchase
          <i class="fas fa-angle-right right"></i>
        </a>
      </div>
    </div>
  </div>
</div>

@section('extra-js')
  <script src="{{asset('js/app.js')}}"></script>
  <script type="text/javascript">
    (function() {
      const classname = document.querySelectorAll('.quantity')

      Array.from(classname).forEach(function(element){
        element.addEventListener('change', function(){
          const id = element.getAttribute('data-id');
          axios.patch(`/cart/${id}`, {
            quantity: this.value
          })
          .then(function(response) {
            console.log(response);
            window.location.href = '{{route('cart.index')}}'
          })
          .catch(function(error){
            console.log(error);
          });
        })
      })
    })();
  </script>
@endsection
