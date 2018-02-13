<?php

use Illuminate\Database\Seeder;

class RecepiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        DB::table('recepies')->insert([
            'title' => '20 წუთში მოსამძადებელი დილის საუზმე',
            'image' => 'img/layer1.png',
            'eyeimage' => 'img/eye.png',
            'ingrimage' => 'img/fork.png',
            'date' => '20 მაისი',
        ]);
        
    }
}
