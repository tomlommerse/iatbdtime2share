<?php

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

Route::middleware(['auth'])->group(function(){
    Route::get('/account', [\App\Http\Controllers\ProductController::class, 'account']);
    Route::get('/product/create', [\App\Http\Controllers\ProductController::class, 'create']);
    Route::post('/product', [\App\Http\Controllers\ProductController::class, 'store']);
    Route::post('/product/{id}/lend', [App\Http\Controllers\ProductController::class, 'lend'])->name('product.lend');
    Route::post('/product/{id}/return', [App\Http\Controllers\ProductController::class, 'return'])->name('product.return');
    Route::post('/product', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');


});

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'show']);

// Route::middleware(['auth', 'admin'])->group(function(){
//     Route::get('/account', [\App\Http\Controllers\ProductController::class, 'account']);
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
