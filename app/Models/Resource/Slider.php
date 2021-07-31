<?php


namespace App\Models\Resource;


use App\Models\BaseModel\BaseModel;
use App\Models\Resource\traits\SliderAttribute;
use App\Models\System\Document;

class Slider extends BaseModel
{
    use SliderAttribute;
    protected $guarded = [];


    public function documents(){
        return $this->morphToMany(Document::class, 'resource', 'document_resource')->withPivot('id','name', 'description', 'ext', 'size', 'mime','isactive');
    }
}
