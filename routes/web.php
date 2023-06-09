<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth'])->group(function(){
    Route::get('/user/{id}', [\App\Http\Controllers\ProductController::class, 'account'])->name('user.account');
    Route::get('/product/create', [\App\Http\Controllers\ProductController::class, 'create']);
    Route::post('/product', [\App\Http\Controllers\ProductController::class, 'store']);
    Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'show']);
    Route::put('/product/{id}/lend', [App\Http\Controllers\ProductController::class, 'lend'])->name('product.lend');
    Route::put('/product/{id}/return', [App\Http\Controllers\ProductController::class, 'return'])->name('product.return');
    Route::post('/product/comment', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
});

Route::put('/user/{user}/block', [\App\Http\Controllers\UserController::class, 'block'])->name('user.block');
Route::put('/user/{user}/unblock', [\App\Http\Controllers\UserController::class, 'unblock'])->name('user.unblock');

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);




Route::delete('/products/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
