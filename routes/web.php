<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\WebConteroller;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('login', function () {
// 	return redirect('/login/create');
// });
Route::get('login/create',[LoginController::class,'create']);
Route::post('login/check',[LoginController::class,'check']);
Route::post('logout',[LoginController::class,'logout']);

Route::get('/', [WebConteroller::class,'index']);
Route::get('signup/create', [RegisterController::class,'create']);
Route::post('signup/store', [RegisterController::class, 'store']);

Route::get('dashboard', [HomeController::class,'index'])->name('dashboard');

Route::resource('product', ProductController::class);
// Route::get('outofstock', [ProductController::class,'outofstock'])->name('outofstock');
Route::resource('order', SellController::class);
Route::get('fetch_products', [SellController::class,'fetch_products']);
Route::post('fetch_single_product', [SellController::class,'fetch_single_product']);




