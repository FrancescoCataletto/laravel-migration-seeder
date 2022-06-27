<?php

use App\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $new_train = new Train();
            $new_train->azienda = $faker->word();
            $new_train->stazione_di_partenza = $faker->word();
            $new_train->stazione_di_arrivo = $faker->word();
            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->codice_treno = $faker->numberBetween(1,1000);
            $new_train->numero_carrozze = $faker->numberBetween(1,10);
            $new_train->in_orario = $faker->numberBetween(0,1);
            $new_train->cancellato = $faker->numberBetween(0,1);
            $new_train->save();
        }
    }
}
