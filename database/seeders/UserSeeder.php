<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
/* Incriptar la contraseña */
use Illuminate\Support\Facades\Hash;

/* Modelo de la base de datos */
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Jesus',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Ana',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'name' => 'Jose',
            'password' => Hash::make('12345678')
        ]);
    }
}
