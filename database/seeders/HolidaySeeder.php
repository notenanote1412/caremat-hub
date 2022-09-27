<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
            DB::table('holidays')->insert([
                [
                    'holiday_title' => 'วันขึ้นปีใหม่',
                    'holiday_date' => '01/01/2022',
                    'is_recurring' => ''
                ],
                [
                    'holiday_title' => 'วันสงกรานต์',
                    'holiday_date' => '13/04/2022',
                    'is_recurring' => ''
                ],
                [
                    'holiday_title' => 'วันฉัตรมงคล',
                    'holiday_date' => '05/05/2022',
                    'is_recurring' => ''
                ],
                [
                    'holiday_title' => 'วันแม่แห่งชาติ',
                    'holiday_date' => '12/08/2022',
                    'is_recurring' => ''
                ],
                [
                    'holiday_title' => 'วันพ่อแห่งชาติ',
                    'holiday_date' => '05/12/2022',
                    'is_recurring' => ''
                ],
                [
                    'holiday_title' => 'วันรัฐธรรมนูญ',
                    'holiday_date' => '10/12/2022',
                    'is_recurring' => ''
                ],
                [
                    'holiday_title' => 'วันปิยมหาราช',
                    'holiday_date' => '23/12/2022',
                    'is_recurring' => ''
                ],
            ]);

    }
}
