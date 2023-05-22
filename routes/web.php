<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/', function () {
    return view('landingpage');
});

// tentang kami
Route::get('/about', function() {
    return view('tentang-kami/tentang-kami');
});
Route::get('/about2', function() {
    return view('tentang-kami/tentang-kami2');
});
Route::get('/about3', function() {
    return view('tentang-kami/tentang-kami3');
});
Route::get('/about4', function() {
    return view('tentang-kami/tentang-kami4');
});
Route::get('/about5', function() {
    return view('tentang-kami/tentang-kami5');
});
Route::get('/about6', function() {
    return view('tentang-kami/tentang-kami6');
});

// login - registrasi - logout
Route::get('/registrasi', [CustomerController::class, 'blank']);
Route::post('/registrasi', [CustomerController::class, 'register']);
Route::get('/login', [CustomerController::class, 'login']);
Route::get('/logout', [CustomerController::class, 'logout']);
Route::get('/welcome', [CustomerController::class, 'welcome']);


// dashboard
// Route::get('my/{customer_username}', [CustomerController::class, 'dashboard']);
Route::get('/my/{customer_username}', [CustomerController::class, 'dashboard']);
Route::get('/my/{customer_username}/orders', [CustomerController::class, 'history_order']);

// product 
Route::get('/ez-pz-coffee', [CustomerController::class, 'show_products']);
Route::get('/ez-pz-coffee/indonesian', [CustomerController::class, 'show_indonesian']);
Route::get('/ez-pz-coffee/{coffee_nama}', [CustomerController::class, 'detail_product']);

// cart
Route::post('/cart/{coffee_id}', [ProductController::class, 'add_to_cart']);
Route::get('/payment', [ProductController::class, 'cart_to_payment']);
Route::get('/payment/success/{customer_id}', [ProductController::class, 'payment_success']);

//kopipedia
Route::get('/kopipedia', function() {
    return view('kopipedia.kopipedia');
});
Route::get('/kopipedia/arabica', function() {
    return view('kopipedia.kopipedia-beans1');
});
Route::get('/kopipedia/robusta', function() {
    return view('kopipedia.kopipedia-beans2');
});
Route::get('/kopipedia/luwak-gayo', function() {
    return view('kopipedia.kopipedia-beans3');
});

Route::get('/kopipedia/espresso', function() {
    return view('kopipedia.kopipedia-beans1');
});
Route::get('/kopipedia/cappucino', function() {
    return view('kopipedia.kopipedia-beans2');
});
Route::get('/kopipedia/latte', function() {
    return view('kopipedia.kopipedia-beans3');
});

// admin
Route::get('/admin', function() {
    return view('bro-admin.landingpage-admin');
});

Route::get('/admin/coffee', [AdminController::class, 'dashboard_coffee']);
Route::post('/admin/coffee/tambah', [AdminController::class, 'add_coffee']);
Route::get('/admin/coffee/tambah', [AdminController::class, 'add_coffee_view']);
Route::post('/admin/coffee/{coffee_id}/update', [AdminController::class, 'update_coffee']);
Route::get('/admin/coffee/{coffee_id}/update', [AdminController::class, 'show_exist']);
Route::get('/admin/coffee/{coffee_id}/delete', [AdminController::class, 'delete_coffee']);

