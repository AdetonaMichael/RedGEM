<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', function(){
    return view('about');
});
Auth::routes();
Route::get('checkout', function(){
    return view('checkout');
});
Route::get('privacy_policy', [PagesController::class, 'privacy_policy']);
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

