<?php


namespace App\Models\Cms\Traits\Relationships;


use App\Models\Cms\Module;

trait ModuleGroupRelationship
{

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

}
