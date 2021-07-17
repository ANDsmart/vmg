<?php

Route::group([
    'namespace' => 'Resource',
    'prefix' => 'resource'
], function() {
    Route::group([ 'prefix' => 'general_information',  'as' => 'general_information.'], function() {
        Route::get('/pricing','GeneralInformationController@pricing')->name('pricing');
        Route::get('/about_us',[\App\Http\Controllers\Resource\GeneralInformationController::class,'aboutUs'])->name('about_us');
        Route::get('/contact_us',[\App\Http\Controllers\Resource\GeneralInformationController::class,'contactUs'])->name('contact_us');
        Route::post('/contact_us/send',[\App\Http\Controllers\Resource\GeneralInformationController::class,'sendMessageToSupportEmail'])->name('contact_us.send');
        Route::post('/newsletter_subscription','GeneralInformationController@newsLetterSubscription')->name('newsletter_subscription');
        Route::get('/user_manual','GeneralInformationController@userManual')->name('user_manual');

    });
});


Route::group([
    'namespace' => 'Cms',
    'prefix' => 'cms',
    'as' => 'cms.'
], function () {
    Route::group(['prefix' => 'user_manual', 'as' => 'user_manual.'], function () {

        Route::get('/modules_by_group/{module_group}', 'UserManualController@openModulesByGroup')->name('modules_by_group');
        Route::get('/get_module_by_group/{module_group}', 'UserManualController@getModuleByGroup')->name('get_module_by_group');
        Route::get('/module_profile/{module}', 'UserManualController@moduleProfile')->name('module_profile');
        Route::get('/get_module_functional_parts/{module}', 'UserManualController@getModuleFuctionalParts')->name('get_module_functional_parts');
        Route::get('/get_module_row_by_ajax', 'UserManualController@getModuleRowByAjax')->name('get_module_row_by_ajax');
        Route::get('/get_functional_part_row_by_ajax', 'ModuleFunctionalPartController@getFunctionalRowByAjax')->name('module_functional_part.get_functional_part_row_by_ajax');
        Route::get('/get_search_functional_part_by_ajax', 'ModuleFunctionalPartController@getSearchFunctionalByAjax')->name('module_functional_part.get_search_functional_part_by_ajax');

    });





});


