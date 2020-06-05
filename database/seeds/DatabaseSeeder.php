<?php

use Illuminate\Database\Seeder;
use App\Laboratory;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Laboratory::create([
            'name' => 'Laboratorio de Mecanica Edificio O',
            'description' => $faker->sentence(6,true),
            'institution_id' => 1,
        ]);

        Laboratory::create([
            'name' => 'Laboratorio de Mecanica Edificio V',
            'description' => $faker->sentence(6,true),
            'institution_id' => 1,
        ]);

        Laboratory::create([
            'name' => 'Laboratorio de Mecanica Edificio M',
            'description' => $faker->sentence(6,true),
            'institution_id' => 1,
        ]);

        Laboratory::create([
            'name' => 'Laboratorio de Mecanica Edificio N',
            'description' => $faker->sentence(6,true),
            'institution_id' => 1,
        ]);
    }
}
