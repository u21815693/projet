<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class CourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cours')->insert([
            'intitule' => 'cour laravel',
            'user_id' => 2
        ]);

        DB::table('cours')->insert([
            'intitule' => 'cour javascript',
            'user_id' => 2
        ]);
    }
}
