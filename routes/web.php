<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\AboutController;

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

Route::get('/', IndexController::class)->name('index');
Route::get('/forum', ForumController::class)->name('forum');
Route::get('/about', AboutController::class)->name('about');

Route::group(['namespace' => 'App\Http\Controllers\Thread'], function() {
    Route::get('/forum/create-thread', CreateThreadController::class)->name('thread.create');
});
