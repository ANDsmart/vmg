<?php
namespace Database\Seeders\Version100;

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class CodesTableSeeder extends Seeder
{
//    use DisableForeignKeys, TruncateTable;

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

        \DB::table('codes')->insert(array (

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
