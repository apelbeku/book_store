<?php

use Illuminate\Database\Seeder;
use App\Model\Book;
use App\Model\Category;
use Faker\Factory;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();
        $faker = Factory::create('id_ID');
        $category = Category::count();
        $this->command->getOutput()->progressStart(100);

        for ($i=0; $i < 100; $i++) { 
        	
        	Book::create([
        		'category_id' => rand(1, $category),
        		'name' => $faker->word,
        		'price' => rand(10, 1000) * 1000,
        		'code_book' => $faker->randomLetter . $faker->randomLetter . rand(1111111111, 9999999999),
        	]);
        	$this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
