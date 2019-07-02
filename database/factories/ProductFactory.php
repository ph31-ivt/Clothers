<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    $cateIds= Category::pluck('id'); // lấy list tất cả id bảng breeds
    // dd($breedIds);
    return [
    	'name' => 'Đầm'.rand(1,100),
    	'price'=>rand(200,2000),
    	'sale'=>rand(0,1),
    	'description'=>'Đầm Cao Cấp'.rand(1,100),
    	'category_id' => $faker->randomElement($cateIds),
    ];
});
