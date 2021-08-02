<?php


namespace App\Repositories\Resource;


use App\Models\Resource\Slider;
use App\Repositories\BaseRepository;
use App\Repositories\System\DocumentResourceRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SliderRepository extends BaseRepository
{

    const MODEL = Slider::class;

    public function __construct()
    {


    }




    /*Insert/create PaylollCompliance*/
    public function store(array $input)
    {
        return DB::transaction(function() use($input){
            $slider = $this->query()->firstOrCreate([
                'title' => $input['title'],
                'description' => $input['description'],
                'isactive' => $input['isactive'],
            ]);

            //serve image
            $this->saveDocuments($slider->id,$input);
            return $slider;
        });
    }

    /*Insert/create PaylollCompliance*/
    public function update(array $input,$slider)
    {
        return DB::transaction(function() use($input,$slider){
          $slider->update([
              'title' => $input['title'],
              'description' => $input['description'],
              'isactive' => $input['isactive'],
            ]);
            //slider image
            $this->saveDocuments($slider->id,$input);
            return $slider;
        });
    }



    /*Save document(s) attached on the form*/
    public function saveDocuments($slider_id, array $input)
    {
        $document_resource_repo = new DocumentResourceRepository();
        if((request()->file('slider_image'))){
            $document_resource_repo->saveDocument($slider_id,7,'slider_image', $input);
        }

    }


    /**
     * @param $slider
     * delete slider
     */
    public function delete($slider)
    {
        $slider->delete();
    }



    /*Get all for Datatable Client*/
    public function getAllForDt()
    {
        return $this->query();
    }


}