<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\Thread\MainController;

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
    Route::get('/forum/create-thread', CreateThreadController::class)->name('threads.create');
    Route::post('/forum', StoreThreadController::class)->name('threads.store');
    Route::get('/forum/{thread}', ShowThreadController::class)->name('threads.show');
    Route::get('/forum/{thread}/edit', EditThreadController::class)->name('threads.edit');
    Route::patch('/forum/{thread}', UpdateThreadController::class)->name('threads.update');
    Route::delete('/forum/{thread}', DestroyThreadController::class)->name('threads.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function() {
    Route::group(['namespace' => 'Thread'], function() {
        Route::get('/thread', MainController::class)->name('admin.thread.main');
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
