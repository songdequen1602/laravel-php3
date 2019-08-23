<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
    	if (DB::table('products')->count() == 0) {
    		DB::table('products')->insert([
    			[
    				// 'id' => 1,
    				'name' => 'Iphone 6',
    				'price_new' => '4990000',
    				'price_old' => '5990000',
    				'cate_id' => '1',
                    'active' => '1',
    				'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore ',
    				'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris  ',
    			],
    			[
    				'name' => 'Iphone 6S new ',
    				'price_new' => '4990000',
    				'price_old' => '5990000',
                    'active' => '1',
    				'cate_id' => '1',
    				'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna ali ',
    				'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris nisi ',
    			],
    			[
    				'name' => 'Iphone 7',
    				'price_new' => '4990000',
    				'price_old' => '5790000',
                    'active' => '1',
    				'cate_id' => '2',
    				'short_desc' => 'Lorem ipsum dolor sit amet, cona. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris nisi ',
    				'detail' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna al ',
    			],
    		]);
    	}
    }
}
