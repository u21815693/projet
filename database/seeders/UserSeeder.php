<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom' => 'admin',
            'prenom' => 'admin',
            'type' => 'admin',
            'login' => 'admin',
            'mdp' => Hash::make('admin'),
            'formation_id' => null
        ]);


        DB::table('users')->insert([
            'nom' => 'enseignant',
            'prenom' => 'enseignant',
            'type' => 'enseignant',
            'login' => 'enseignant',
            'mdp' => Hash::make('enseignant'),
            'formation_id' => null
        ]);
  
    }
}
