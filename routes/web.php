<?php

use App\Http\Controllers\backend\AdminDashboardController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

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


//frontend route
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/categoty-page/{id}', [FrontendController::class, 'category_page'])->name('frontend.category.page');
Route::get('/single-product/{id}', [FrontendController::class, 'single_product'])->name('frontend.single.product.page');
Route::post('/shop-checkout', [FrontendController::class, 'shop_checkout'])->name('shop.checkout');
Route::post('/order', [FrontendController::class, 'order'])->name('order');
Route::get('/shopping/card', [FrontendController::class, 'shopping_card'])->name('shopping.card');













