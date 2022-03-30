<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

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
        $usuario = User::create([
            'name' => 'Antonio',
            'email' => 'angaro1926@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('antonio')
        ]);
        $usuario->assignRole('admin');
        User::factory(9)->create();
    }
}
