<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([

            // Lahore
            ['name' => 'Lahore', 'division_id' => 1],
            ['name' => 'Cantt (Cantonment)', 'division_id' => 1],
            ['name' => 'Gulberg', 'division_id' => 1],
            ['name' => 'Model Town', 'division_id' => 1],
            ['name' => 'Shalimar', 'division_id' => 1],
            ['name' => 'Samanabad', 'division_id' => 1],
            ['name' => 'Ravi Road', 'division_id' => 1],
            ['name' => 'Nishat', 'division_id' => 1],
            ['name' => 'Kacha', 'division_id' => 1],

            // Rawalpindi
            ['name' => 'Rawalpindi', 'division_id' => 2],
            ['name' => 'Chaklala', 'division_id' => 2],
            ['name' => 'Murree', 'division_id' => 2],
            ['name' => 'Kahuta', 'division_id' => 2],
            ['name' => 'Taxila', 'division_id' => 2],
            ['name' => 'Wah Cantt', 'division_id' => 2],
            ['name' => 'Kallar Syedan', 'division_id' => 2],
            ['name' => 'Dhamial', 'division_id' => 2],
            ['name' => 'Pind Dadan Khan', 'division_id' => 2],

            // Faisalabad
            ['name' => 'Faisalabad', 'division_id' => 3],
            ['name' => 'Jaranwala', 'division_id' => 3],
            ['name' => 'Sadiqabad', 'division_id' => 3],
            ['name' => 'Satyana', 'division_id' => 3],

            // Bahawalpur
            ['name' => 'Bahawalpur', 'division_id' => 4],
            ['name' => 'Bahawalnagar', 'division_id' => 4],
            ['name' => 'Rahim Yar Khan', 'division_id' => 4],

             // Dera Ghazi
             ['name' => 'Dera Ghazi Khan', 'division_id' => 5],
             ['name' => 'Jampur', 'division_id' => 5],
             ['name' => 'Kot Addu', 'division_id' => 5],
             ['name' => 'Layyah', 'division_id' => 5],
             ['name' => 'Muzaffargarh', 'division_id' => 5],
             ['name' => 'Rajanpur', 'division_id' => 5],

             // Gujranwala
             ['name' => 'Gujranwala', 'division_id' => 6],
             ['name' => 'Hafizabad', 'division_id' => 6],
             ['name' => 'Gujrat', 'division_id' => 6],

            // Gujrat
            ['name' => 'Kharian', 'division_id' => 7],
            ['name' => 'Sarai', 'division_id' => 7],
            ['name' => 'Dinga', 'division_id' => 7],

            // Mianwali
            ['name' => 'Mianwali', 'division_id' => 8],
            ['name' => 'Isakhel', 'division_id' => 8],
            ['name' => 'Piplan', 'division_id' => 8],

            // Mianwali
            ['name' => 'Multan', 'division_id' => 9],
            ['name' => 'Vehari', 'division_id' => 9],
            ['name' => 'Khanewal', 'division_id' => 9],

            // Sahiwal
            ['name' => 'Sahiwal', 'division_id' => 10],
            ['name' => 'Okara', 'division_id' => 10],
            ['name' => 'Pakpattan', 'division_id' => 10],

            // Sargodha
            ['name' => 'Sargodha', 'division_id' => 11],
            ['name' => 'Mianwali', 'division_id' => 11],
            ['name' => 'Khushab', 'division_id' => 11],
            ['name' => 'Bhakkar', 'division_id' => 11],

            // Karachi
            ['name' => 'Korangi', 'division_id' => 12],
            ['name' => 'East', 'division_id' => 12],
            ['name' => 'West', 'division_id' => 12],
            ['name' => 'South', 'division_id' => 12],
            ['name' => 'Malir', 'division_id' => 12],
            ['name' => 'Central', 'division_id' => 12],

            // Hyderabad
            ['name' => 'Hyderabad', 'division_id' => 13],
            ['name' => 'Tando Mohammad Khan', 'division_id' => 13],
            ['name' => 'Matiari', 'division_id' => 13],
            ['name' => 'Tando Allahyar', 'division_id' => 13],
            ['name' => 'Badin', 'division_id' => 13],
            ['name' => 'Dadu', 'division_id' => 13],
            ['name' => 'Jamshoro', 'division_id' => 13],
            ['name' => 'Thatta', 'division_id' => 13],
            ['name' => 'Sujawal', 'division_id' => 13],

            // Add more districts as needed
        ]);
    }
}
