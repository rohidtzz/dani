<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        User::Create([
            'name' => 'rohid ammar firdaus',
            'username' => 'rohid',
            'password' => bcrypt('rohid123'),
            'email' => 'gemersrasta@gmail.com',
            'no_hp' => '08667754123',
            'role' => 'admin'

        ]);

        User::Create([
            'name' => 'Dani',
            'username' => 'daniajaya',
            'password' => bcrypt('daniaja123'),
            'email' => '',
            'no_hp' => '08667754123',
            'role' => 'orang'

        ]);




    }
}
