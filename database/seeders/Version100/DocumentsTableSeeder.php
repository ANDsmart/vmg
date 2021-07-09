<?php
namespace Database\Seeders\Version100;

use Illuminate\Database\Seeder;
use Database\Traits\TruncateTable;
use Database\Traits\DisableForeignKeys;

class DocumentsTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("documents");
        $this->delete('documents');

        \DB::table('documents')->insert(array (
            0 => array (
                    'id' => 1,
                    'name' => 'Blog photos',
                    'document_group_id' => 1,
                    'description' => 'This are blog pictures',
                    'isrecurring' => 1,
                    'ismandatory' => 1,
                    'isrenewable' => 1,
                    'isactive' => 1,
                ),
            1 => array (
                    'id' => 2,
                    'name' => 'Client logo',
                    'document_group_id' => 2,
                    'description' => 'This is client logo',
                    'isrecurring' => 1,
                    'ismandatory' => 1,
                    'isrenewable' => 1,
                    'isactive' => 1,
                ),
            2 => array (
                    'id' => 3,
                    'name' => 'Module Functional Part Images',
                    'document_group_id' => 3,
                    'description' => 'This is module functional parts images',
                    'isrecurring' => 1,
                    'ismandatory' => 1,
                    'isrenewable' => 1,
                    'isactive' => 1,
                ),
            3 => array (
                'id' => 4,
                'name' => 'Service attachment',
                'document_group_id' => 4,
                'description' => 'This is services documents',
                'isrecurring' => 1,
                'ismandatory' => 1,
                'isrenewable' => 1,
                'isactive' => 1,
            ),


        ));

        $this->enableForeignKeys("documents");

    }
}
