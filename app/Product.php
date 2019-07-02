<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'slug', 'description', 'price', 'quantity', 'sale', 'status', 'category_id', 'brand_id',
    ];

    public function brand()
    {
    	return $this->belongsTo('App\Brand');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function images()
    {
    	return $this->hasMany('App\Image');
	}

	public function sizes()
    {
    	return $this->belongstoMany('App\Size', 'product_sizes');
	}
    public function productSizes()
    {
        return $this->hasMany('App\ProductSize');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }
    public function orders()
    {
        return $this->belongstoMany('App\Order', 'orderdetails');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


}
