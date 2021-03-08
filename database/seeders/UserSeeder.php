<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ronny García Lorenzo',
            'email' => 'garcialorenzo1991@gmail.com',
            'password' => bcrypt('123asd')
        ])->assignRole('administrator');

        User::factory(10)->create();
    }
}
