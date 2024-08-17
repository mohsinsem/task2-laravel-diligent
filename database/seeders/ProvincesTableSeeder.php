<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            ['name' => 'Punjab'],
            ['name' => 'Sindh'],
            ['name' => 'Khyber Pakhtunkhwa'],
            ['name' => 'Balochistan'],
            ['name' => 'Gilgit-Baltistan'],
            ['name' => 'Azad Jammu and Kashmir'],
            ['name' => 'Islamabad Capital Territory'],
        ];

        DB::table('provinces')->insert($provinces);
    }
}
