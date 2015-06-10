<?php

use Illuminate\Database\Seeder;
use CodeCommerce\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->truncate();

        $faker = Faker::create();

        foreach(range(1,15) as $i){
            Product::create([
                'name' =>$faker->word,
                'description' => $faker->sentence(),
                'price' => $faker->numberBetween(10,100),
                'featured' => $faker->boolean(),
                'recommend' => $faker->boolean()
            ]);
        }
    }
}