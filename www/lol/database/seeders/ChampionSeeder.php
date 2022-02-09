<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\models\Category;
use App\Models\Champion;

class ChampionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $página_inicio = file_get_contents('http://ddragon.leagueoflegends.com/cdn/12.2.1/data/es_ES/champion.json');

        $array = json_decode($página_inicio, true);
        $campeones = $array['data'];
        $faker = Factory::create('es_ES');
        

        foreach($array['data'] as $campeon){
            Champion::create([
                'idchampion' => $campeon['id'],
                'title' => $campeon['title'],
                'blurb' => $campeon['blurb'],
                'image_full'=> 'http://ddragon.leagueoflegends.com/cdn/12.2.1/img/champion/' . $campeon['image']['full'],
                'image_sprite'=> 'http://ddragon.leagueoflegends.com/cdn/img/champion/loading/' . $campeon['id'] . '_0.jpg',
            ]);
            
        }
    }
}
