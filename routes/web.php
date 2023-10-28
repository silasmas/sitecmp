<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\Minister;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\TestimialController;
use App\Http\Controllers\VideoController;
use App\Http\Resources\Gallery;
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
Route::get('/articles', [PostController::class, 'articles'])->name('articles');
Route::get('/events', [ProfileController::class, 'events'])->name('events');
Route::get('/projects', [ProfileController::class, 'projects'])->name('projects');
Route::get('/contributions', [ProfileController::class, 'contributions'])->name('contributions');
Route::get('/media', [ProfileController::class, 'galerie'])->name('media');
Route::get('/contact', [ProfileController::class, 'contact'])->name('contact');
Route::get('/bunda', [ProfileController::class, 'bunda'])->name('bunda');
Route::get('/videos', [ProfileController::class, 'videos'])->name('videos');
Route::get('/show_article/{id}', [PostController::class, 'show'])->name('show_article');
Route::get('detailProjet/{id}', [ProjetController::class, 'show'])->name('detailProjet');

Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter');
Route::post('/storEvent', [EventController::class, 'store'])->name('storEvent');

Route::get('admin', function () {
    return view('auth.login');
})->name('admin');

// Route::get('/dashboard', function () {
//     return view('admin.pages.home');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix("admin")->middleware(['auth'])->group(function () {

    Route::get('/post', [PostController::class, 'index'])->name('post');
    Route::get('/galerie', [Gallery::class, 'index'])->name('galerie');
    Route::get('/testimonial', [TestimialController::class, 'index'])->name('testimonial');

    Route::controller(PostController::class)->group(function () {
        $idRegex = "[0-9]*";
        Route::get('posts', 'index')->name('posts');
        Route::get('/addPost', 'create')->name('addPost');
        Route::post('StorePost', 'store')->name('StorePost');

        Route::get('editPost/{id}', 'edit')->name('editPost')->where(["id" => $idRegex]);
        Route::post('UpdatPost', 'update')->name('UpdatPost');
        Route::get('delPost/{id}', 'destroy')->name('delPost')->where(["id" => $idRegex]);
    });
    Route::controller(VideoController::class)->group(function () {
        $idRegex = "[0-9]*";
        Route::get('video_all', 'index')->name('video_all');
        Route::get('/addPost', 'create')->name('addPost');
        Route::post('StorePost', 'store')->name('StorePost');

        Route::get('editPost/{id}', 'edit')->name('editPost')->where(["id" => $idRegex]);
        Route::post('UpdatPost', 'update')->name('UpdatPost');
        Route::get('delPost/{id}', 'destroy')->name('delPost')->where(["id" => $idRegex]);
    });
    Route::controller(Minister::class)->group(function () {
        $idRegex = "[0-9]*";
        Route::get('ministres', 'index')->name('ministres');
        Route::get('/addMinistre', 'create')->name('addMinistre');
        Route::post('storeMinistre', 'store')->name('storeMinistre');

        Route::get('editMinistre/{id}', 'edit')->name('editMinistre')->where(["id" => $idRegex]);
        Route::post('UpdatMinistres', 'update')->name('UpdatMinistres');
        Route::get('delMinistre/{id}', 'destroy')->name('delMinistre')->where(["id" => $idRegex]);
    });

    Route::controller(EventController::class)->group(function () {
        $idRegex = "[0-9]*";
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/event', 'index')->name('event');
        Route::get('/addEvent', 'create')->name('addEvent');

        Route::get('editEvent/{id}', 'edit')->name('editEvent')->where(["id" => $idRegex]);
        Route::post('UpdatEvent', 'update')->name('UpdatEvent');
        Route::get('delEvent/{id}', 'destroy')->name('delEvent')->where(["id" => $idRegex]);
    });
});

require __DIR__ . '/auth.php';
