<?php


namespace App\Models\Cms;


use App\Models\BaseModel\BaseModel;
use App\Models\Cms\Traits\Attributes\ClientAttribute;
use App\Models\Cms\Traits\Relationships\ClientRelationship;
use Illuminate\Notifications\Notifiable;


class Client extends BaseModel
{
    use ClientAttribute,ClientRelationship,Notifiable;
    protected $guarded = [];
}
