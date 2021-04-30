<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            'intitule' => 'laravel'
        ]);

        DB::table('formations')->insert([
            'intitule' => 'javascript'
        ]);
    }
}
