<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
        	[
            'name' => 'Chanel',
            'slug' => 'chanel',
            'description' => Str::random(30),
            
        ],[
            'name' => 'BlueXchange',
            'slug' => 'bluexchange',
            'description' => Str::random(30),
        ],
        [
            'name' => 'PT2000',
            'slug' => 'pt2000',
            'description' => Str::random(30),
        ],
        [
            'name' => 'Jara',
            'slug' => 'jara',
            'description' => Str::random(30),
        ],
        [
            'name' => 'New Balance',
            'slug' => 'new-balance',
            'description' => Str::random(30),
        ],
        [
            'name' => 'Jordan',
            'slug' => 'jordan',
            'description' => Str::random(30),
        ]
    ]);
    }
}
