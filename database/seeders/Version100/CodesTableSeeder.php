<?php
namespace Database\Seeders\Version100;

use Database\DisableForeignKey;
use Database\TruncateTables;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CodesTableSeeder extends Seeder
{
//    use DisableForeignKey, TruncateTables;

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

//
//        $this->disableForeignKeys("codes");
//        $this->delete('codes');

        DB::table('codes')->truncate();
        DB::table('codes')->insert(array (

            0 => array (
                'id' => 1,
                'name' => 'User Logs',
                'lang' => 'user_log',
                'is_system_defined' => 1,
            ),
            1 => array (
                'id' => 2,
                'name' => 'Service Types',
                'lang' => 'service_type',
                'is_system_defined' => 1,
            ),



        ));
//        $this->enableForeignKeys("codes");

    }
}
