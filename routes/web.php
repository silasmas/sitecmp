<?php

use App\Http\Resources\Gallery;
use App\Http\Controllers\Minister;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaithfulController;
use App\Http\Controllers\OffrandeController;
use App\Http\Controllers\TestimialController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\MissionnaireController;
use App\Filament\Administrateur\Resources\MissionnaireResource\Pages\PublicMissionnaireForm;
use App\Http\Controllers\ReceptionScheduleController;
use App\Http\Controllers\RequeteController;
use App\Models\reception_schedule;
use App\Http\Controllers\ExportController;

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
Route::get('/playliste', [ProfileController::class, 'playliste'])->name('playliste');
Route::get('/videos', [ProfileController::class, 'videos'])->name('videos');
Route::get('/show_article/{slug}', [PostController::class, 'tagNamePast'])->name('show_article');
Route::get('/article/{slug}', [PostController::class, 'tagNamePast'])->name('article');
Route::get('/articles_event/{slug}', [PostController::class, 'show'])->name('articles_event');
Route::get('/articles_day/{slug}', [PostController::class, 'show'])->name('articles_day');

Route::get('detailProjet/{id}', [ProjetController::class, 'show'])->name('detailProjet');
Route::get('welcome', [FaithfulController::class, 'index'])->name('welcome');
Route::get('missionnaire', [FaithfulController::class, 'missionnaire'])->name('missionnaire');
Route::get('requete', [RequeteController::class, 'index'])->name('requete');
Route::get('reception', [ReceptionScheduleController::class, 'index'])->name('reception');

Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter');
Route::post('/temoignage', [TestimialController::class, 'store'])->name('temoignage');
Route::post('/storEvent', [EventController::class, 'store'])->name('storEvent');
Route::post('/storeMissionnaire', [MissionnaireController::class, 'store'])->name('storeMissionnaire');

Route::post('paieOffrande', action: [OffrandeController::class, 'paieOffrande'])->name('paieOffrande');

Route::post('storeTransaction', action: [OffrandeController::class, 'store'])->name(name: 'storeTransaction');
Route::post('storeRequete', action: [RequeteController::class, 'store'])->name(name: 'storeRequete');

Route::get('/checkTransactionStatus', [OffrandeController::class, 'checkTransactionStatus'])->name('checkTransactionStatus');

Route::get('/paid/{reference}/{amount}/{currency}/{code}', [OffrandeController::class, 'paid'])->whereNumber(['amount', 'code'])->name('paid');



Route::get('/users/export/excel', [ExportController::class, 'exportExcel'])->name('users.export.excel');
Route::get('/users/export/pdf', [ExportController::class, 'exportPdf'])->name('users.export.pdf');


Route::get('/search-articles', [PostController::class, 'search'])->name('search.articles');

Route::get('admin', function () {
    return view('auth.login');
})->name('admin');
Route::get('/symlink', action: function () {
    return view('symlink');
})->name('generate_symlink');
// Route::get('/dashboard', function () {
//     return view('admin.pages.home');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('missionnaire', PublicMissionnaireForm::class)->name('missionnaire');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::prefix("admin")->middleware(['auth'])->group(function () {

//     Route::get('/post', [PostController::class, 'index'])->name('post');
//     Route::get('/galerie', [Gallery::class, 'index'])->name('galerie');
//     Route::get('/testimonial', [TestimialController::class, 'index'])->name('testimonial');

//     Route::controller(PostController::class)->group(function () {
//         $idRegex = "[0-9]*";
//         Route::get('posts', 'index')->name('posts');
//         Route::get('/addPost', 'create')->name('addPost');
//         Route::post('StorePost', 'store')->name('StorePost');

//         Route::get('editPost/{id}', 'edit')->name('editPost')->where(["id" => $idRegex]);
//         Route::post('UpdatPost', 'update')->name('UpdatPost');
//         Route::get('delPost/{id}', 'destroy')->name('delPost')->where(["id" => $idRegex]);
//     });
//     Route::controller(VideoController::class)->group(function () {
//         $idRegex = "[0-9]*";
//         Route::get('video_all', 'index')->name('video_all');
//         Route::get('/addVideo', 'create')->name('addVideo');
//         Route::post('storVideo', 'store')->name('storVideo');

//         Route::get('editVideo/{id}', 'edit')->name('editVideo')->where(["id" => $idRegex]);
//         Route::post('UpdatVideo', 'update')->name('UpdatVideo');
//         Route::get('delVideo/{id}', 'destroy')->name('delVideo')->where(["id" => $idRegex]);
//     });
//     Route::controller(Minister::class)->group(function () {
//         $idRegex = "[0-9]*";
//         Route::get('ministres', 'index')->name('ministres');
//         Route::get('/addMinistre', 'create')->name('addMinistre');
//         Route::post('storeMinistre', 'store')->name('storeMinistre');

//         Route::get('editMinistre/{id}', 'edit')->name('editMinistre')->where(["id" => $idRegex]);
//         Route::post('UpdatMinistres', 'update')->name('UpdatMinistres');
//         Route::get('delMinistre/{id}', 'destroy')->name('delMinistre')->where(["id" => $idRegex]);
//     });

//     Route::controller(EventController::class)->group(function () {
//         $idRegex = "[0-9]*";
//         Route::get('/dashboard', 'dashboard')->name('dashboard');
//         Route::get('/event', 'index')->name('event');
//         Route::get('/addEvent', 'create')->name('addEvent');

//         Route::get('editEvent/{id}', 'edit')->name('editEvent')->where(["id" => $idRegex]);
//         Route::post('UpdatEvent', 'update')->name('UpdatEvent');
//         Route::get('delEvent/{id}', 'destroy')->name('delEvent')->where(["id" => $idRegex]);
//     });
// });

require __DIR__ . '/auth.php';
