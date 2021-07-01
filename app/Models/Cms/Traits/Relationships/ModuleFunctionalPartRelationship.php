<?php


namespace App\Models\Cms\Traits\Relationships;


use App\Models\Cms\Module;
use App\Models\System\Document;

trait ModuleFunctionalPartRelationship
{

    public function documents(){
        return $this->morphToMany(Document::class, 'resource', 'document_resource')->withPivot('id','name', 'description', 'ext', 'size', 'mime','isactive');
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
