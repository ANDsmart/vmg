<?php


Route::group([
    'namespace' => 'Resource',
    'prefix' => 'resource'
], function() {
    Route::group([ 'prefix' => 'general_information/function',  'as' => 'general_information.function.'], function() {
        Route::get('/display/{function}',[\App\Http\Controllers\Resource\FunctionController::class,'display'])->name('display');
        Route::get('/functions',[\App\Http\Controllers\Resource\FunctionController::class,'functions'])->name('functions');
        Route::get('/get_functions_by_function_type/{function_type}',[\App\Http\Controllers\Resource\FunctionController::class,'getServiceByServiceType'])->name('get_functions_by_function_type');

    });
});
