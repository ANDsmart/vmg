<?php
namespace Database\Seeders\Version100;

use Cassandra\Schema;
use Database\Traits\DisableForeignKeys;
use Database\Traits\TruncateTable;
use Illuminate\Database\Seeder;

use App\Models\System\CodeValue;
use Illuminate\Support\Facades\DB;

class CodeValuesTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("code_values");

        CodeValue::query()->delete();
        $cv = CodeValue::updateOrCreate(
            ['reference' => 'ULLGI'],
            [
                'id' => 1,
                'code_id' => 1,
                'name' => 'Log In',
                'lang' => NULL,
                'description' => '',
                'reference' => 'ULLGI',
                'sort' => 1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['reference' => 'ULLGO'],
            [
                'id' => 2,
                'code_id' => 1,
                'name' => 'Log Out',
                'lang' => NULL,
                'description' => '',
                'reference' => 'ULLGO',
                'sort' => 2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['reference' => 'ULFLI'],
            [
                'id' => 3,
                'code_id' => 1,
                'name' => 'Failed Log In',
                'lang' => NULL,
                'description' => '',
                'reference' => 'ULFLI',
                'sort' => 3,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['reference' => 'ULPSR'],
            [
                'id' => 4,
                'code_id' => 1,
                'name' => 'Password Reset',
                'lang' => NULL,
                'description' => '',
                'reference' => 'ULPSR',
                'sort' => 4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['reference' => 'ULULC'],
            [
                'id' => 5,
                'code_id' => 1,
                'name' => 'User Lockout',
                'lang' => NULL,
                'description' => '',
                'reference' => 'ULULC',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['reference' => 'SERTYPEHR'],
            [
                'id' => 6,
                'code_id' => 2,
                'name' => 'HUMAN RESOURCE MANAGEMENT',
                'lang' => NULL,
                'description' => 'At VMG our Human Resource Management functions can be classified into the following three categories.
1. Operative Functions, and
2. Advisory Functions.
3. Managerial Functions,
',
                'reference' => 'SERTYPEHR',
                'sort' => 1,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::updateOrCreate(
            ['reference' => 'SERTYPELW'],
            [
                'id' => 7,
                'code_id' => 2,
                'name' => 'LEGAL COMPLIANCE',
                'lang' => NULL,
                'description' => '',
                'reference' => 'SERTYPELW',
                'sort' => 2,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::updateOrCreate(
            ['reference' => 'SERTYPREC'],
            [
                'id' => 8,
                'code_id' => 2,
                'name' => 'RECRUITMENT',
                'lang' => NULL,
                'description' => '',
                'reference' => 'SERTYPREC',
                'sort' => 3,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::updateOrCreate(
            ['reference' => 'SERTYPFINA'],
            [
                'id' => 9,
                'code_id' => 2,
                'name' => 'FINANCIAL MANAGEMENT',
                'lang' => NULL,
                'description' => '',
                'reference' => 'SERTYPFINA',
                'sort' => 4,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::updateOrCreate(
            ['reference' => 'SERTYPETRA'],
            [
                'id' => 10,
                'code_id' => 2,
                'name' => 'INFORMATION TECHNOLOGY',
                'lang' => NULL,
                'description' => '',
                'reference' => 'SERTYPETRA',
                'sort' => 5,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::updateOrCreate(
            ['reference' => 'SERTYPECO'],
            [
                'id' => 11,
                'code_id' => 2,
                'name' => 'COMPLIANCE MANAGEMENT',
                'lang' => NULL,
                'description' => '',
                'reference' => 'SERTYPECO',
                'sort' => 6,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );


        $cv = CodeValue::updateOrCreate(
            ['reference' => 'KNLGTOS'],
            [
                'id' => 13,
                'code_id' => 3,
                'name' => 'TOOLS & SAMPLE',
                'lang' => NULL,
                'description' => '',
                'reference' => 'KNLGTOS',
                'sort' => 8,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::updateOrCreate(
            ['reference' => 'KNLGHR'],
            [
                'id' => 14,
                'code_id' => 3,
                'name' => 'HR TOPICS',
                'lang' => NULL,
                'description' => '',
                'reference' => 'KNLGHR',
                'sort' => 9,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );
        $cv = CodeValue::updateOrCreate(
            ['reference' => 'KNLGBUSS'],
            [
                'id' => 15,
                'code_id' => 3,
                'name' => 'BUSINESS SOLUTION',
                'lang' => NULL,
                'description' => '',
                'reference' => 'KNLGBUSS',
                'sort' => 10,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $cv = CodeValue::updateOrCreate(
            ['reference' => 'KNLGLEC'],
            [
                'id' => 16,
                'code_id' => 3,
                'name' => 'LEGAL & COMPLIANCE',
                'lang' => NULL,
                'description' => '',
                'reference' => 'KNLGLEC',
                'sort' => 11,
                'isactive' => 1,
                'is_system_defined' => 1,
            ]
        );

        $this->enableForeignKeys("code_values");


    }
}
