<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if (DB::table('comments')->count() == 0) {
    		DB::table('comments')->insert([
    			[
    				'title' => 'Beautifull phone!',
    				'message' => 'I will buy this phone for my daughter',
    				'product_id' => '1',
    			],
    			[
    				'title' => 'Beautifull phone!',
    				'message' => 'I will buy this phone for my daughter',
    				'product_id' => '2',
    			],
    		]);
    	}
    }
}
