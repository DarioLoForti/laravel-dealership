<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use Faker\Generator as Faker;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $array = [
            'Lamborghini',
            'Ferrari',
            'Ford',
            'Fiat',
            'Lancia',
            'Maserati',
            'Bugatti',
            'Citroen',
            'Peugeut',
            'Hyunday'
        ];
        for ($i = 0; $i < 10; $i++) {

            $brand = new brand();

            $brand->nome = $array[$i];
            $brand->indirizzo = $faker->firstNameMale();
            $brand->mail = $faker->email();
            $brand->sito_web = $faker->url();
            $brand->telefono = $faker->phoneNumber();
            $brand->tipologia = $faker->word();
            $brand->nazione = $faker->state();

            $brand->save();
        }
    }
}
