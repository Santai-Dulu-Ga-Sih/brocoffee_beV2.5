<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// API Admin
Route::get('/admin/coffee', [ApiController::class, 'dashboard_coffee']);   // menampilkan coffee yang ada
Route::get('/admin/coffee/{coffee_id}', [ApiController::class, 'show_one']);   // menampilkan 1 kopi dengan coffee_id
Route::post('/admin/coffee/tambah', [ApiController::class, 'add_coffee']);
Route::put('/admin/coffee/{coffee_id}/update', [ApiController::class, 'update_coffee']);
Route::delete('/admin/coffee/{coffee_id}/delete', [ApiController::class, 'delete_coffee']);

// API Customer
Route::post('/registrasi', [ApiController::class, 'register']);