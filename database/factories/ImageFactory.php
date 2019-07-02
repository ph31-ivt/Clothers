<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(App\Models\Image::class, function (Faker $faker) {
    $cateIds= Product::pluck('id'); // lấy list tất cả id bảng breeds
    // dd($breedIds);
    return [
    	'name' => 'm1.png',
    	'product_id' => $faker->randomElement($cateIds),
    ];

});
