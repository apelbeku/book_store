<?php

use Illuminate\Database\Seeder;
use App\Model\Category;
use Faker\Factory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Category::truncate();
    	$faker = Factory::create('id_ID');

    	for ($i=0; $i < 10; $i++) { 

    		Category::create([
    			'name' => $faker->word, 
    		]);
    	}
    }
}
