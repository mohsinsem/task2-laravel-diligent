<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = [
            // Punjab
            ['name' => 'Lahore', 'province_id' => 1],
            ['name' => 'Rawalpindi', 'province_id' => 1],
            ['name' => 'Faisalabad', 'province_id' => 1],
            ['name' => 'Bahawalpur', 'province_id' => 1],
            ['name' => 'Dera Ghazi Khan', 'province_id' => 1],
            ['name' => 'Gujranwala', 'province_id' => 1],
            ['name' => 'Gujrat', 'province_id' => 1],
            ['name' => 'Mianwali', 'province_id' => 1],
            ['name' => 'Multan', 'province_id' => 1],
            ['name' => 'Sahiwal', 'province_id' => 1],
            ['name' => 'Sargodha', 'province_id' => 1],
            // Sindh
            ['name' => 'Karachi', 'province_id' => 2],
            ['name' => 'Hyderabad', 'province_id' => 2],
            ['name' => 'Sukkur', 'province_id' => 2],
            ['name' => 'Larkana', 'province_id' => 2],
            ['name' => 'Mirpur Khas', 'province_id' => 2],
            ['name' => 'Shaheed Benazirabad', 'province_id' => 2],
            // Khyber Pakhtunkhwa
            ['name' => 'Peshawar', 'province_id' => 3],
            ['name' => 'Mardan', 'province_id' => 3],
            ['name' => 'Dera Ismail Khan', 'province_id' => 3],
            ['name' => 'Bannu', 'province_id' => 3],
            ['name' => 'Hazara', 'province_id' => 3],
            ['name' => 'Kohat', 'province_id' => 3],
            ['name' => 'Malakand', 'province_id' => 3],
            // Balochistan
            ['name' => 'Quetta', 'province_id' => 4],
            ['name' => 'Kalat', 'province_id' => 4],
            ['name' => 'Makran', 'province_id' => 4],
            ['name' => 'Loralai', 'province_id' => 4],
            ['name' => 'Naseerabad', 'province_id' => 4],
            ['name' => 'Rakhshan', 'province_id' => 4],
            ['name' => 'Sibi', 'province_id' => 4],
            ['name' => 'Zhob', 'province_id' => 4],
            // Gilgit-Baltistan
            ['name' => 'Gilgit', 'province_id' => 5],
            ['name' => 'Baltistan', 'province_id' => 5],
            ['name' => 'Diamer', 'province_id' => 5],
            // Azad Jammu and Kashmir
            ['name' => 'Muzaffarabad', 'province_id' => 6],
            ['name' => 'Mirpur', 'province_id' => 6],
            ['name' => 'Poonch', 'province_id' => 6],
            // Islamabad Capital Territory
            ['name' => 'Islamabad', 'province_id' => 7],
        ];

        DB::table('divisions')->insert($divisions);
    }
}
