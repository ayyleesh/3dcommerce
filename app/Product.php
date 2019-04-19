<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
    {
      return 'JPY'.number_format($this->price, 0, '.', ',');
    }
}
