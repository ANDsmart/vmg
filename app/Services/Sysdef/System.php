<?php

namespace App\Services\Sysdef;

use App\Models\System\Sysdef;
use App\Repositories\System\JobManageRepository;

class System
{

    public function __invoke($reference)
    {
        return  Sysdef::query()->where('reference', $reference)->first();
    }

    /*Get specified data using reference. Return casted value with data type*/
    public function data($reference)
    {
        $def = Sysdef::query()->where('reference', $reference)->first();
        return $this->castValue($def->value, $def->data_type) ;
    }

    /*Return sysdef model using reference*/
    public function definition($reference)
    {
        return Sysdef::query()->where('reference', $reference)->first();
    }

    /*Cast value to their respective data type*/
    public function castValue($value, $data_type)
    {
        switch ($data_type){
            case 'integer':
                return (int)($value);
                break;
            case 'smallInteger':
                return (int)($value);
                break;
            case 'numeric':
                return (double)($value);
                break;
            case 'decimal':
                return (double)($value);
                break;
            case 'string':
                return ($value);
                break;
            case 'text':
                return ($value);
                break;
        }

    }


    /*Pending Jobs count*/
    public function pendingJobsCount()
    {
        $count = (new JobManageRepository())->countJobs();
        return $count;
    }

}