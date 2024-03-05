<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        return \App\Models\User::create([
            'name' => 'Mary Mareya',
            'role' => 'Admin',
            'email' => 'tatendamarymareya@gmail.com',
            'password' => Hash::make('00000000'),
        ]);
    }
}
