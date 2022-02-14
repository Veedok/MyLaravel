<?php

use App\Http\Controllers\Admin\MyAdminController;
use App\Http\Controllers\CategoryNewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\Admin\CetegoriesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ParserController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;

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
    return view('hello');
});
Route::group(['middleware' => 'auth'], function(){
    Route::group(['as' => 'admin.', 'middleware' => 'admin'], function() {
        Route::resource('/admin/myAdmin', MyAdminController::class);
        Route::resource('/admin/cat', CetegoriesController::class);
        Route::resource('/user', UsersController::class);
        });

});
Route::get('/news', [ParentController::class, 'index'])->name('news');
Route::get('/categoryNews/{category_id}', [CategoryNewsController::class, 'index']);
Route::get('/singleNews/{news}', [ParentController::class, 'singleNews']);
Route::get('/categoryNews', [CategoryNewsController::class, 'index']);
Route::get('/parser', ParserController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'guest'], function(){
    Route::get('auth/{network}/redirect', [SocialController::class, 'redirect'])->where('network', '\w+')->name('auth.redirect');
    Route::get('auth/{network}/callback', [SocialController::class, 'callback'])->where('network', '\w+')->name('auth.callback');
});
