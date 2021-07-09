<?php


namespace App\Models\Resource;


use App\Models\BaseModel\BaseModel;
use App\Models\Resource\traits\ServiceAttribute;
use App\Models\Resource\traits\TrainingAttribute;
use App\Models\System\Document;

class Training extends BaseModel
{
    use TrainingAttribute;

    protected $guarded = [];



    public function documents(){
        return $this->morphToMany(Document::class, 'resource', 'document_resource')->withPivot('id','name', 'description', 'ext', 'size', 'mime','isactive');
    }
}
