<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'id'             => 1,
                'course_name'    => 'オープンウォーターコース',
                'course_detail'  => 'オープンウォーターコース詳細が入ります',
            ],[
                'id'             => 2,
                'course_name'    => 'アドヴァンス',
                'course_detail'  => 'アドヴァンスの詳細が入ります',
            ]
        ]);
    }
}
