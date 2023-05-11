<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashbaordController;
use App\Http\Controllers\HomeController;
use Faker\Guesser\Name;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/not_match_middleware_credential', [HomeController::class, 'notMatchPage'])->name('not_match_middleware_credential');



Route::group(['prefix' => '/admin', 'middleware'=> 'checkAge'],function(){
    Route::get('/dashboard',[DashbaordController::class, 'index'])->name('dashboard');
});

