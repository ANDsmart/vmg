<?php


namespace App\Models\Cms\Traits\Attributes;


trait ModuleAttribute
{


    public function getDeleteButtonAttribute(){
        return link_to_route('cms.user_manual.module.delete',  __('buttons.general.crud.delete'), [$this->id], ['data-method' => 'delete', 'data-trans-button-cancel' => trans('buttons.general.cancel'), 'data-trans-button-confirm' => trans('buttons.general.confirm'), 'data-trans-title' => trans('label.warning'), 'data-trans-text' => trans('alert.general.alert.delete'), 'class' => 'btn btn-danger btn-xs pull-right']);
    }
}
