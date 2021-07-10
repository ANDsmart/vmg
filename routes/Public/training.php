<?php


Route::group([
    'namespace' => 'Resource',
    'prefix' => 'resource'
], function() {
    Route::group([ 'prefix' => 'general_information/training',  'as' => 'general_information.training.'], function() {
        Route::get('/display/{training}',[\App\Http\Controllers\Resource\TrainingController::class,'display'])->name('display');
        Route::get('/trainings',[\App\Http\Controllers\Resource\TrainingController::class,'trainings'])->name('trainings');
//        Route::get('/contact_us',[\App\Http\Controllers\Resource\ServiceController::class,'contactUs'])->name('contact_us');

    });
});
