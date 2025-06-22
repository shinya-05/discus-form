<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/', [BlogController::class, 'index'])->name('index');

// Breezeの認証ルートを必ず含める
require __DIR__.'/auth.php';


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/admin/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/admin/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::post('/admin/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/admin/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
});
