<?php


namespace App\Models\Cms;


use App\Models\Cms\Traits\Attributes\ModuleGroupAttribute;
use App\Models\Cms\Traits\Relationships\ModuleGroupRelationship;
use Illuminate\Database\Eloquent\Model;

class ModuleGroup extends Model
{
    use ModuleGroupRelationship,ModuleGroupAttribute;
    protected $guarded = [];
}
