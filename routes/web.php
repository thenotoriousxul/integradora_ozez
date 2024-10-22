<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/products', function() {
    return view('products');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashmenu', function() {
    return view('dashmenu');
});
Route::get('/inventario', function() {
    return view('inventario');
});
Route::get('/opiniones', function() {
    return view('opiniones');
});
Route::get('/gesordenes', function() {
    return view('gesordenes');
});
Route::get('/historial', function() {
    return view('historial');
});
require __DIR__.'/auth.php';
