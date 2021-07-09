<?php


namespace App\Models\Resource\traits;


use App\Repositories\System\DocumentResourceRepository;

trait TrainingAttribute
{


    public function getImageAttribute()
    {
        $document_resource = $this->documents()->where('document_id', 5)->first();
        $document_resource_repo = new DocumentResourceRepository();
        $client_logo = isset($document_resource) ? $document_resource_repo->getDocFullPathUrl($document_resource->pivot->id) : '';
        return $client_logo;
    }
}
