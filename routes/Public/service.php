<?php


Route::group([
    'namespace' => 'Resource',
    'prefix' => 'resource'
], function() {
    Route::group([ 'prefix' => 'general_information',  'as' => 'general_information.service.'], function() {
        Route::get('/display/{service}',[\App\Http\Controllers\Resource\ServiceController::class,'display'])->name('display');
        Route::get('/services',[\App\Http\Controllers\Resource\ServiceController::class,'services'])->name('services');
        Route::get('/get_services_by_service_type/{service_type}',[\App\Http\Controllers\Resource\ServiceController::class,'getServiceByServiceType'])->name('get_services_by_service_type');

    });
});
