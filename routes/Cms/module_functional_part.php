
<?php

Route::group([
    'namespace' => 'Cms',
    'prefix' => 'cms',
    'as' => 'cms.'
], function() {
    Route::group([ 'prefix' => 'user_manual/module_functional_part',  'as' => 'user_manual.module_functional_part.'], function() {
        Route::get('/index','ModuleFunctionalPartController@index')->name('index');
        Route::get('/create/{module}','ModuleFunctionalPartController@create')->name('create');
        Route::post('/store','ModuleFunctionalPartController@store')->name('store');
        Route::get('/edit/{module_functional_part}','ModuleFunctionalPartController@edit')->name('edit');
        Route::put('/update/{module_functional_part}','ModuleFunctionalPartController@update')->name('update');
        Route::delete('/delete/{module_functional_part}','ModuleFunctionalPartController@delete')->name('delete');
        Route::get('/show','ModuleFunctionalPartController@show')->name('show');
        Route::get('/profile/{module_functional_part}','ModuleFunctionalPartController@profile')->name('profile');
        Route::get('/get_all_for_dt','ModuleFunctionalPartController@getAllForDt')->name('get_all_for_dt');
        Route::post('/upload_tempo_files', 'ModuleFunctionalPartController@uploadTemporaryFiles')->name('upload_tempo_files');


    });


});
