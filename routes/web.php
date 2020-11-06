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
// Route::get('/',[Homecontroller::class,'index'])->name('');

// Route::get('/trang-chu',[Homecontroller::class,'index'])->name('trang-chu');
//Fontend
Route::get('/','App\Http\Controllers\Homecontroller@index');
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');

//detail
Route::get('/detail','App\Http\Controllers\HomeController@detail');
//category
Route::get('/category','App\Http\Controllers\HomeController@category');

//Backend
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');

//category
Route::get('/add-category','App\Http\Controllers\categoryProduct@add_category');
Route::get('/category-product','App\Http\Controllers\categoryProduct@category_product');
Route::post('/save-category-product','App\Http\Controllers\categoryProduct@save_category_product');