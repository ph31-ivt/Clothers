<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    protected $fillable = [
        'name', 'slug', 'description',
    ];

    public function products()
    {
    	return $this->hasMany('App\Product');
	}
}
