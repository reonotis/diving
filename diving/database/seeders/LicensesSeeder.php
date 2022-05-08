<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('licenses')->insert([
            [
                'id'           => '1',
                'license_name' => 'スクーバ・ダイバー',
                'type'         => '1',
                'parent_id'    => NULL,
            ],[
                'id'           => '2',
                'license_name' => 'オープン・ウォーター・ダイバー',
                'type'         => '1',
                'parent_id'    => NULL,
            ],[
                'id'           => '3',
                'license_name' => 'アドヴァンスド・オープン・ウォーター・ダイバー',
                'type'         => '1',
                'parent_id'    => 2,
            ],[
                'id'           => '4',
                'license_name' => 'レスキュー・ダイバー',
                'type'         => '1',
                'parent_id'    => 3,
            ],[
                'id'           => '5',
                'license_name' => 'マスター・スクーバ・ダイバー',
                'type'         => '1',
                'parent_id'    => 4,
            ],[
                'id'           => '6',
                'license_name' => 'ダイブマスター',
                'type'         => '1',
                'parent_id'    => 5,
            ],[
                'id'           => '7',
                'license_name' => 'アシスタント・インストラクター',
                'type'         => '1',
                'parent_id'    => 5,
            ]
        ]);
    }
}
