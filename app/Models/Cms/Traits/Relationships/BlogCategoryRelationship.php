<?php


namespace App\Models\Cms\Traits\Relationships;


use App\Models\Cms\Blog;

trait BlogCategoryRelationship
{

    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }

}
