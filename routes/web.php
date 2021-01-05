<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ReplyController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/articles', [ArticlesController::class,'index'])->name('articles.index')->middleware('auth');

Route::get('/articles/create', [ArticlesController::class,'create'])->name('articles.create')->middleware('auth');

Route::post('/articles', [ArticlesController::class,'store']);

Route::get('/reply/create', [ReplyController::class,'create'])->name('reply.create')->middleware('auth');

Route::post('/reply', [ReplyController::class,'store']);



