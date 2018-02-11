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
    	for($i=1; $i<15; $i++) {
	        DB::table('products')->insert([
	            'name' => str_random(10),
	            'image' => str_random(10),
	            'seen' => str_random(10),
	            'ingredients' => str_random(10),
	        ]);
        }
    }
}
