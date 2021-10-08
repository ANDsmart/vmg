<?php

Route::group([
    'namespace' => 'Cms',
    'prefix' => 'cms',
    'as' => 'cms.'
], function() {
    Route::group([ 'prefix' => 'function',  'as' => 'function.'], function() {
        Route::get('/index', [\App\Http\Controllers\Resource\FunctionController::class,'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Resource\FunctionController::class,'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Resource\FunctionController::class,'store'])->name('store');
        Route::put('/update/{function}', [\App\Http\Controllers\Resource\FunctionController::class,'update'])->name('update');
        Route::get('/profile/{function}',  [\App\Http\Controllers\Resource\FunctionController::class,'profile'])->name('profile');
        Route::get('/edit/{function}',  [\App\Http\Controllers\Resource\FunctionController::class,'edit'])->name('edit');
        Route::get('/delete/{function}',  [\App\Http\Controllers\Resource\FunctionController::class,'destroy'])->name('delete');
        Route::get('/profile/{function}',  [\App\Http\Controllers\Resource\FunctionController::class,'profile'])->name('profile');
        Route::get('/get/admin_data',  [\App\Http\Controllers\Resource\FunctionController::class,'getForAdminDatatable'])->name('get.admin_data');
    });

});
