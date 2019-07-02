<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
                'name' => 'Nguyen Dang Nam',
                'email' => 'namdangnguyen09@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => '2',
            ],
            [
                'name' => 'Dang Van Linh',
                'email' => 'vanlinh08mt@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => '2',
            ]
        ]);
    }
}
