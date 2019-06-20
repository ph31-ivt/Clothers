<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_size extends Model
{
    protected $table = 'product_sizes';

    protected $fillable = [
        'product_id', 'quantity', 'name',
    ];

    public function product()
    {
    	return $this->belongsTo('App\Models\Product');
    }
}
