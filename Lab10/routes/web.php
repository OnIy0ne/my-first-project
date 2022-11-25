<?php

use App\Http\Controllers\AdminController;
use Illuminate\Auth\Events\Logout;
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

/* Route::get('/', 'HomeController@index');

Route::get('/product', 'HomeController@product');

Route::get('/news', 'HomeController@news');

Route::get('/trang-chu', 'HomeController@index');

Route::get('/admin','AdminController@index');

Route::get('/dashboard','AdminController@show_dashboard');

Route::post('/admin-dashboard','AdminController@dashboard');

Route::get('/logout','AdminController@logout');
 */

Route::get('/','App\Http\Controllers\HomeController@index');

Route::get('trang-chu','App\Http\Controllers\HomeController@index');

Route::get('home','HomeController@index');

Route::get('trangchu', [HomeController::class, 'index']);

// backend
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard',[AdminController::class,'show_dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::post('/admin-dashboard',[AdminController::class, 'dashboard']);
Route::get('/add-category-product',[CategoryProduct::class, 'add_category_product']);
Route::get('/all-category-product',[CategoryProduct::class, 'all_category_product']);
Route::post('/save-category-product','CategoryProduct@save_category_product');
