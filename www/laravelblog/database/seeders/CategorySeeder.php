<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
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
        //
        $faker = Factory::create('es_ES');

        for($i = 0 ; $i < 5 ; $i++){
            Category::create([
                'title' => $faker->word,
            ]);
        }
    }
}
