<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insertData = array();

        for($i = 1 ; $i<100 ; $i++ ){
            $insertData[] = [

                'instructor_id' => '1',
                'customer_id' => '2',
                'date' => date('Y-m-d'),
                'entry_time' => date('H:i'),
                'exit_time' => date('H:i'),
            ];
        }

        DB::table('logs')->insert($insertData);
    }
}


