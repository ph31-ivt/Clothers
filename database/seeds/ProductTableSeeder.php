<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name' => 'Áo Croptop Bo Eo',
            'slug' => 'Áo croptop bo eo',
            'description' => 'Áo kiểu croptop tay ngắn cổ tròn, eo rút dây trang trí.!!!',
            'price' => 320000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            
        ],
        [
            'name' => 'Áo Voan Cổ Tim Cột Eo',
            'slug' => 'Aó voan cổ tim cột eo',
            'description' => 'Áo kiểu cổ tròn tay ngắn, thân sau xếp ly và phối ren nhí.!',
            'price' => 350000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 1,
            'brand_id' => 1,
        ],
        [
            'name' => 'Áo Croptop Bo Eo',
            'slug' => 'Áo croptop bo eo',
            'description' => 'Áo kiểu croptop tay ngắn cổ tròn, eo rút dây trang trí.!!!',
            'price' => 320000,
            'sale' => 10,
            'status' => 1,
            'category_id' => 2,
            'brand_id' => 2,  
        ],
        [
            'name' => 'Áo Voan Cổ Tim Cột Eo',
            'slug' => 'Aó voan cổ tim cột eo',
            'description' => 'Áo kiểu cổ tròn tay ngắn, thân sau xếp ly và phối ren nhí.!',
            'price' => 350000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 1,
            'brand_id' => 1,
        ],
        [
            'name' => 'Áo Croptop Bo Eo',
            'slug' => 'Áo croptop bo eo',
            'description' => 'Áo kiểu croptop tay ngắn cổ tròn, eo rút dây trang trí.!!!',
            'price' => 320000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 3,
            'brand_id' => 1,  
        ],
        [
            'name' => 'Áo Voan Cổ Tim Cột Eo',
            'slug' => 'Aó voan cổ tim cột eo',
            'description' => 'Áo kiểu cổ tròn tay ngắn, thân sau xếp ly và phối ren nhí.!',
            'price' => 350000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 2,
            'brand_id' => 2,
        ],
        [
            'name' => 'Áo Croptop Bo Eo',
            'slug' => 'Áo croptop bo eo',
            'description' => 'Áo kiểu croptop tay ngắn cổ tròn, eo rút dây trang trí.!!!',
            'price' => 320000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 3,
            'brand_id' => 1,  
        ],
        [
            'name' => 'Áo Voan Cổ Tim Cột Eo',
            'slug' => 'Aó voan cổ tim cột eo',
            'description' => 'Áo kiểu cổ tròn tay ngắn, thân sau xếp ly và phối ren nhí.!',
            'price' => 350000,
            'sale' => 15,
            'status' => 1,
            'category_id' => 3,
            'brand_id' => 1,
        ]
    ]);
    }
}
