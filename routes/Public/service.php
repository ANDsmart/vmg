<?php


Route::group([
    'namespace' => 'Resource',
    'prefix' => 'resource'
], function() {
    Route::group([ 'prefix' => 'general_information',  'as' => 'general_information.'], function() {
        Route::get('/about_us/{service}',[\App\Http\Controllers\Resource\ServiceController::class,'aboutUs'])->name('about_us');
        Route::get('/contact_us',[\App\Http\Controllers\Resource\ServiceController::class,'contactUs'])->name('contact_us');

    });
});
