<?php

use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Front\ArticleController as FrontArticleController;
use App\Http\Controllers\Front\CategoryController as FrontCategoryController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Middleware\UserAccess;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\search;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/p/{slug}', [FrontArticleController::class, 'show']);
Route::get('/articles', [FrontArticleController::class, 'index']);
Route::post('/articles/search', [FrontArticleController::class, 'index'])->name('search');

Route::get('category/{slug}', [FrontCategoryController::class, 'index']);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('article', ArticleController::class);

    Route::resource('/categories', CategoryController::class)->only([
    'index', 'store', 'update', 'destroy'
    ])->middleware('userAccess:1');

    Route::resource('/users', UserController::class);

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
