<?php


Route::group([
    'namespace' => 'Resource',
    'prefix' => 'resource'
], function() {
    Route::group([ 'prefix' => 'general_information/career',  'as' => 'general_information.career.'], function() {
        Route::get('/display/{career}',[\App\Http\Controllers\Resource\CareerController::class,'display'])->name('display');
        Route::get('/careers',[\App\Http\Controllers\Resource\CareerController::class,'careers'])->name('careers');
        Route::get('/get_careers_by_career_type/{career_type}',[\App\Http\Controllers\Resource\CareerController::class,'getServiceByServiceType'])->name('get_careers_by_career_type');

    });
});
