<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;
use App\Models\System\Sysdef;

class SysdefsTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {




        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYSTEL'],
            [
                'name' => 'telephone',
                'display_name' => 'Telephone',
                'value' => '0755907799',
                'data_type' => 'string',
                'isactive' => 1,
                'reference' => 'MAXEPU',
                'sysdef_group_id' => 1,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYSMOB'],
            [
                'name' => 'mobile_phone',
                'display_name' => 'Mobile Phone',
                'value' => '+255 786 987 248 / +255 713 366 303 / +255 787 275 482',
                'data_type' => 'string',
                'isactive' => 1,
                'reference' => 'SYSMOB',
                'sysdef_group_id' => 1,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYSPOB'],
            [
                'name' => 'po_box',
                'display_name' => 'P.O Box',
                'value' => '32258 ',
                'data_type' => 'integer',
                'isactive' => 1,
                'reference' => 'SYSPOB',
                'sysdef_group_id' => 1,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYSLOC'],
            [
                'name' => 'location',
                'display_name' => 'Location',
                'value' => 'ADA ESTATE, MADAI CRESCENT RD
DAR ES SALAAM',
                'data_type' => 'string',
                'isactive' => 1,
                'reference' => 'SYSLOC',
                'sysdef_group_id' => 1,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYSEMA'],
            [
                'name' => 'email',
                'display_name' => 'Email',
                'value' => 'info@nextbyte.co.tz',
                'data_type' => 'string',
                'isactive' => 1,
                'reference' => 'SYSEMA',
                'sysdef_group_id' => 1,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYSSEM'],
            [
                'name' => 'support_email',
                'display_name' => 'Support Email',
                'value' => 'info@nextbyte.co.tz',
                'data_type' => 'string',
                'isactive' => 1,
                'reference' => 'SYSSEM',
                'sysdef_group_id' => 1,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'MAXLOS'],
            [
                'name' => 'max_logo_size',
                'display_name' => 'Max logo size (MB)',
                'value' => 3,
                'data_type' => 'integer',
                'isactive' => 1,
                'reference' => 'MAXLOS',
                'sysdef_group_id' => 2,
            ]
        );



        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYDORGN'],
            [
                'name' => 'organisation_name',
                'display_name' => 'Organisation Name',
                'value' => 'NEXTBYTE ICT SOLUTIONS',
                'data_type' => 'string',
                'isactive' => 1,
                'reference' => 'SYDORGN',
                'sysdef_group_id' => 1,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYDABT'],
            [
                'name' => 'about_psms',
                'display_name' => 'About PSMS',
                'value' => 'PSMS is Petrol Station Management System, which serve as a centralized system for facilitating efficient multiple stations business process management.',
                'data_type' => 'text',
                'isactive' => 1,
                'reference' => 'SYDABT',
                'sysdef_group_id' => 1,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYSNAME'],
            [
                'name' => 'system_name',
                'display_name' => 'System Name',
                'value' => 'PSMS',
                'data_type' => 'string',
                'isactive' => 1,
                'reference' => 'SYSNAME',
                'sysdef_group_id' => 1,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYSPS'],
            [
                'name' => 'pagination_summary',
                'display_name' => 'Pagination Summary',
                'value' => 5,
                'data_type' => 'integer',
                'isactive' => 1,
                'reference' => 'SYSPS',
                'sysdef_group_id' => 2,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYSPL'],
            [
                'name' => 'pagination_low',
                'display_name' => 'Pagination Low',
                'value' => 10,
                'data_type' => 'integer',
                'isactive' => 1,
                'reference' => 'SYSPL',
                'sysdef_group_id' => 2,
            ]
        );


        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYSPH'],
            [
                'name' => 'pagination_high',
                'display_name' => 'Pagination High',
                'value' => 20,
                'data_type' => 'integer',
                'isactive' => 1,
                'reference' => 'SYSPH',
                'sysdef_group_id' => 2,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYSHSU'],
            [
                'name' => 'homepage_summary',
                'display_name' => 'Homepage Summary',
                'value' => '',
                'data_type' => 'text',
                'isactive' => 1,
                'reference' => 'SYSHSU',
                'sysdef_group_id' => 1,
            ]
        );

        $sysdef = Sysdef::firstOrCreate(
            ['reference' => 'SYSPI'],
            [
                'name' => 'pagination_max',
                'display_name' => 'Pagination Max',
                'value' => 50,
                'data_type' => 'integer',
                'isactive' => 1,
                'reference' => 'SYSPI',
                'sysdef_group_id' => 2,
            ]
        );



        /*update this definition - SYSFU*/
        $input = ['name' => 'activate_service_feature_advert' , 'display_name' => 'Activate feature for Service i.e Advertisement'];
        $this->updateExisting('SYSFU', $input);

    }


    /**
     * Update model existing with specified column only system fields
     */
    public function updateExisting($reference,array $input)
    {
        $sysdef = Sysdef::query()->where('reference', $reference)->first();
        if(isset($sysdef))
        {
            $sysdef->update([
                'name' => isset($input['name']) ? $input['name'] : $sysdef->name,
                'display_name' =>  isset($input['display_name']) ? $input['display_name'] : $sysdef->display_name,
                'data_type' =>  isset($input['data_type']) ? $input['data_type'] : $sysdef->data_type,
                'isactive' =>  isset($input['isactive']) ? $input['isactive'] : $sysdef->isactive,
                'sysdef_group_id' =>  isset($input['sysdef_group_id']) ? $input['sysdef_group_id'] : $sysdef->sysdef_group_id,
            ]);
        }
    }

}
