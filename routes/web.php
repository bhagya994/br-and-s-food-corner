<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
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

Route::get('/', [HomeController::class, 'index'])->name('fr.home');
Route::get('/about', [AboutController::class, 'index'])->name('fr.about');
Route::get('/contact', [ContactController::class, 'index'])->name('fr.contact');
Route::get('/faq', [FaqController::class, 'index'])->name('fr.faq');
Route::get('/menu', [MenuController::class, 'index'])->name('fr.menu');
Route::get('/cart', [CheckoutController::class, 'index'])->name('fr.cart');
