<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles', ArticleController::class);


// Route::get('/articles', [ArticleController::class, 'index'])
//     ->name('articles.index');

// Route::get('/articles/create', [ArticleController::class, 'create'])
//     ->name('articles.create');

// Route::post('/articles', [ArticleController::class, 'store'])
//     ->name('articles.store');

// Route::get('/articles/{article}', [ArticleController::class, 'show'])
//     ->name('articles.show');

// Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])
//     ->name('articles.edit');

// Route::put('/articles/{article}', [ArticleController::class, 'update'])
//     ->name('articles.update');

// Route::delete('/article/{article}', [ArticleController::class, 'destroy'])
//     ->name('articles.destroy');
