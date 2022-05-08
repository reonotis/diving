<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $insertData = array();
        $insertData[] = [
            'f_name' => '藤澤',
            'l_name' => '怜臣',
            'l_read' => 'フジサワ',
            'f_read' => 'レオン',
        ];

        for($i = 1 ; $i<100 ; $i++ ){
            $insertData[] = [
                'f_name' => '苗字_' . str_pad($i, 3, 0, STR_PAD_LEFT),
                'l_name' => '名前_' . str_pad($i, 3, 0, STR_PAD_LEFT),
                'l_read' => 'ミョウジ_' . str_pad($i, 3, 0, STR_PAD_LEFT),
                'f_read' => 'ナマエ_' . str_pad($i, 3, 0, STR_PAD_LEFT),
            ];
        }

        DB::table('customers')->insert($insertData);
    }
}
