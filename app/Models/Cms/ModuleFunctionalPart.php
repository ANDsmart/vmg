<?php


namespace App\Models\Cms;


use App\Models\Cms\Traits\Relationships\ModuleFunctionalPartRelationship;
use Illuminate\Database\Eloquent\Model;

class ModuleFunctionalPart extends Model
{
    use ModuleFunctionalPartRelationship;
    protected $guarded = [];
}
