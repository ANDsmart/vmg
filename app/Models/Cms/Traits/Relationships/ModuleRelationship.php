<?php


namespace App\Models\Cms\Traits\Relationships;


use App\Models\Cms\ModuleFunctionalPart;

trait ModuleRelationship
{

    public function moduleFunctionalParts()
    {
        return $this->hasMany(ModuleFunctionalPart::class);
    }

}
