<?php

use App\Http\Controllers\ProfileController;
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
// Language
Route::get('/language/{locale}', [ProfileController::class, 'changeLanguage'])->name('change_language');

Route::get('/', [ProfileController::class, 'home'])->name('home');
Route::get('/about', [ProfileController::class, 'about'])->name('about');
Route::get('/articles', [ProfileController::class, 'articles'])->name('articles');
Route::get('/events', [ProfileController::class, 'events'])->name('events');
Route::get('/projects', [ProfileController::class, 'projects'])->name('projects');
Route::get('/contributions', [ProfileController::class, 'contributions'])->name('contributions');
Route::get('/galerie', [ProfileController::class, 'galerie'])->name('galerie');
Route::get('/contact', [ProfileController::class, 'contact'])->name('contact');
Route::get('admin', function () {
    return view('auth.login');
})->name('admin');

Route::get('/dashboard', function () {
    return view('admin.pages.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
