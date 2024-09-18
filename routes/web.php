<?php

use App\Http\Controllers\backend\AdminDashboardController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProfileController;

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

Route::get('/cart/count', function () {
    $totalItems = session()->get('cart_count', 0);
    return response()->json(['count' => $totalItems]);
})->name('cart.count');

//frontend route
Route::get('/customer-login', [FrontendController::class, 'login_page'])->name('frontend.login');
Route::post('/customer-logedin', [FrontendController::class, 'customer_login'])->name('frontend.customer.login');
Route::get('customer/logout', [FrontendController::class, 'customer_logout'])->name('frontend.customer.logout');
Route::get('/customer-register', [FrontendController::class, 'register_page'])->name('frontend.register');
Route::post('/customer-registration', [FrontendController::class, 'customer_registration'])->name('frontend.customer.register');

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/categoty-page/{id}', [FrontendController::class, 'category_page'])->name('frontend.category.page');
Route::get('/single-product/{id}', [FrontendController::class, 'single_product'])->name('frontend.single.product.page');
Route::get('/shop-checkout', [FrontendController::class, 'shop_checkout'])->name('shop.checkout');
Route::post('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::get('/shopping/card', [FrontendController::class, 'shopping_card'])->name('shopping.card');
Route::post('/cart/update/{id}', [FrontendController::class, 'update'])->name('cart.update');
Route::post('/cart/add', [FrontendController::class, 'cart_add'])->name('cart.add');
Route::delete('/cart/remove/{id}', [FrontendController::class, 'remove'])->name('cart.remove');
Route::get('/search', [FrontendController::class, 'search'])->name('search.results');


Route::get('/profile', [ProfileController::class, 'profile'])->name('user.profile');



// Route to clear cart session
Route::post('/clear-cart-session', [FrontendController::class, 'clearCartSession']);











