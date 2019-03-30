<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'billing_name', 'billing_total', 'error'];
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function product()
    {
      return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
