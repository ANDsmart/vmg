<?php


Route::group([
    'namespace' => 'Resource',
    'prefix' => 'resource'
], function() {
    Route::group([ 'prefix' => 'general_information',  'as' => 'general_information.service.'], function() {
        Route::get('/display/{service}',[\App\Http\Controllers\Resource\ServiceController::class,'display'])->name('display');
//        Route::get('/contact_us',[\App\Http\Controllers\Resource\ServiceController::class,'contactUs'])->name('contact_us');

    });
});
