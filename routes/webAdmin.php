<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\backend\AdminDashboardController;

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



//route for admin panel

Route::middleware('admin.redirect')->group(function (){
     //admin login
     Route::get('admin/login', [LoginController::class, 'loginPage'])->name('admin.login');
     Route::post('admin/login', [LoginController::class, 'loged_in'])->name('admin.loged_in');
});


Route::middleware('admin')->group(function (){
    Route::get('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

    //dashboard route
    Route::name('admin.dashboard.')->prefix('admin/dashboard')->group(function(){
        Route::get('/index',[AdminDashboardController::class, 'dashboard'])->name('index');

    });
    // category route
    Route::name('admin.category.')->prefix('admin/category')->group(function () {
        Route::get('/list',[AdminDashboardController::class, 'categoryList'])->name('list');
        Route::get('/page',[AdminDashboardController::class, 'categoryPage'])->name('page');
        Route::post('/store',[AdminDashboardController::class, 'categoryStore'])->name('store');
        Route::get('/update/{id}',[AdminDashboardController::class, 'categoryupdatePage'])->name('update.page');
        Route::post('/update',[AdminDashboardController::class, 'categoryUpdate'])->name('update');
        Route::get('/delete/{id}',[AdminDashboardController::class, 'categoryDelete'])->name('delete');
        Route::get('/status/update/{id}',[AdminDashboardController::class, 'categoryStatusUpdate'])->name('status.update');
    });


    // sub category route 
    Route::name('admin.sub.cat.')->prefix('admin/sub/cat')->group(function () {
        Route::get('/list',[AdminDashboardController::class, 'subcategoryList'])->name('list');
        Route::get('/create',[AdminDashboardController::class, 'subCatCreate'])->name('create');
        Route::post('/store',[AdminDashboardController::class, 'subcategoryStore'])->name('store');
        Route::get('/update/{id}',[AdminDashboardController::class, 'subcategoryupdatePage'])->name('update.page');
        Route::post('/update',[AdminDashboardController::class, 'subcategoryUpdate'])->name('update');
        Route::get('/delete/{id}',[AdminDashboardController::class, 'subcategoryDelete'])->name('delete');
        Route::get('/status/update/{id}',[AdminDashboardController::class, 'subcategoryStatusUpdate'])->name('status.update');
        
    });

    // product route 
    Route::name('admin.product.')->prefix('admin/product')->group(function () {
        Route::get('/list',[ProductController::class, 'productList'])->name('list');
        Route::get('/create',[ProductController::class, 'productCreate'])->name('create');
        Route::post('/store',[ProductController::class, 'productStore'])->name('store');
        Route::get('/update/{id}',[ProductController::class, 'productupdatePage'])->name('update.page');
        Route::post('/update',[ProductController::class, 'productUpdate'])->name('update');
        Route::get('/delete/{id}',[ProductController::class, 'productDelete'])->name('delete');
        Route::get('/status/update/{id}',[ProductController::class, 'productStatusUpdate'])->name('status.update');
        
    });

    // slider route
    Route::name('admin.slider.')->prefix('admin/slider')->group(function () {
        Route::get('/list',[SliderController::class, 'sliderList'])->name('list');
        Route::get('/page',[SliderController::class, 'sliderPage'])->name('page');
        Route::post('/store',[SliderController::class, 'sliderStore'])->name('store');
        Route::get('/update/{id}',[SliderController::class, 'sliderupdatePage'])->name('update.page');
        Route::post('/update',[SliderController::class, 'sliderUpdate'])->name('update');
        Route::get('/delete/{id}',[SliderController::class, 'sliderDelete'])->name('delete');
        Route::get('/status/update/{id}',[SliderController::class, 'sliderStatusUpdate'])->name('status.update');
    });

    // User route
    Route::name('admin.user.')->prefix('admin/user')->group(function () {
        Route::get('/list',[UserController::class, 'userList'])->name('list');
        Route::get('/page',[UserController::class, 'uesrPage'])->name('page');
        Route::post('/store',[UserController::class, 'userStore'])->name('store');
        Route::get('/update/{id}',[UserController::class, 'userupdatePage'])->name('update.page');
        Route::post('/update',[UserController::class, 'userUpdate'])->name('update');
        Route::get('/delete/{id}',[UserController::class, 'userDelete'])->name('delete');
        Route::get('/status/update/{id}',[UserController::class, 'userStatusUpdate'])->name('status.update');
    });

    //order route
    Route::name('admin.order.')->prefix('admin/order')->group(function () {
        Route::get('/list',[OrderController::class, 'orderList'])->name('list');
        Route::get('/page',[OrderController::class, 'uesrPage'])->name('page');
        Route::post('/store',[OrderController::class, 'userStore'])->name('store');
        Route::get('/update/{id}',[OrderController::class, 'userupdatePage'])->name('update.page');
        Route::post('/update',[OrderController::class, 'userUpdate'])->name('update');
        Route::get('/delete/{id}',[OrderController::class, 'userDelete'])->name('delete');
        Route::get('/status/update',[OrderController::class, 'orderStatusUpdate'])->name('status.update');
    });
});







