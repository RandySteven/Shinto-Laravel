<?php

use App\Http\Controllers\DiaryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'welcome')->name('welcome');
Route::view('/about', 'about')->name('about');

Route::prefix('/shinto-diary')->group(function(){
    Route::middleware(['auth'])->group(function(){
        Route::get('/', [DiaryController::class, 'index'])->name('diary.index')->withoutMiddleware('auth');
        Route::get('/write-diary', [DiaryController::class, 'create'])->name('diary.create')->middleware('verified');
        Route::get('/{diary:slug}', [DiaryController::class, 'show'])->name('diary.show')->withoutMiddleware('auth');
        Route::post('/store-diary', [DiaryController::class, 'store'])->name('diary.store');
        Route::get('/edit/{diary:slug}', [DiaryController::class, 'edit'])->name('diary.edit');
        Route::put('/update/{diary:slug}', [DiaryController::class, 'update'])->name('diary.update');
        Route::delete('/delete/{diary:slug}', [DiaryController::class, 'delete'])->name('diary.delete');
        Route::post('/send-email/{diary:slug}', [DiaryController::class, 'sendDiary'])->name('send.diary');
    });
});

Route::get('/tag/{tag:slug}', [TagController::class, 'index'])->name('tag');
Route::get('/user/{user:name}', [UserController::class, 'show'])->name('user.show');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
