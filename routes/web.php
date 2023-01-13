<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubscribeController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/single-product', function () {
    return view('single-product');
});
Route::post('/subscribe', [SubscribeController::class, 'save_subscription']);
// Route::get('/user', [UserController::class, 'index']);
Route::post('/appointment', [SubscribeController::class, 'save_appointment']);

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login']);
    Route::get('/signup', [AdminController::class, 'signup']);
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/profile', [AdminController::class, 'profile']);
});