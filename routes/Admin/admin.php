<?php

Route::group([

    'namespace'=>'Admin',

] ,function () {

    Route::group([ 'prefix' => 'admin',  'as' => 'admin.'], function() {
        Route::get('/', [\App\Http\Controllers\Admin\AdminController::class,'index'])->name('index');
        Route::get('/system_menu', [\App\Http\Controllers\Admin\AdminController::class,'systemMenu'])->name('system_menu');
    });




});
