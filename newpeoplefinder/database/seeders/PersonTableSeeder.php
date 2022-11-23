<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Person;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // i will call the factory 50 times
factory(Person::class,50)->create();

    }
}
