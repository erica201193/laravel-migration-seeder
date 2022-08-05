<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        require_once 'vendor/autoload.php';
        $faker = Faker\Factory::create();

        for ($i=0; $i < 50; $i++) {
            
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = "12:30";
            $train->orario_arrivo = "15:50";
            $train->codice_treno = $faker->randomNumber(4, true);
            $train->numero_carrozze = $faker->numberBetween(5,10);
            $train->in_orario = 1;
            $train->cancellato = 0;
            $train->save();
            
        }
    }
}
