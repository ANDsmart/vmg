<?php


namespace App\Models\Cms\Traits\Attributes;


use App\Models\System\Region;
use App\Repositories\System\DocumentResourceRepository;

trait ClientTestimonialAttribute
{

    /*Change status of a client*/
    public function getChangeStatusButtonAttribute()
    {

        if ($this->isactive == 1)
        {
            return link_to_route('cms.testimonial.change_status',  trans('buttons.general.deactivate'), [$this->uuid], ['data-method' => 'get', 'data-trans-button-cancel' => trans('buttons.general.cancel'), 'data-trans-button-confirm' => trans('buttons.general.confirm'), 'data-trans-title' => trans('buttons.general.deactivate') , 'data-trans-text' => trans('alert.general.alert.deactivate'), 'class' => 'btn btn-info btn-xs award']);
        }else{
            return link_to_route('cms.testimonial.change_status',  trans('buttons.general.activate'), [$this->uuid], ['data-method' => 'get', 'data-trans-button-cancel' => trans('buttons.general.cancel'), 'data-trans-button-confirm' => trans('buttons.general.confirm'), 'data-trans-title' => trans('buttons.general.activate') , 'data-trans-text' => trans('alert.general.alert.activate'), 'class' => 'btn btn-success btn-xs award']);
        }
    }





}
