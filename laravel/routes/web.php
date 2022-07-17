<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
// User 
Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('client.index');
    });
    Route::get('/shop', function () {
        return view('client.shop');
    });
    Route::get('/shop-detail/{id}', function () {
        return view('client.shop-detail');
    });
    Route::get('/cart', function () {
        return view('client.cart');
    });
    Route::get('/checkout', function () {
        return view('client.checkout');
    });
    Route::get('/about', function () {
        return view('client.about');
    });
    Route::get('/contact', function () {
        return view('client.contact');
    });
    Route::get('/portfolio', function () {
        return view('client.portfolio');
    });
    Route::get('/portfolio-detail', function () {
        return view('client.portfolio-detail');
    });
    Route::get('/blog', function () {
        return view('client.blog');
    });
    Route::get('/blog-detail', function () {
        return view('client.blog-detail');
    });
    Route::get('/login', function () {
        return view('client.login-form');
    });
    Route::get('/regist', function () {
        return view('client.register-form');
    });
});

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('categories',CategoriesController::class);
    Route::resource('products',ProductsController::class);
    
    // Route::resources([
    //     'categories' => 'CategoriesController',
    //     'products' => 'ProductController'
    // ]);
});
