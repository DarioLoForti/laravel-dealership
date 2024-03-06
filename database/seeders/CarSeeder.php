<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car as Car;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<20; $i++){
            $newCar = new Car;

            $newCar->marca=$faker->word();
            $newCar->brand_id=random_int(1, 10);
            $newCar->modello=$faker->words(2, true);
            $newCar->prezzo=$faker->randomFloat(2, 5, 50);
            $newCar->alimentazione=$faker->randomElement(['Diesel', 'Benzina', 'Elettrica', 'GPL', 'Batteria', 'Ibrido']);
            $newCar->cilindrata=10*$faker->numberBetween(15, 1000);
            $newCar->cambio=$faker->randomElement(['Manuale', 'Automatico']);
            $newCar->porte=$faker->randomElement(['2', '4']);
            $newCar->posti=$faker->randomElement(['2', '4', '6', '8']);
            $newCar->tipologia=$faker->randomElement(['SUV', 'Utilitaria', 'Berlina', 'Station Wagon', 'Coupé', 'Van', 'Monovolume', 'Cabriolet']);
            $newCar->stato=$faker->randomElement(['nuovo', 'usato']);
            $newCar->anno_immatricolazione=$faker->dateTimeBetween('-10 year', '0 year');
            $newCar->km=1000*$faker->numberBetween(10, 1000);
            $names=explode(' ', $newCar->modello);
            $newCar->immagine=$faker->imageUrl(360, 360, $names[0], true, $names[1], true);
            $newCar->slug = Str::slug($newCar->modello, '-').'-'.$newCar->id;

            $newCar->save();
        }
    }
}
