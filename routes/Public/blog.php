
<?php

Route::group([
    'namespace' => 'Resource',
    'prefix' => 'resource',
], function() {
    Route::group([ 'prefix' => 'blog',  'as' => 'blog.'], function() {
        Route::get('/','BlogController@index')->name('blog');
        Route::get('/show/{blog}','BlogController@show')->name('show');
        Route::get('/get_blog_by_category/{category}','BlogController@getBlogByCategory')->name('get_blog_by_category');
    });
});



