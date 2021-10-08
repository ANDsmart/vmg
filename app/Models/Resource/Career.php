<?php


namespace App\Models\Resource;


use App\Models\BaseModel\BaseModel;
use App\Models\Resource\traits\ServiceAttribute;
use App\Models\System\CodeValue;
use App\Models\System\Document;

class Career extends BaseModel
{
    use ServiceAttribute;

    protected $guarded = [];

    protected $table = 'carries';




    public function documents(){
        return $this->morphToMany(Document::class, 'resource', 'document_resource')->withPivot('id','name', 'description', 'ext', 'size', 'mime','isactive');
    }


}
