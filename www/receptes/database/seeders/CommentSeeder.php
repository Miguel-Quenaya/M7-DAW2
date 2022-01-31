<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\User;
use Faker\Factory;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('es_ES');

        $recipes = Recipe::all();

        foreach($recipes as $recipe){
            $users = User::inRandomOrder()->limit(rand(3,7))->get();

            foreach($users as $user){
                Comment::create([
                    'text' => $faker->sentence(rand(6, 20)),
                    'author_id' => $recipe->id,
                    'recipe_id' => $user->id,
                ]);
            }
        }
    }
}
