<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = FakerFactory::create();

        for($i = 0;$i < 50; $i++){
            Student::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'address' => $faker->address
            ]);
        }


    }
}
