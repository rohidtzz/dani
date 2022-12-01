<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Orang;

class OrangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orang::create([
            'name' => "syahroni",
            'slug' => "syah"
        ]);

        Orang::create([
            'name' => "Azrul",
            'slug' => "Majedub"
        ]);




    }
}
