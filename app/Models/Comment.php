<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'user_id', 'product_id', 'name', 'email', 'content', 'date',
    ];
    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function product()
    {
    	return $this->belongsTo('App\Models\Product');
    }
}
