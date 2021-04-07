<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Auth::routes();

Route::get('create/user',[App\Http\Controllers\HomeController::class, 'createUser'])->name('create');

// Route::get('user/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.adminHome')->middleware('is_admin');

Route::get('admin/store/index', 'StoreController@index')->name('store.index');
Route::get('admin/store/create','StoreController@create')->name('store.create');
Route::post('admin/store/create','StoreController@store')->name('store.store');
Route::get('admin/store/{id}/edit','StoreController@edit')->name('store.edit');
Route::post('admin/store/{id}/update','StoreController@update')->name('store.update');
