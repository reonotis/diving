<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerLicensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customer_licenses')->insert([
            [
                'customer_id' => 1,
                'license_id'  => 2,
            ],[
                'customer_id' => 1,
                'license_id'  => 3,
            ]
        ]);
    }
}
