<div class="col-md-12 my-3 text-left">

  <div class="card">
    <div class="card-body">

      <!-- Shopping Cart table -->
      <div class="table-responsive">

        <table class="table product-table">

          <!-- Table head -->
          <thead class="mdb-color lighten-5">
            <tr>
              <th></th>
              <th class="font-weight-bold">
                <strong>Product</strong>
              </th>
              <th class="font-weight-bold">
                <strong>Color</strong>
              </th>
              <th></th>
              <th class="font-weight-bold">
                <strong>Price</strong>
              </th>
              <th class="font-weight-bold">
                <strong>QTY</strong>
              </th>
              <th class="font-weight-bold">
                <strong>Amount</strong>
              </th>
              <th></th>
            </tr>
          </thead>
          <!-- /.Table head -->

          <!-- Table body -->
          <tbody>

            <!-- table row -->
            @foreach (Cart::content() as $item)
            <tr>
              <th scope="row">
                <img src="http://placehold.it/100" alt="" class="img-fluid z-depth-0">
              </th>
              <td>
                <a href="{{route('product.show', $item->model->slug)}}"><h5 class="mt-3">
                  <strong>{{$item->model->name}}</strong>
                </h5></a>
                <p class="text-muted">Apple</p>
              </td>
              <td>White</td>
              <td></td>
              <td>{{$item->model->price}}</td>
              <td>
                <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
              </td>
              <td class="font-weight-bold">
                <strong>$800</strong>
              </td>
              <td>
                <form class=""  action="{{route('cart.destroy', $item->rowId)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove item">X
                </form>
                </button>
              </td>
            </tr>
            @endforeach
            <!-- /.Table row -->

            <!-- Subtotal row -->
            <tr>
              <td colspan="3"></td>
              <td>
                <h4 class="mt-2">
                  <strong>Total</strong>
                </h4>
              </td>
              <td class="text-right">
                <h4 class="mt-2">
                  <strong>{{Cart::subtotal()}}</strong>
                </h4>
              </td>
              <td colspan="3" class="text-right">
                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Complete purchase
                  <i class="fas fa-angle-right right"></i>
                </button>
              </td>
            </tr>
            <!-- /.Subtotal row -->

          </tbody>
          <!-- /.Table body -->

        </table>

      </div>
      <!-- /.Shopping Cart table -->

    </div>

  </div>

</div>
