<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'date', 'total', 'payment', 'phone', 'address', 'status', 'user_id'   
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function orderDetails()
    {
    	return $this->hasMany('App\Models\OrderDetail');
	}
}
