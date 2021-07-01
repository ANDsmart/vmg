<?php


namespace App\Models\Cms;


use App\Models\Cms\Traits\Attributes\ModuleAttribute;
use App\Models\Cms\Traits\Relationships\ModuleRelationship;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use ModuleRelationship,ModuleAttribute;

    protected $guarded = [];
}
