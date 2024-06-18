<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;



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


Route::get('/index',[DashboardController::class, 'index'])->name('index');

Route::get('/contact',[ContactusController::class, 'contact'])->name('contact');

Route::get('/about',[AboutusController::class, 'about'])->name('about');



