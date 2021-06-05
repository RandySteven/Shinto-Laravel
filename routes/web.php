<?php

use App\Http\Controllers\DiaryController;
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
    Route::get('/', [DiaryController::class, 'index'])->name('diary.index');
    Route::get('/write-diary', [DiaryController::class, 'create'])->name('diary.create');
    Route::post('/write-diary', [DiaryController::class, 'store'])->name('diary.store');
    Route::get('/{diary:slug}', [DiaryController::class, 'show'])->name('diary.show');
    Route::get('/edit/{diary:slug}', [DiaryController::class, 'edit'])->name('diary.edit');
    Route::put('/update/{diary:slug}', [DiaryController::class, 'update'])->name('diary.update');
    Route::delete('/delete/{diary:slug}', [DiaryController::class, 'delete'])->name('diary.delete');
});
