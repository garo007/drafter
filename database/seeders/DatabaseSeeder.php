<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert(
        [
            [
                'user_id'     => 21,
                'logo'        => 'asdasd',
                'name'        => 'Company-test-',
                'reg_date'    => '11:05:98',
                'low_address' => 'addrers',
                'dir_full_name'=> 'Artur poxosich',
                'inn'           => '115522',
                'ogrn'          => '1213',

            ],
        ]
        );
    }
}
