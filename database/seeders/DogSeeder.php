<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \DateTime;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert([
            'name'=>"Barsik",
            'breed'=>"Akita",
            'birth_date'=> new DateTime(),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),

        ]);
    }
}
