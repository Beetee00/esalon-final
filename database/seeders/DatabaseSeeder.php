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
        $user = new \App\Models\User([
            'name' => 'Mary Mareya',
            'role' => 'Admin',
            'email' => 'tatendamarymareya@gmail.com',
            'salon_id' => 1,
            'password' => Hash::make('00000000'),
        ]);
        $salon = new \App\Models\Salon([
            'name' => 'Alvion Salon',
            'address' => 'Corner Jason Love, 123 Harare CBD',
        ]);

        //save salon first
        $salon->save();
        //save user then
        $user->save();

    }
}
