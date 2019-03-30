<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('checkout');
  }

  public function store(Request $request)
  {
    $order = Order::create([
      'user_id' => auth()->user() ? auth()->user()->id : null,
      'billing_name' => $request->name,
      'billing_total' => Cart::total(),
      'error' => null
    ]);

    foreach (Cart::content() as $item) {
      OrderProduct::create([
        'order_id' => $order->id,
        'product_id' => $item->model->id,
        'quantity' => $item->qty
      ]);
    }
    return view('thank');
  }
}
