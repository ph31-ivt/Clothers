<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
            'name' => 'pic.jpg',
            'slug' => '/images/product/ao1.jpg',
            'product_id' => 1,
            'status'=> 1,
            
        ],[
            'name' => 'pic1.jpg',
            'slug' => '/images/product/ao2.jpg',
            'product_id' => 2,
            'status'=> 1,
        ],
        [
            'name' => 'pic2.jpg',
            'slug' => '/images/product/ao1.jpg',
            'product_id' => 3,
            'status'=> 1,
        ],
        [
            'name' => 'pic3.jpg',
            'slug' => '/images/product/ao2.jpg',
            'product_id' => 4,
            'status'=> 1,
        ],
        [
            'name' => 'pic4.jpg',
            'slug' => '/images/product/ao1.jpg',
            'product_id' => 5,
            'status'=> 1,
        ],
        [
            'name' => 'pic5.jpg',
            'slug' => '/images/product/ao2.jpg',
            'product_id' => 6,
            'status'=> 1,
        ],
        [
            'name' => 'pic6.jpg',
            'slug' => '/images/product/ao1.jpg',
            'product_id' => 7,
            'status'=> 1,
        ],
        [
            'name' => 'pic7.jpg',
            'slug' => '/images/product/ao2.jpg',
            'product_id' => 8,
            'status'=> 1,
        ]
    ]);
    }
}