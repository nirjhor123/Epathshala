<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



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

Route::get('/login', function () {
    return view('login');
});


Route::get('/home', function () {
    return view('home');
});
// Route::post('/', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/', [ProductController::class, 'index']);
// Route::get('/home', [ProductController::class, 'home']);


// Route::match(['GET', 'POST'], '/', [UserController::class, 'login']);




