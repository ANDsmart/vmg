<?php


namespace App\Repositories\Resource;


use App\Models\Resource\Service;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceRepository extends BaseRepository
{

    const MODEL = Service::class;

    public function __construct()
    {


    }


    /**
     * @param $service_type_id
     * @return mixed
     */
    public function getServiceByServiceDirectory($service_type_id)
    {
        $services = $this->query()->where('service_type_cv_id',$service_type_id)->get();
        return $services;
    }

    /*Insert/create PaylollCompliance*/
    public function store(array $input)
    {
        return DB::transaction(function() use($input){
            $blog_category = $this->query()->firstOrCreate([
                'title' => $input['title'],
                'service_type_cv_id' => $input['service_type_cv_id'],
                'content' => $input['content'],
                'user_id' => Auth::id(),
            ]);
            return $blog_category;
        });
    }





    /*Get all for Datatable Client*/
    public function getAllForDt()
    {
        return $this->query()->where('isactive', 1);
    }


}
