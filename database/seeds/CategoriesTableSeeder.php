<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if (DB::table('categories')->count() == 0) {
    		DB::table('categories')->insert([
    			[
                    'name' => 'Iphone 6',
    				'short_desc' => 'Iphone 6',
                ],
                [
                    'name' => 'Iphone 7',
                    'short_desc' => 'Iphone 7',
                ],
            ]);
    	}
    }
}
