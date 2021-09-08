<?php


namespace App\Models\Resource;


use App\Models\BaseModel\BaseModel;
use App\Models\Resource\traits\ServiceAttribute;
use App\Models\System\CodeValue;
use App\Models\System\Document;

class Service extends BaseModel
{
    use ServiceAttribute;

    protected $guarded = [];


    public function serviceType()
    {
        return $this->belongsTo(CodeValue::class,'service_type_cv_id');
    }

    public function documents(){
        return $this->morphToMany(Document::class, 'resource', 'document_resource')->withPivot('id','name', 'description', 'ext', 'size', 'mime','isactive');
    }


}
