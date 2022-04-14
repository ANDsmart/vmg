<?php


namespace App\Models\Cms;


use App\Models\BaseModel\BaseModel;
use App\Models\Cms\Traits\Attributes\FaqAttribute;
use App\Models\Cms\Traits\Relationships\FaqRelationship;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{

    protected $guarded = [];
    protected $table = 'about_us';
}
