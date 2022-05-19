<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        $user=User::create([
            'name' => 'Daniel Andres Zarate',
            'email' => 'daniel.andres.zarate@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        $user->assignRole('Admin');


        User::factory(99)->create();
    }
}
