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
        factory(Laboratory::class, 20)->create();
    }
}
