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

// Auth::routes();

// Route::get('user/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');


//
Route::get('promoters/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/dashboard', 'HomeController@adminHome')->name('admin.adminHome')->middleware('is_admin');

Route::get('login','\App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login','\App\Http\Controllers\Auth\LoginController@login');

Route::get('admin/promoters/register','\App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('admin/promoters/register','\App\Http\Controllers\Auth\RegisterController@register');

Route::post('logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('admin/promoters', 'HomeController@showPrometers')->name('admin.promoters');


Route::get('admin/store/index', 'StoreController@index')->name('store.index');
Route::get('admin/store/create','StoreController@create')->name('store.create');
Route::post('admin/store/create','StoreController@store')->name('store.store');
Route::get('admin/store/{id}/edit','StoreController@edit')->name('store.edit');
Route::post('admin/store/{id}/update','StoreController@update')->name('store.update');

Route::get('admin/report/create','StockReportController@create')->name('report.create');
Route::post('admin/report/create','StockReportController@store')->name('report.store');

// Route::post('stockReport.show','HomeController@stockReportshow')->name('stockReport.show');

Route::get('openstocksheet/$id','HomeController@openstocklink');

//Route::post('promoter/stock-report/{$id}','HomeController@stockReportshow')->name('user.stockReportshow');
Route::get('promoter/stock-report', 'HomeController@stockReport')->name('user.stock-report');

Route::get('promoter/create','DocumentController@create')->name('user.create');
Route::post('promoter/create','DocumentController@store')->name('user.store');

Route::get('admin/dashboard/send', 'HomeController@sendNotification')->name('send');

Route::get('admin/dashboard/notification', 'HomeController@createNotification')->name('admin.noitification');
Route::post('admin/dashboard/notification','HomeController@store')->name('admin.store');

Route::get('promoters/notification', 'HomeController@singleNoitification')->name('user.notification');
Route::get('promoters/notification/{slug}', 'HomeController@notificationDetail')->name('user.detailnotification');

