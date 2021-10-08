<?php

Route::group([
    'namespace' => 'Cms',
    'prefix' => 'cms',
    'as' => 'cms.'
], function() {
    Route::group([ 'prefix' => 'career',  'as' => 'career.'], function() {
        Route::get('/index', [\App\Http\Controllers\Resource\CareerController::class,'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Resource\CareerController::class,'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Resource\CareerController::class,'store'])->name('store');
        Route::put('/update/{career}', [\App\Http\Controllers\Resource\CareerController::class,'update'])->name('update');
        Route::get('/profile/{career}',  [\App\Http\Controllers\Resource\CareerController::class,'profile'])->name('profile');
        Route::get('/edit/{career}',  [\App\Http\Controllers\Resource\CareerController::class,'edit'])->name('edit');
        Route::get('/delete/{career}',  [\App\Http\Controllers\Resource\CareerController::class,'destroy'])->name('delete');
        Route::get('/profile/{career}',  [\App\Http\Controllers\Resource\CareerController::class,'profile'])->name('profile');
        Route::get('/get/admin_data',  [\App\Http\Controllers\Resource\CareerController::class,'getForAdminDatatable'])->name('get.admin_data');
    });

});
