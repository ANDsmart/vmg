<?php

namespace Database\Seeders\Version100;


use Illuminate\Database\Seeder;
use Database\Traits\DisableForeignKeys;
use Database\Traits\TruncateTable;

class DesignationsTableSeeder extends Seeder
{

    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        $this->disableForeignKeys('designations');
        $this->delete('designations');

        \DB::table('designations')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Officer',
                'short_name' => 'O',
                'isactive' => 1,
                'created_at' => '2019-04-18 08:21:51',
                'updated_at' => NULL,
                'deleted_at' => NULL,
                  ),

        ));

        $this->enableForeignKeys('designations');
    }
}
