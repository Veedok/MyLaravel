<?php

use App\Http\Controllers\Admin\MyAdminController;
use App\Http\Controllers\CategoryNewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\Admin\CetegoriesController;
use App\Http\Controllers\TestController;


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
Route::get('/news', [ParentController::class, 'index']);
Route::get('/categoryNews/{category_id}', [CategoryNewsController::class, 'index']);
Route::get('/singleNews/{news}', [ParentController::class, 'singleNews']);
Route::get('/categoryNews', [CategoryNewsController::class, 'index']);
Route::group(['as' => 'admin.'], function() {
Route::resource('/admin/myAdmin', MyAdminController::class);
Route::resource('/admin/cat', CetegoriesController::class);
});
Route::get('/test', [TestController::class, 'index']);
