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

                    'holiday_title' => 'New Year\u2019s Day',
                    'holiday_date' => '2018-01-01',
                    'is_recurring' => '1'
                ],
                [

                    'holiday_title' => 'National Labour Day',
                    'holiday_date' => '2018-05-01',
                    'is_recurring' => '1'
                ],
                [

                    'holiday_title' => 'Birthday for King Rama 10',
                    'holiday_date' => '2018-07-28',
                    'is_recurring' => '1'
                ],
                [

                    'holiday_title' => 'H.M. the Queen\u2019s Birthday',
                    'holiday_date' => '2018-08-12',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'Chulalongkorn Day',
                    'holiday_date' => '2018-10-23',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'National Father\u2019s Day',
                    'holiday_date' => '2018-12-05',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'New Year 25 Dec',
                    'holiday_date' => '2018-12-25',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'New Year 26 Dec',
                    'holiday_date' => '2018-12-26',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'New Year 27 Dec',
                    'holiday_date' => '2018-10-23',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'New Year 28 Dec',
                    'holiday_date' => '2018-12-28',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'New Year 29 Dec',
                    'holiday_date' => '2018-12-29',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'New Year\u2019s Eve',
                    'holiday_date' => '2018-12-31',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'New Year 02 Jan',
                    'holiday_date' => '2019-01-02',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'Songkran Festival6',
                    'holiday_date' => '2019-04-11',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'Songkran Festival4',
                    'holiday_date' => '2019-04-16',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'Songkran Festival5',
                    'holiday_date' => '2019-04-17',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดสิ้นปี',
                    'holiday_date' => '2019-12-27',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดสิ้นปี',
                    'holiday_date' => '2019-12-28',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดสิ้นปี',
                    'holiday_date' => '2019-12-29',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดสิ้นปี',
                    'holiday_date' => '2019-12-30',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'มาฆบูชา',
                    'holiday_date' => '2020-02-08',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'Coronation Day',
                    'holiday_date' => '2020-05-04',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'วันอาสาฬหบูชา',
                    'holiday_date' => '2020-07-05',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'วันเข้าพรรษา',
                    'holiday_date' => '2020-07-06',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'ปิดประชุมเจ้าหน้าที่',
                    'holiday_date' => '2020-08-11',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดชดเชยสงกรานต์',
                    'holiday_date' => '2020-09-04',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดชดเชยสงกรานต์',
                    'holiday_date' => '2020-09-05',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'อบรมเจ้าหน้าที่',
                    'holiday_date' => '2020-09-09',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'วันหยุดชดเชย ตามมติ ครม.',
                    'holiday_date' => '2020-12-11',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดชดเชยวันที่5/12/2563',
                    'holiday_date' => '2020-12-12',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'วันฉัตรมงคล',
                    'holiday_date' => '2021-05-04',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'วิสาขบูชา',
                    'holiday_date' => '2021-05-26',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'วันอาสาฬหบูชา',
                    'holiday_date' => '2021-07-24',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'วันคล้ายวันสวรรคต รัชกาลที่ 9',
                    'holiday_date' => '2021-10-13',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดชดเชย',
                    'holiday_date' => '2021-12-07',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'วันรัฐธรรมนูญ',
                    'holiday_date' => '2021-12-10',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดสิ้นปี',
                    'holiday_date' => '2021-12-30',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดสิ้นปี',
                    'holiday_date' => '2021-12-31',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดสิ้นปี',
                    'holiday_date' => '2022-01-01',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดสิ้นปี',
                    'holiday_date' => '2022-01-02',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดสิ้นปี',
                    'holiday_date' => '2022-01-03',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดสิ้นปี',
                    'holiday_date' => '2022-01-04',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'ปิดอบรมเจ้าหน้าที่',
                    'holiday_date' => '2022-03-16',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'ปิดอบรมเจ้าหน้าที่',
                    'holiday_date' => '2022-03-17',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดวันสงกรานต์',
                    'holiday_date' => '2022-04-13',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดวันสงกรานต์',
                    'holiday_date' => '2022-04-14',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดวันสงกรานต์',
                    'holiday_date' => '2022-04-15',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุดวันสงกรานต์',
                    'holiday_date' => '2022-04-16',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'ฉัตรมงคล',
                    'holiday_date' => '2022-05-04',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'Day off',
                    'holiday_date' => '2022-05-17',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'วันเข้าพรรษา',
                    'holiday_date' => '2022-07-13',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'วันอาสาฬหบูชา',
                    'holiday_date' => '2022-07-14',
                    'is_recurring' => ''
                ],
                [

                    'holiday_title' => 'หยุด',
                    'holiday_date' => '2022-08-13',
                    'is_recurring' => ''
                ],
            ]);

    }
}
