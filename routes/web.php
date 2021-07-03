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

Route::get('/', function () {
    return view('welcome')
        ->with('services',(new \App\Repositories\System\CodeValueRepository())->getServiceForDirectory());
});

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

//\Composer\Autoload\includeFile(__DIR__.'/Cms');
require __DIR__.'/Cms/dashboard.php';
require __DIR__.'/Cms/blog.php';
require __DIR__.'/Cms/category.php';
require __DIR__.'/Cms/faq.php';
require __DIR__.'/Cms/client.php';
require __DIR__.'/Cms/user_manual.php';
require __DIR__.'/Cms/testimonial.php';
require __DIR__.'/Admin/ManageUser/user_manage.php';
require __DIR__.'/Admin/admin.php';
require __DIR__.'/Public/general_information.php';
