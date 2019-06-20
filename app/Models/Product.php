<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'slug', 'description', 'price', 'quantity', 'sale', 'status', 'category_id', 'brand_id',
    ];

    public function brand()
    {
    	return $this->belongsTo('App\Models\Brand');
    }

    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }

    public function images()
    {
    	return $this->hasMany('App\Models\Image');
	}

    public function productSizes()
    {
        return $this->hasMany('App\Models\ProductSize');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }
    public function orders()
    {
        return $this->belongstoMany('App\Models\Order', 'orderdetails');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
