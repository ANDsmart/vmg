<?php

Route::group([
    'namespace' => 'Cms',
    'prefix' => 'cms',
    'as' => 'cms.'
], function() {
    Route::group([ 'prefix' => 'slider',  'as' => 'slider.'], function() {
        Route::get('/index', [\App\Http\Controllers\Resource\SliderController::class,'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Resource\SliderController::class,'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Resource\SliderController::class,'store'])->name('store');
        Route::put('/update/{slider}', [\App\Http\Controllers\Resource\SliderController::class,'update'])->name('update');
        Route::get('/profile/{slider}',  [\App\Http\Controllers\Resource\SliderController::class,'profile'])->name('profile');
        Route::get('/edit/{slider}',  [\App\Http\Controllers\Resource\SliderController::class,'edit'])->name('edit');
        Route::get('/delete/{slider}',  [\App\Http\Controllers\Resource\SliderController::class,'delete'])->name('delete');
        Route::get('/profile/{slider}',  [\App\Http\Controllers\Resource\SliderController::class,'profile'])->name('profile');
        Route::get('/get/admin_data',  [\App\Http\Controllers\Resource\SliderController::class,'getForAdminDatatable'])->name('get.admin_data');
    });

});
