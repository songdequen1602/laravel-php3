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
        if (DB::table('users')->count() == 0) {
    		DB::table('users')->insert([
    			[
                    'name' => 'Quangtv',
    				'email' => 'quangt123v@gmail.com',
    				'password' => '123',
    				'address' => 'Ha Noi',
    				'phone_number' => '01234567',
                ],
                [
                    'name' => 'QTV',
                    'email' => 'quangtv@gmail.com',
                    'password' => '123',
                    'address' => 'Ha Noi',
                    'phone_number' => '012345678',
                ],
            ]);
    	}
    }
}
