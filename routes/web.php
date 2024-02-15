<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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

Route::controller(SiteController::class)->group(function(){
    Route::get('/', 'login')->name('site.login');
});

Route::controller(UserController::class)->group(function(){
    // Route::get('/register', [UserController::class, 'create'])->name('register');
    Route::post('/register', 'store')->name('site.createUser');
    Route::get('/register', 'create')->name('site.register');
});
