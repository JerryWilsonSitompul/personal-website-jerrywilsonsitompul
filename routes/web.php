<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/en', [HomeController::class, 'index'])->name('en');
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
Route::get('/en/experience', [ExperienceController::class, 'index'])->name('en.experience');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/en/portfolio', [PortfolioController::class, 'index'])->name('en.portfolio');