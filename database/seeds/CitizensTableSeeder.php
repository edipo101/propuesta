<?php

use App\Citizen;
use Illuminate\Database\Seeder;

class CitizensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Citizen::class, 30)->create();
    }
}
