<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //completar con contraseñas faciles
        $user = new User();

        $user->name = 'Alter';
        $user->email = 'Alter@gmail.com';
        $user->password = 1234;//encriptar mas adelante

        $user->save();

    }
}
