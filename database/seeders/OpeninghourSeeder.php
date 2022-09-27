<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class OpeninghourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('opening_hours')->insert([
            [
                'days' => 'อาทิตย์',
                'time_Start_1' => '00:00',
                'time_End_1' => '00:00',
                'time_Start_2' => '',
                'time_End_2' => '',
            ],
            [
                'days' => 'จันทร์',
                'time_Start_1' => '00:00',
                'time_End_1' => '00:00',
                'time_Start_2' => '',
                'time_End_2' => '',
            ],
            [
                'days' => 'อังคาร',
                'time_Start_1' => '13:00',
                'time_End_1' => '18:30',
                'time_Start_2' => '',
                'time_End_2' => '',
            ],
            [
                'days' => 'พุธ',
                'time_Start_1' => '13:00',
                'time_End_1' => '18:30',
                'time_Start_2' => '',
                'time_End_2' => '',
            ],
            [
                'days' => 'พฤหัสบดี',
                'time_Start_1' => '13:00',
                'time_End_1' => '18:30',
                'time_Start_2' => '',
                'time_End_2' => '',
            ],
            [
                'days' => 'ศุกร์',
                'time_Start_1' => '13:00',
                'time_End_1' => '18:30',
                'time_Start_2' => '',
                'time_End_2' => '',
            ],
            [
                'days' => 'เสาร์',
                'time_Start_1' => '09:10',
                'time_End_1' => '11:30',
                'time_Start_2' => '13:00',
                'time_End_2' => '16:30',
            ],
        ]);
    }
}
