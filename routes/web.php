<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;

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

// Public routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/en', [HomeController::class, 'index'])->name('en');
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
Route::get('/en/experience', [ExperienceController::class, 'index'])->name('en.experience');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/en/portfolio', [PortfolioController::class, 'index'])->name('en.portfolio');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Test route to check authentication
Route::get('/test-auth', function() {
    if (auth()->check()) {
        $user = auth()->user();
        return response()->json([
            'authenticated' => true,
            'user' => [
                'id' => $user->id,
                'email' => $user->email,
                'is_admin' => $user->is_admin,
                'role' => $user->role
            ]
        ]);
    }
    return response()->json(['authenticated' => false]);
});

// Admin routes
// Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
    
    // Posts management
    Route::resource('posts', PostController::class);
    Route::post('posts/{post}/toggle-featured', [PostController::class, 'toggleFeatured'])->name('posts.toggle-featured');
    Route::post('posts/{post}/toggle-published', [PostController::class, 'togglePublished'])->name('posts.toggle-published');
    
    // Categories management
    Route::resource('categories', CategoryController::class);
// });