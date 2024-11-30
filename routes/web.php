<?php

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/{profile}', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/video', [App\Http\Controllers\HomeController::class, 'video'])->name('video');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
