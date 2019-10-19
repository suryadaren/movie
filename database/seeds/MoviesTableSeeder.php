<?php

use Illuminate\Database\Seeder;
use \App\Movie as Movie;
use Faker\Factory as Faker;

class MoviesTableSeeder extends Seeder
{

    public function run()
    {
    	$faker = Faker::create();
		$faker->addProvider(new \Faker\Provider\Youtube($faker));

        for ($i=0; $i < 10; $i++) { 
        	Movie::create([
        		"title" => $faker->sentence,
        		"synopsis" => $faker->text,
        		"release" => $faker->date($format = 'Y-m-d', $max = 'now'),
        		"rating" => 0,
        		"image" => $faker->imageUrl($width = 640, $height = 480),
        		"genre" => $faker->randomElement($array = array ('action','animation','science fiction','adventure','fantasy','horror','comedy','thriller','drama','romantic')),
        		"director" => $faker->name
        	]);
        }
    }
}
