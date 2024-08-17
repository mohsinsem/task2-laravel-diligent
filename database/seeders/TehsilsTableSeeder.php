<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TehsilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tehsils')->insert([

            //Bahawalnagar
            ['name' => 'Bahawalnagar', 'district_id' => 24],
            ['name' => 'Chishtian', 'district_id' => 24],
            ['name' => 'Fort Abbas', 'district_id' => 24],
            ['name' => 'Haroonabad', 'district_id' => 24],
            ['name' => 'Minchinabad', 'district_id' => 24],

            // Bahawalpur
            ['name' => 'Ahmadpur', 'district_id' => 23],
            ['name' => 'Bahawalpur', 'district_id' => 23],
            ['name' => 'Hasilpur', 'district_id' => 23],
            ['name' => 'Khairpur', 'district_id' => 23],
            ['name' => 'Yazman', 'district_id' => 23],
        ]);
    }
}
