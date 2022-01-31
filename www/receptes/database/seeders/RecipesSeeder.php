<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use Faker\Factory;
use App\models\Category;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('es_ES');
        $categories = Category::all();

        foreach($categories as $category){
            for($i = 0; $i < 22 ; $i++){
                $image = basename($faker->image(storage_path('app/public', 600,400)));
                $recipe = Recipe::create([
                    'name' =>$faker->name(),
                    'image' => $image,
                    'description' => $faker->text(),
                    'prep_time' => '30min',
                    'ingredients' => implode(',',$faker->words(10)),
                    'instructions' => implode($faker->sentences(12)),
                    'user_id' => '1'
                ]);
                $category->recipes()->attach($recipe ->id);
            }
        }
    }
}
