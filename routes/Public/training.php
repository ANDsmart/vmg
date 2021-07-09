<?php


Route::group([
    'namespace' => 'Resource',
    'prefix' => 'resource'
], function() {
    Route::group([ 'prefix' => 'general_information/training',  'as' => 'general_information.training.'], function() {
        Route::get('/display/{training}',[\App\Http\Controllers\Resource\TrainingController::class,'display'])->name('display');
//        Route::get('/contact_us',[\App\Http\Controllers\Resource\ServiceController::class,'contactUs'])->name('contact_us');

    });
});
