<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
            'sex' => 'nam',
            'birthday' => '01-01-1992',
            'phone' => '0902342423',
            'address' => '93 Nui Thanh, Hai Chau, Da Nang',
            'avatar' => '/images/avatar/user-default.jpg',
            'role_id' => '2',
        ],[
            'name' => 'Dang Van Linh',
            'email' => 'vanlinh@gmail.com',
            'password' => bcrypt('123456'),
            'sex' => 'nam',
            'birthday' => '01-12-1993',
            'phone' => '0773423232',
            'address' => '104 Ong Ich Khiem, Hai Chau, Da Nang',
            'avatar' => '/images/avatar/user-default.jpg',
            'role_id' => '2',
        ]
        ]);
    }
}
