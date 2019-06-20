<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oder_Detail extends Model
{
    protected $table = 'order_detail';

    protected $fillable = [
        'order_id', 'product_id', 'quantity', 'price', 'description', 'pricesale',
    ];

    public function order()
    {
    	return $this->belongsTo('App\Models\Order');
    }

    public function product()
    {
    	return $this->belongsTo('App\Models\Product');
    }

}
