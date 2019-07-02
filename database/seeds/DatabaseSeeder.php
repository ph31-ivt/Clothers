<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(SizeTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(Product_sizeTableSeeder::class);
        $this->call(ImageTableSeeder::class);
    }
}
