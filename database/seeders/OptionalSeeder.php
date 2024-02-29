<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Optional;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $optional = new Optional();
    
            $optional->nome = $faker->sentence(3); 
            $optional->descrizione = $faker->paragraph(1); 
            $optional->prezzo = $faker->randomFloat(2, 200, 2000); 
    
            $optional->save();
        }
    }
}
