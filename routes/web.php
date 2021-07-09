<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('lang/{lang}', [\App\Http\Controllers\LanguageController::class,'swap']);

Route::get('/{locale}', function ($locale) {
    \Illuminate\Support\Facades\App::setLocale($locale);
    return redirect()->back();
});


//Route::group(['middleware' => 'dashboard'], function () {
//    Route::group(['middleware' => 'csrf'], function () {
//    });
//    includeRouteFiles(__DIR__.'/Cms/');
//
//    includeRouteFiles(__DIR__.'/DataAccess/');
//    includeRouteFiles(__DIR__.'/TokenFree/');
//    includeRouteFiles(__DIR__.'/Web/');
//
//
//});


Route::group(['middleware' => 'dashboard'], function () {
    Route::group(['middleware' => 'csrf'], function () {
    });



});
includeRouteFiles(__DIR__.'/Cms/');

//    includeRouteFiles(__DIR__.'/DataAccess/');
//    includeRouteFiles(__DIR__.'/TokenFree/');
includeRouteFiles(__DIR__.'/Web/');
includeRouteFiles(__DIR__.'/Public/');

