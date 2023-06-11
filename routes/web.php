<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
Route::get('/dashboard', [DashboardController::class, 'show_posts'])->middleware(['auth', 'verified'])->name('dashboard');
|
*/


Route::get('/dashboard', [DashboardController::class, 'show_posts'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/', [HomeController::class, 'show_posts'])->name('home');
    Route::get('/about', [HomeController::class, 'show_about'])->name('about');
    Route::get('/contact', [HomeController::class, 'show_contact'])->name('contact');
    
    Route::get('/post', [PostController::class, 'index'])->name('post_index');
    Route::post('/post', [PostController::class, 'create'])->name('post_create');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post_edit');
    Route::put('/post/edit/{id}', [PostController::class, 'update'])->name('post_update');
    Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->name('post_destroy');
    
});


require __DIR__.'/auth.php';
